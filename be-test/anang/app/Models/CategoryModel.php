<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'books_categories';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nama'];
    protected $useSoftDeletes   = true;

    // Dates
    protected $useTimestamps = true;
    protected $deletedField = 'deleted_at';
}
