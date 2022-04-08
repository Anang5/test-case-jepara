<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class BooksSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'Laskar Pelangi',
                'pengarang'    => 'andrea hirata',
                'tanggal_terbit' => '10-06-2008',
                'penerbit' => 'Gramedia',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'judul' => 'Bulan',
                'pengarang'    => 'Tere Liye',
                'tanggal_terbit' => '11-09-2011',
                'penerbit' => 'Shonen Jump',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'judul' => 'Pulang',
                'pengarang'    => 'Tere Liye',
                'tanggal_terbit' => '26-04-2015',
                'penerbit' => 'Angkasa',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'judul' => 'Bintang',
                'pengarang'    => 'Tere Liye',
                'tanggal_terbit' => '26-04-2019',
                'penerbit' => 'Gramedia Pustaka Utama',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'judul' => 'Surat Kecil Untuk Tuhan',
                'pengarang'    => 'Agnes Davonar',
                'tanggal_terbit' => '23-04-2009',
                'penerbit' => 'Gramedia Pustaka Utama',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('books')->insertBatch($data);
    }
}
