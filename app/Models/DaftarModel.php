<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table         = 'daftar';
    protected $primaryKey    = 'no_registrasi';
    protected $allowedFields = ['nama', 'ttl', 'pekerjaan', 'alamat', 'telpon', 'jenis_kendaraan', 'instruktur', 'paket', 'jam_belajar', 'status', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}
