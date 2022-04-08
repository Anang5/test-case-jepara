<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Commands\Utilities\Publish;

class Category extends BaseController
{
    protected $Bookscategory;
    use ResponseTrait;
    public function __construct()
    {
        $this->Bookscategory = new CategoryModel();
    }

    public function index()
    {
        $data = $this->Bookscategory->findAll();
        return $this->respond($data);
    }

    public function detail($id)
    {
        $detail = $this->Bookscategory->where(['id' => $id])->first();
        return $this->respond($detail);
    }

    public function createCategory()
    {
        $this->Bookscategory->save([
            'nama' => $this->request->getVar('nama'),
        ]);

        $response = [
            'messages' => [
                'success' => 'Data Category berhasil Di Tambahkan.'
            ]
        ];

        return $this->respond($response);
    }

    public function deleteCategory($id)
    {
        $this->Bookscategory->delete($id);
        $response = [
            'message' => [
                'success' => 'Data Category Berhasil di Hapus'
            ],
        ];

        return $this->respond($response);
    }
}
