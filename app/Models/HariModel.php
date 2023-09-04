<?php

namespace App\Models;

use CodeIgniter\Model;

class HariModel extends Model
{
    protected $table                = 'hari_kursus';
    protected $primaryKey           = 'id_hari';
    protected $allowedFields        = ['hari'];
}
