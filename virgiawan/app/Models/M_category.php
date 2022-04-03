<?php

namespace App\Models;

use CodeIgniter\Model;

class M_category extends Model
{
    protected $table = 'category';
    protected $returnType = 'object';

    protected $allowedFields = ['name'];

    public function get_category($id)
    {
        return $this->where(['id' => $id]);
    }
}
