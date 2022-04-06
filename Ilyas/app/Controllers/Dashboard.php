<?php

namespace App\Controllers;

class Dashboard extends BaseController // nama class disesuakan dengan nama file
{
    public function index() //index untuk method pemanggilan di view
    {
        $data = [
            'title' => 'Home | Test Case' // pemanggilan / perubahan title setiap halaman
        ];
        return view('dashboard/dashboard', $data); // dikembalikan ke view, $data untuk title
    }

    public function category()
    {
        $data = [
            'title' => 'Category'
        ];
        return view('dashboard/category', $data);
    }

    public function product()
    {
        $data = [
            'title' => 'Product',
        ];
        return view('dashboard/product', $data);
    }
}
