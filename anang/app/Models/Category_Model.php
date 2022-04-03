<?php

namespace App\Models;

use CodeIgniter\Model;

class Category_Model extends Model
{
    protected $table      = 'category';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;
    // protected $allowedFields = ['makanan', 'price'];
}
