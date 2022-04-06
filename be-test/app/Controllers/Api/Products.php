<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Products extends BaseController
{
    use ResponseTrait;

    // struct load models
    public function __construct()
    {
        $this->productModel = new \App\Models\Products();
    }

    // get all categories
    public function index()
    {
        // get all categories join categories
        $products = $this->productModel
            ->select('products.id, products.name, products.description, products.price, categories.name as categoriesName, categories.id as categoriesId')
            ->join('categories', 'categories.id = products.category_id')
            ->findAll();

        // remapping data
        $productsRemmap = [];
        foreach ($products as $value) {
            $productRemmap = [
                'id' => $value['id'],
                'name' => $value['name'],
                'description' => $value['description'],
                'price' => $value['price'],
                'categories' => [
                    'id' => $value['categoriesId'],
                    'name' => $value['categoriesName'],
                ],
            ];
            array_push($productsRemmap, $productRemmap);
        }

        $json = [
            'message' => 'data successfully retrieved',
            'data' => $productsRemmap
        ];

        return $this->respond($json, 200);
    }

    // get detail categories
    public function show($id)
    {
        // get detail product
        $product = $this->productModel
            ->select('products.*, categories.name as categoriesName, categories.id as categoriesId')
            ->join('categories', 'categories.id = products.category_id')
            ->find($id);


        $json = [
            'message' => 'data successfully retrieved',
            'data' => [
                'id' => $product['id'],
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'categories' => [
                    'id' => $product['categoriesId'],
                    'name' => $product['categoriesName'],
                ],
                'createdAt' => $product['created_at'],
                'updatedAt' => $product['updated_at'],
            ],
        ];

        return $this->respond($json, 200);
    }

    // store categories
    public function store()
    {
        // get data from request
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'category_id' => $this->request->getPost('category_id'),
        ];

        // insert data
        if (!$this->productModel->insert($data)) {
            $json = [
                'message' => 'data failed to store',
                'error' => $this->productModel->errors()
            ];

            return $this->respond($json, 400);
        }

        $json = [
            'message' => 'data successfully created',
            'data' => [
                'id' => $this->productModel->insertID,
                'name' => $data['name'],
                'description' => $data['description'],
                'price' => $data['price'],
                'category_id' => $data['category_id'],
            ]
        ];

        return $this->respond($json, 201);
    }

    // update categories
    public function update($id)
    {
        // get data from request
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'category_id' => $this->request->getPost('category_id'),
        ];

        // update data
        if (!$this->productModel->update($id, $data)) {
            $json = [
                'message' => 'data failed to update',
                'error' => $this->productModel->errors()
            ];

            return $this->respond($json, 400);
        }

        $json = [
            'message' => 'data successfully updated',
            'data' => [
                'id' => $id,
                'name' => $data['name'],
                'description' => $data['description'],
                'price' => $data['price'],
                'category_id' => $data['category_id'],
            ]
        ];

        return $this->respond($json, 200);
    }

    // soft delete categories
    public function softDelete($id)
    {
        // soft delete categories
        $this->productModel->delete($id);

        $json = [
            'message' => 'data successfully deleted',
            'data' => [
                'id' => $id,
            ]
        ];

        return $this->respond($json, 200);
    }
}
