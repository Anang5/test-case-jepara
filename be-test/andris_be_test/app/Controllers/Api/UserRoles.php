<?php
namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class UserRoles extends BaseController
{
    use ResponseTrait;

    public function __construct()
    {
        $this->userRoleModel = new \App\Models\UserRoles();
    }

    public function index()
    {
        // Get All
        $userRoles = $this->userRoleModel
            ->select('id, name')
            ->findAll();

        $json = [
            'message' => 'data successfully retrieved',
            'data' => $userRoles
        ];

        return $this->respond($json, 200);
    }

    public function show($id)
    {
        // Get Detail
        $userRole = $this->userRoleModel
            ->select('id, name, created_at, updated_at')
            ->find($id);

        $json = [
            'message' => 'data successfully retrieved',
            'data' => $userRole
        ];

        return $this->respond($json, 200);
    }

    public function store()
    {
        //get data from request

        $data = [
            'name' => $this->request->getPost('name'),
        ];

        // Insert Data
        if (!$this->userRoleModel->insert($data)) {
            $json = [
                'message' => 'data failed to store',
                'error' => $this->userRoleModel->errors()
            ];
            return $this->respond($json, 400);
        }

        $json = [
            'message' => 'data successfully created',
            'data' => [
                'id' => $this->userRoleModel->insertID,
                'name' => $data['name']
            ],

        ];

        return $this->respond($json, 201);
    }

    public function update($id)
    {
        // Update
        $data = [
            'name' => $this->request->getPost('name')
        ];

        if (!$this->userRoleModel->update($id, $data)) {
            $json = [
                'message' => 'data failed to update',
                'error' => $this->userRoleModel->errors()
            ];
            return $this->respond($json, 400);
        }

        $json = [
            'message' => 'data successfully updated',
            'data' => [
                'id' => $id,
                'name' => $data['name']
            ],
        ];
        return $this->respond($json, 200);
    }

    public function softDelete($id)
    {
        //Soft Delete
        $this->userRoleModel->delete($id);

        $json = [
            'message' => 'data successfully delete',
            'data' => [
                'id' => $id
            ]
        ];

        return $this->respond($json, 200);
    }
}