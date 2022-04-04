<?php

namespace App\Controllers;

use App\Models\Produk_Model;

class Produk extends BaseController
{
    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new Produk_Model();
    }
    public function index()
    {
        // $produk = $this->produkModel->select('produk.*, category.name as categoryName, category.id as categoryId')->join();
        $data = [
            'produk' => $this->produkModel->findAll(),
        ];

        return view('produk/home', $data);
    }

    public function create()
    {
        return view('produk/create');
    }

    public function save()
    {
        $this->produkModel->save([
            'makanan' => $this->request->getVar('makanan'),
            'price' => $this->request->getVar('price')
        ]);

        session()->setFlashdata('pesan', 'data succesfully created');

        return redirect()->to('/');
    }

    public function hapus($id)
    {
        $this->produkModel->delete($id);
        session()->setFlashdata('pesan', 'data Berhasil Dihapus');
        return redirect()->to('/');
    }

    public function edit($id)
    {
        $data = [
            'produk' => $this->produkModel->ge
        ];
        return view('produk/edit');
    }
}
