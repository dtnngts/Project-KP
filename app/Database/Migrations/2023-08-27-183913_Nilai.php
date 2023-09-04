<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Nilai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_nilai'               => [
                'type'               => 'INT',
                'constraint'         => 11,
                'auto_increment'     => true,
            ],
            'no_registrasi'          => [
                'type'               => 'INT',
                'constraint'         => 11,
            ],
            'id_instruktur'          => [
                'type'               => 'INT',
                'constraint'         => 11,
            ],
            'nilai'                  => [
                'type'               => "TEXT",
            ],
        ]);
        $this->forge->addKey('id_nilai', true);
        $this->forge->createTable('nilai');
    }

    public function down()
    {
        $this->forge->dropTable('nilai');
    }
}
