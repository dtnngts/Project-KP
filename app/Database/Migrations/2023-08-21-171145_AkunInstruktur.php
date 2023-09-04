<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AkunInstruktur extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_akunInstruktur'          => [
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
        $this->forge->addKey('id_akunInstruktur', true);
        $this->forge->createTable('akun_instruktur');
    }

    public function down()
    {
        $this->forge->dropTable('akun_instruktur');
    }
}
