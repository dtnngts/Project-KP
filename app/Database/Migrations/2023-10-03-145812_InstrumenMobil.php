<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InstrumenMobil extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_instrumen'           => [
                'type'               => 'INT',
                'constraint'         => 11,
                'auto_increment'     => true,
            ],
            'instrumen_mobil'        => [
                'type'               => "VARCHAR",
                'constraint'         => 255,
            ],
        ]);
        $this->forge->addKey('id_instrumen', true);
        $this->forge->createTable('instrumen_mobil');
    }

    public function down()
    {
        $this->forge->dropTable('instrumen_mobil');
    }
}
