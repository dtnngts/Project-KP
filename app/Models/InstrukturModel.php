<?php

namespace App\Models;

use CodeIgniter\Model;

class InstrukturModel extends Model
{
    protected $table         = 'instruktur';
    protected $primaryKey    = 'id_instruktur';
    protected $allowedFields = ['nama', 'usia'];
}
