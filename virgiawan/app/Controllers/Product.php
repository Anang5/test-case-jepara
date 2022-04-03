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
            'product' => $this->M_product->get_product()
        ];

        if ($id) {
            $data['title'] = 'Product Detail';
            $data['product'] = $this->M_product->get_product($id);
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
            'category' => $this->M_category->get_category()
        ];
        return view('product/add', $data);
    }

    public function save()
    {
        $object = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'id_category' => $this->request->getPost('id_category'),
            'thumbnail' => $this->request->getPost('thumbnail'),
        ];
        // dd($object);
        $this->M_product->save($object);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $data = [
            'appName' => $this->appName,
            'title' => 'Edit Product',
            'hero' => 0,
            'category' => $this->M_category->get_category(),
            'product' => $this->M_product->get_product($id)
        ];
        return view('product/edit', $data);
    }

    public function update($id)
    {
        $object = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'id_category' => $this->request->getPost('id_category'),
            'thumbnail' => $this->request->getPost('thumbnail'),
        ];
        $this->M_product->update($id, $object);
        return redirect()->to('/product');
    }

    public function delete($id)
    {
        $this->M_product->delete($id);
        return redirect()->to('/product');
    }
}
