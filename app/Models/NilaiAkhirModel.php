<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiAkhirModel extends Model
{
    protected $table         = 'nilai_akhir';
    protected $primaryKey    = 'id_nilaiAkhir';
    protected $allowedFields = ['no_registrasi', 'id_instruktur', 'penilaian', 'emotional', 'kenyamanan', 'penguasaan', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}
