<?php

namespace App\Models;

use CodeIgniter\Model;

class SuperModel extends Model
{
    protected $table                = 'superadmin';
    protected $primaryKey           = 'id';
    protected $allowedFields        = ['id', 'username', 'password', 'nama', 'role'];

    public function get_data($username, $password)
    {
        return $this->db->table('superadmin')->where(array('username' => $username, 'password' => $password))->get()->getRowArray();
    }

    public function getData($id)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
