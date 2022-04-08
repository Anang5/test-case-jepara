<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class BooksCategoriesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'novel',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama' => 'Jurnal Ilmiah',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama' => 'Pendidikan',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ]
        ];

        // Using Query Builder
        $this->db->table('books_categories')->insertBatch($data);
    }
}
