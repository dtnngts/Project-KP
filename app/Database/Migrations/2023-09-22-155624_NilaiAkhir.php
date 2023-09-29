<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NilaiAkhir extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id_nilaiAkhir'          => [
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
            'penilaian'              => [
                'type'               => "TEXT",
            ],
            'emotional'              => [
                'type'               => "TEXT",
            ],
            'kenyamanan'             => [
                'type'               => "TEXT",
            ],
            'penguasaan'             => [
                'type'               => "TEXT",
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
        $this->forge->addKey('id_nilaiAkhir', true);
        $this->forge->createTable('nilai_akhir');
    }

    public function down()
    {
        $this->forge->dropTable('nilai_akhir');
    }
}
