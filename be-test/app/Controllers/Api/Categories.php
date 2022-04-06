<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Categories extends BaseController
{
    use ResponseTrait;

    // struct load models
    public function __construct()
    {
        $this->categoryModel = new \App\Models\Categories();
    }

    // get all categories
    public function index()
    {
        // get all categories
        $categories = $this->categoryModel
            ->select('id, name')
            ->findAll();

        $json = [
            'message' => 'data successfully retrieved',
            'data' => $categories
        ];

        return $this->respond($json, 200);
    }

    // get detail category
    public function show($id)
    {
        // get detail category
        $category = $this->categoryModel
            ->select('id, name, created_at, updated_at')
            ->find($id);


        $json = [
            'message' => 'data successfully retrieved',
            'data' => $category
        ];

        return $this->respond($json, 200);
    }

    // store category
    public function store()
    {
        // get data from request
        $data = [
            'name' => $this->request->getPost('name'),
        ];

        // insert data
        if (!$this->categoryModel->insert($data)) {
            $json = [
                'message' => 'data failed to store',
                'error' => $this->categoryModel->errors()
            ];

            return $this->respond($json, 400);
        }

        $json = [
            'message' => 'data successfully created',
            'data' => [
                'id' => $this->categoryModel->insertID,
                'name' => $data['name'],
            ]
        ];

        return $this->respond($json, 201);
    }

    // update category
    public function update($id)
    {
        // get data from request
        $data = [
            'name' => $this->request->getPost('name'),
        ];

        // update data
        if (!$this->categoryModel->update($id, $data)) {
            $json = [
                'message' => 'data failed to update',
                'error' => $this->categoryModel->errors()
            ];

            return $this->respond($json, 400);
        }

        $json = [
            'message' => 'data successfully updated',
            'data' => [
                'id' => $id,
                'name' => $data['name'],
            ]
        ];

        return $this->respond($json, 200);
    }

    // soft delete category
    public function softDelete($id)
    {
        // soft delete category
        $this->categoryModel->delete($id);

        $json = [
            'message' => 'data successfully deleted',
            'data' => [
                'id' => $id,
            ]
        ];

        return $this->respond($json, 200);
    }
}
