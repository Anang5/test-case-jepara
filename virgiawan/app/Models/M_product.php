<?php

namespace App\Models;

use CodeIgniter\Model;

class M_product extends Model
{
    protected $table = 'product';
    protected $returnType = 'object';

    protected $allowedFields = ['name', 'price', 'id_category', 'thumbnail'];

    public function get_product($id = false)
    {
        if ($id) {
            return $this->select('product.*, category.name AS c_name')->join('category', 'product.id_category = category.id')->where(['product.id' => $id])->first();
        } else {
            return $this->select('product.*, category.name AS c_name')->join('category', 'product.id_category = category.id')->findAll();
        }
    }
}
