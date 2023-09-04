<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunInstrukturModel extends Model
{
    protected $table         = 'akun_instruktur';
    protected $primaryKey    = 'id_akunInstruktur';
    protected $allowedFields = ['email', 'password', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function login($email, $password)
    {
        return $this->db->table('akun_instruktur')->where(array(
            'email' => $email,
            'password' => md5($password)
        ))->get()->getRowArray();
    }
}
