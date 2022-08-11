<?php

namespace App\Models;

use CodeIgniter\Model;

class ValidatorModel extends Model
{
    public function get_data($username, $password)
    {
        return $this->db->table('validatoradmin')->where(array('username' => $username, 'password' => $password))->get()->getRowArray();
    }
    protected $table                = 'validatoradmin';
    protected $primaryKey           = 'id';
    protected $allowedFields        = ['id', 'username', 'password', 'nama', 'role'];
}
