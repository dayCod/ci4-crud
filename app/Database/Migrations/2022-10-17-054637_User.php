<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],

            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],

            'role' => [
                'type' => 'INT',
                'constraint' => '11'
            ],

            'created_at' => [
                'type' => 'DATETIME',
            ],

            'updated_at' => [
                'type' => 'DATETIME',
            ]
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
