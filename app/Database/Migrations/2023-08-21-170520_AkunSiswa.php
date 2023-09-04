<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AkunSiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_akunSiswa'          => [
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
            'created_at'             => [
                'type'               => 'DATETIME',
                'null'               => true
            ],
            'updated_at'             => [
                'type'               => 'DATETIME',
                'null'               => true
            ],
        ]);
        $this->forge->addKey('id_akunSiswa', true);
        $this->forge->createTable('akun_siswa');
    }

    public function down()
    {
        $this->forge->dropTable('akun_siswa');
    }
}
