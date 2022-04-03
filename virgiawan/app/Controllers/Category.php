<?php

namespace App\Controllers;

use App\Models\M_category;
use App\Models\M_product;

class Category extends BaseController
{
    protected $M_category;
    protected $M_product;
    public function __construct()
    {
        $this->M_category = new M_category();
        $this->M_product = new M_product();
    }

    public function index($id = false)
    {
        $data = [
            'appName' => $this->appName,
            'title' => 'Category',
            'hero' => 0,
            'category' => $this->M_category->paginate('4', 'category'),
            'pager' => $this->M_category->pager
        ];
        if ($id) {
            $data['title'] = 'Category Detail';
            $data['category'] = $this->M_category->get_category($id)->first();
            $data['product'] = $this->M_product->get_product_by_category($id)->paginate('3', 'product');
            $data['pager'] = $this->M_product->get_product_by_category($id)->pager;
            session()->setFlashdata('message', 'data successfully <b>retrieved</b>');
            return view('category/detail', $data);
        } else {
            return view('category/index', $data);
        }
    }

    public function add()
    {
        $data = [
            'appName' => $this->appName,
            'title' => 'Add Category',
            'hero' => 0,
            'validation' => \Config\Services::validation()
        ];
        return view('category/add', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'name' => 'required|is_unique[category.name]'
        ])) {
            return redirect()->to('/category/add')->withInput();
        }

        $object = [
            'name' => $this->request->getPost('name')
        ];
        $this->M_category->save($object);
        session()->setFlashdata('message', 'data successfully <b>created</b>');
        return redirect()->to('/category');
    }

    public function edit($id)
    {
        $data = [
            'appName' => $this->appName,
            'title' => 'Edit Category',
            'hero' => 0,
            'category' => $this->M_category->get_category($id),
            'validation' => \Config\Services::validation()
        ];
        return view('category/edit', $data);
    }

    public function update($id)
    {
        // validasi input
        if (!$this->validate([
            'name' => 'required|is_unique[category.name]'
        ])) {
            return redirect()->to('/category/add')->withInput();
        }

        $object = [
            'name' => $this->request->getPost('name')
        ];
        $this->M_category->update($id, $object);
        session()->setFlashdata('message', 'data successfully <b>updated</b>');
        return redirect()->to('/category');
    }

    public function delete($id)
    {
        $this->M_category->delete($id);
        session()->setFlashdata('message', 'data successfully <b>deleted</b>');
        return redirect()->to('/category');
    }
}
