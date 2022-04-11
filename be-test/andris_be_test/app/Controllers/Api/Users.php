<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Users extends BaseController
{
    use ResponseTrait;

    public function __construct()
    {
        $this->userModel = new \App\Models\Users();
    }

    public function index()
    {
        // Get All Users join UserRoles
        $users = $this->userModel
            ->select('users.id, users.first_name, users.last_name, users.address, users.gender, user_roles.id as userRoleId, user_roles.name as userRoleName')
            ->join('user_roles', 'user_roles.id = users.user_role_id')
            ->findAll();

        //remapping data
        $usersRemapp = [];
        foreach ($users as $v) {
            $userRemapp = [
                'id' => $v['id'],
                'first_name' => $v['first_name'],
                'last_name' => $v['last_name'],
                'address' => $v['address'],
                'gender' => $v['gender'],
                'user_role' => [
                    'id' => $v['userRoleId'],
                    'name' => $v['userRoleName']
                ]
            ];

            array_push($usersRemapp, $userRemapp);
        }
        $json = [
            'message' => 'data successfully retrived',
            'data' => $usersRemapp
        ];

        return $this->respond($json, 200);
    }

    public function store()
    {
        // Get Data From Request
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'birth_place' => $this->request->getPost('birth_place'),
            'address' => $this->request->getPost('address'),
            'gender' => $this->request->getPost('gender'),
            'user_role_id' => $this->request->getPost('user_role_id')
        ];

        // Insert data
        if (!$this->userModel->insert($data)) {
            $json = [
                'message' => 'data failed to store',
                'error' => $this->userModel->errors()
            ];
            return $this->respond($json, 400);
        }

        $json = [
            'message' => 'data successfully created',
            'data' => [
                'id' => $this->userModel->insertID,
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'birth_place' => $data['birth_place'],
                'address' => $data['address'],
                'gender' => $data['gender'],
                'user_role_id' => $data['user_role_id']
            ]
        ];
        return $this->respond($json, 201);
    }

    public function show($id)
    {
        // Get Detail by ID
        $user = $this->userModel
            ->select('users.*, user_roles.id as userRoleId, user_roles.name as userRoleName')
            ->join('user_roles', 'user_roles.id = users.user_role_id')
            ->find($id);
        
            $json = [
                'message' => 'data successfully retrived',
                'data' => [
                    'id' => $user['id'],
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                    'birth_place' => $user['birth_place'],
                    'address' => $user['address'],
                    'gender'=> $user['gender'],
                    'user_role' => [
                        'id' => $user['userRoleId'],
                        'name' => $user['userRoleName']
                    ],
                    'created_at' => $user['created_at'],
                    'updated_at' => $user['updated_at']
                ]
            ];
            return $this->respond($json, 200);
    }

    public function update($id)
    {
        // Get Data From Request
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'birth_place' => $this->request->getPost('birth_place'),
            'address' => $this->request->getPost('address'),
            'gender' => $this->request->getPost('gender'),
            'user_role_id' => $this->request->getPost('user_role_id')
        ];

        // Update data
        if (!$this->userModel->update($id, $data)) {

           $json =  [
               'message' => 'data failed to update',
               'error' => $this->userModel->errors()
           ];
           return $this->respond($json, 400);
        }

        $json = [
            'message' => 'data successfully updated',
            'data' => [
                'id' => $id,
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'birth_place' => $data['birth_place'],
                'address' => $data['address'],
                'gender' => $data['gender'],
                'user_role_id' => $data['user_role_id']
            ]
        ];
        return $this->respond($json, 200);
    }

    public function softDelete($id)
    {
        // Soft Delete
        $this->userModel->delete($id);

        $json = [
            'message' => 'data successfully deleted', 
            'data' => [
                'id' => $id
            ]
        ];
        return $this->respond($json, 200);

    }
}