<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        //create users table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'birth_place' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => "'male', 'female'"
            ],
            'user_role_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addkey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //drop table
        $this->forge->dropTable('users');
    }
}
