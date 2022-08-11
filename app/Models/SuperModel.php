<?php

namespace App\Models;

use CodeIgniter\Model;

class SuperModel extends Model
{
    public function get_data($username, $password)
    {
        return $this->db->table('superadmin')->where(array('username' => $username, 'password' => $password))->get()->getRowArray();
    }
    protected $table                = 'superadmin';
    protected $primaryKey           = 'id';
    protected $allowedFields        = ['id', 'username', 'password', 'nama', 'role'];
}
