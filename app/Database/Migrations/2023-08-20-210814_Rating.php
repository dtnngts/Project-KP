<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rating extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rating'          => [
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
            'rating'                 => [
                'type'               => 'DOUBLE',
            ],
            'review'                 => [
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
        $this->forge->addKey('id_rating', true);
        $this->forge->createTable('rating');
    }

    public function down()
    {
        $this->forge->dropTable('rating');
    }
}
