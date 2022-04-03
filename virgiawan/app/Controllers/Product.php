<?php

namespace App\Controllers;

use App\Models\M_product;
use App\Models\M_category;

class Product extends BaseController
{
    protected $M_product;
    protected $M_category;
    public function __construct()
    {
        $this->M_product = new M_product();
        $this->M_category = new M_category();
    }

    public function index($id = false)
    {
        $data = [
            'appName' => $this->appName,
            'title' => 'Product',
            'hero' => 0,
            'request' => $this->request,
            'product' => $this->M_product->get_product()->paginate('3', 'product'),
            'pager' => $this->M_product->get_product()->pager
        ];

        if ($id) {
            $data['title'] = 'Product Detail';
            $data['product'] = $this->M_product->get_product($id)->first();
            session()->setFlashdata('message', 'data successfully <b>retrieved</b>');
            return view('product/detail', $data);
        } else {
            return view('product/index', $data);
        }
    }

    public function add()
    {
        $data = [
            'appName' => $this->appName,
            'title' => 'Add Product',
            'hero' => 0,
            'request' => $this->request,
            'category' => $this->M_category->findAll(),
            'validation' => \Config\Services::validation()
        ];
        return view('product/add', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'name' => 'required|is_unique[product.name]',
            'price' => 'required|numeric',
        ])) {
            return redirect()->to('/product/add')->withInput();
        }

        // if thumbnail is empty, set default image
        $thumbnail = $this->request->getPost('thumbnail');
        if (!$thumbnail) {
            $thumbnail = 'https://www.seekpng.com/png/detail/9-94654_big-image-food-and-drink-icon-png.png';
        }

        $object = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'id_category' => $this->request->getPost('id_category'),
            'thumbnail' => $thumbnail,
        ];
        // dd($object);
        $this->M_product->save($object);
        session()->setFlashdata('message', 'data successfully <b>created</b>');
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $data = [
            'appName' => $this->appName,
            'title' => 'Edit Product',
            'hero' => 0,
            'request' => $this->request,
            'category' => $this->M_category->findAll(),
            'product' => $this->M_product->get_product($id),
            'validation' => \Config\Services::validation()
        ];
        return view('product/edit', $data);
    }

    public function update($id)
    {
        // cek name
        $old_name = $this->M_product->get_product($this->request->getPost('id'));
        if ($old_name->name == $this->request->getPost('name')) {
            $rule_name = 'required';
        } else {
            $rule_name = 'required|is_unique[product.name]';
        }

        // validasi input
        if (!$this->validate([
            'name' => $rule_name,
            'price' => 'required|numeric',
        ])) {
            return redirect()->to('/product/add')->withInput();
        }

        // if thumbnail is empty, set default image
        $thumbnail = $this->request->getPost('thumbnail');
        if (!$thumbnail) {
            $thumbnail = 'https://www.seekpng.com/png/detail/9-94654_big-image-food-and-drink-icon-png.png';
        }

        $object = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'id_category' => $this->request->getPost('id_category'),
            'thumbnail' => $this->request->getPost('thumbnail'),
        ];
        $this->M_product->update($id, $object);
        session()->setFlashdata('message', 'data successfully <b>updated</b>');
        return redirect()->to('/product');
    }

    public function delete($id)
    {
        $this->M_product->delete($id);
        session()->setFlashdata('message', 'data successfully <b>deleted</b>');
        return redirect()->to('/product');
    }
}
