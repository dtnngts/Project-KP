<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_registrasi'          => [
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
            'ttl'                    => [
                'type'               => 'DATE',
                'null'               => true
            ],
            'telpon'                 => [
                'type'               => 'VARCHAR',
                'constraint'         => '13',
            ],
            'pekerjaan'              => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'alamat'                 => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'foto_profil'            => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'jenis_kendaraan'        => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'kode_kendaraan'         => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'id_instruktur'          => [
                'type'               => 'INT',
                'constraint'         => 11,
            ],
            'paket'                  => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'jadwal'                 => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'status'                 => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'jenis_pembayaran'       => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'jumlah_pembayaran'      => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'sisa_pembayaran'        => [
                'type'               => 'VARCHAR',
                'constraint'         => '255',
            ],
            'kehadiran'              => [
                'type'               => 'INT',
                'constraint'         => '11',
            ],
            'qr'                     => [
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
        $this->forge->addKey('no_registrasi', true);
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
