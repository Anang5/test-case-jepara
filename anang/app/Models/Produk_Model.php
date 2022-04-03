<?php

namespace App\Models;

use CodeIgniter\Model;

class Produk_Model extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['makanan', 'price'];

    public function getProduk($id = false)
    {
        if ($id == false) {
            $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
