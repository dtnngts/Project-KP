<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
    protected $table         = 'nilai';
    protected $primaryKey    = 'id_nilai';
    protected $allowedFields = ['no_registrasi', 'id_instruktur', 'nilai', 'catatan', 'id_hari'];
}
