<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunAppModel extends Model
{
    protected $table         = 'akun_app';
    protected $primaryKey    = 'id_akun';
    protected $allowedFields = ['email', 'password', 'role', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function login($email, $password)
    {
        return $this->db->table('akun_app')->where(array(
            'email' => $email,
            'password' => md5($password)
        ))->get()->getRowArray();
    }
}
