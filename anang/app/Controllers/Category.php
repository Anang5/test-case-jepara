<?php

namespace App\Controllers;

use App\Models\Category_Model;

class Category extends BaseController
{
    protected $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new Category_Model();
    }
    public function index()
    {
        // $produk = $this->categoryModel->select('produk.*, category.name as categoryName, category.id as categoryId')->join();
        $data = [
            'category' => $this->categoryModel->findAll(),
        ];

        return view('produk/category', $data);
    }
}
