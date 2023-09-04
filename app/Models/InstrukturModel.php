<?php

namespace App\Models;

use CodeIgniter\Model;

class InstrukturModel extends Model
{
    protected $table         = 'instruktur';
    protected $primaryKey    = 'id_instruktur';
    protected $allowedFields = ['nama','id_akun', 'telpon', 'usia', 'foto_profil','created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function getAkun($id_akun)
    {
        return $this->where('id_akun', $id_akun)->first();
    }
}
