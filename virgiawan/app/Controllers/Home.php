<?php

namespace App\Controllers;

use App\Models\M_category;
use App\Models\M_product;

class Home extends BaseController
{
    protected $M_category;
    protected $M_product;
    public function __construct()
    {
        $this->M_category = new M_category();
        $this->M_product = new M_product();
    }

    public function index()
    {
        $data = [
            'appName' => $this->appName,
            'title' => 'Home',
            'hero' => 1,
            'category' => $this->M_category->get_category(),
            'product' => $this->M_product->get_product()
        ];
        return view('index', $data);
    }
}
