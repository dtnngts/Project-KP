<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AkunApp extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_akun'          => [
                'type'               => 'INT',
                'constraint'         => 11,
                'auto_increment'     => true,
            ],
            'email'                  => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'password'               => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'role'                   => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'created_at'             => [
                'type'               => 'DATETIME',
                'null'               => true
            ],
            'updated_at'             => [
                'type'               => 'DATETIME',
                'null'               => true
            ],
        ]);
        $this->forge->addKey('id_akun', true);
        $this->forge->createTable('akun_app');
    }

    public function down()
    {
        $this->forge->dropTable('akun_app');
    }
}
