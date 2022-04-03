<?php

namespace App\Models;

use CodeIgniter\Model;

class M_category extends Model
{
    protected $table = 'category';
    protected $returnType = 'object';

    public function get_category($id = false)
    {
        if ($id) {
            return $this->where(['id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }
}
