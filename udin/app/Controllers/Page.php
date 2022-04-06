<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        return view('layout/template');
    }
    public function utama()
    {
        $data = [
            'title' => 'Home | FoodDrink'
        ];
        echo view('pages/utama', $data);
    }
    public function category()
    {
        $data = [
            'title' => 'Category | FoodDrink'
        ];
        echo view('pages/category', $data);
    }
    public function product()
    {
        $data = [
            'title' => 'Product | FoodDrink'
        ];
        echo view('pages/product', $data);
    }
    public function food()
    {
        $data = [
            'title' => 'Category | Food'
        ];
        echo view('pages/food', $data);
    }
    public function drink()
    {
        $data = [
            'title' => 'Category | Drink'
        ];
        echo view('pages/drink', $data);
    }
}
