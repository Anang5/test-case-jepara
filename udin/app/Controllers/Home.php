<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'FoodDrink'
        ];
        echo view('pages/utama', $data);
    }
}
