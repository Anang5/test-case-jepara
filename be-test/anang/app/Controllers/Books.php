<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BooksModel;
use CodeIgniter\API\ResponseTrait;

class Books extends BaseController
{
    protected $Booksmodel;
    use ResponseTrait;
    public function __construct()
    {
        $this->Booksmodel = new BooksModel();
    }
    public function index()
    {
        $data = $this->Booksmodel->findAll();
        return $this->respond($data);
    }

    public function detail($id)
    {
        $detail = $this->Booksmodel->where(['id' => $id])->first();
        return $this->respond($detail);
    }

    public function create()
    {
        $this->Booksmodel->save([
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'tanggal_terbit' => $this->request->getVar('tanggal_terbit'),
            'penerbit' => $this->request->getVar('penerbit')
        ]);

        $response = [
            'messages' => [
                'success' => 'Data Buku berhasil Di Tambahkan.'
            ]
        ];

        return $this->respond($response);
    }

    public function update($id)
    {
        // $id = $this->request->getVar('id');
        $this->Booksmodel->update([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'tanggal_terbit' => $this->request->getVar('tanggal_terbit'),
            'penerbit' => $this->request->getVar('penerbit')
        ]);
        $response = [
            'messages' => [
                'success' => 'Data Buku berhasil Di Ubah.'
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id)
    {
        $this->Booksmodel->delete($id);
        $response = [
            'message' => [
                'success' => 'Data Buku Berhasil di Hapus'
            ],
        ];

        return $this->respond($response);
    }
}
