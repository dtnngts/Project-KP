<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Instruktur extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_instruktur'          => [
                'type'               => 'INT',
                'constraint'         => 11,
                'auto_increment'     => true,
            ],
            'nama'                   => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'id_akun'                => [
                'type'               => 'INT',
                'constraint'         => 11,
            ],
            'telpon'                 => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'usia'                   => [
                'type'               => 'INT',
                'null'               => true
            ],
            'foto_profil'            => [
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
        $this->forge->addKey('id_instruktur', true);
        $this->forge->createTable('instruktur');
    }

    public function down()
    {
        $this->forge->dropTable('instruktur');
    }
}
