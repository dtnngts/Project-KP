<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_materi'          => [
                'type'               => 'INT',
                'constraint'         => 11,
                'auto_increment'     => true,
            ],
            'nama_materi'            => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'id_kategori'            => [
                'type'               => 'INT',
                'constraint'         => 11,
            ],
        ]);
        $this->forge->addKey('id_materi', true);
        $this->forge->createTable('materi');
    }

    public function down()
    {
        $this->forge->dropTable('materi');
    }
}
