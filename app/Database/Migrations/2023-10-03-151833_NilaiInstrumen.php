<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NilaiInstrumen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_nilaiInstrumen'      => [
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
            'nilai_instrumen'        => [
                'type'               => "TEXT",
            ],
        ]);
        $this->forge->addKey('id_nilaiInstrumen', true);
        $this->forge->createTable('nilai_instrumen');
    }

    public function down()
    {
        $this->forge->dropTable('nilai_instrumen');
    }
}
