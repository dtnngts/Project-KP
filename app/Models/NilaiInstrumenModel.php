<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiInstrumenModel extends Model
{
    protected $table         = 'nilai_instrumen';
    protected $primaryKey    = 'id_nilaiInstrumen';
    protected $allowedFields = ['no_registrasi', 'id_instruktur', 'nilai_instrumen'];
}
