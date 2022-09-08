<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    public function get_data($username, $password)
    {
        return $this->db->table('admin')->where(array('username' => $username, 'password' => $password))->get()->getRowArray();
    }
    protected $table                = 'admin';
    protected $primaryKey           = 'id';
    protected $allowedFields        = ['id', 'username', 'password', 'nama', 'role'];
}
