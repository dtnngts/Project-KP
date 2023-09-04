<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunSiswaModel extends Model
{
    protected $table         = 'akun_siswa';
    protected $primaryKey    = 'id_akunSiswa';
    protected $allowedFields = ['email', 'password', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function login($email, $password)
    {
        return $this->db->table('akun_siswa')->where(array(
            'email' => $email,
            'password' => md5($password)
        ))->get()->getRowArray();
    }
}
