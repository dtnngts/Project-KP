<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HariKursus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_hari'                => [
                'type'               => 'INT',
                'constraint'         => 11,
                'auto_increment'     => true,
            ],
            'hari'                   => [
                'type'               => 'INT',
                'constraint'         => 11,
            ],
        ]);
        $this->forge->addKey('id_hari', true);
        $this->forge->createTable('hari_kursus');
    }

    public function down()
    {
        $this->forge->dropTable('hari_kursus');
    }
}
