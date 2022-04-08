<?php

namespace App\Models;
use CodeIgniter\Model;

class Users extends Model 
{
    protected $DBGroup = 'default';
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $protectFields = true;
    protected $allowedFields = [
        'first_name', 'last_name', 'birth_place', 'address', 'gender', 'user_role_id'
    ];

    //dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    //validation
    protected $validateRoles = [
        'first_name' => 'required|min_length[3]|max_length[100]',
        'last_name' => 'required|min_length[3]|max_length[100]',
        'birth_place' => 'required',
        'address' => 'required',
        'gender' => 'required',
        'user_role_id' => 'required'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    //callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
