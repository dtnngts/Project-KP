<?php

namespace App\Models;

use CodeIgniter\Model;

class InstrumenMobilModel extends Model
{
    protected $table         = 'instrumen_mobil';
    protected $primaryKey    = 'id_instrumen';
    protected $allowedFields = ['instrumen_mobil'];
}
