<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    protected $table            = 'books';
    protected $primaryKey       = 'id';
    protected $useSoftDeletes   = true;
    protected $allowedFields    = ['judul', 'pengarang', 'tanggal_terbit', 'penerbit'];

    // Dates
    protected $useTimestamps = true;
    protected $deletedField = 'deleted_at';
}
