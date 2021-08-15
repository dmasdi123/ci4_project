<?php

namespace App\Models;

use CodeIgniter\Model;

class authModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['id_user', 'username', 'password', 'nama_user', 'alamat', 'notelp', 'role'];
    public function getDataLogin($getusername, $getpassword)
    {
        return $this->db->table('user')->where(array('username' => $getusername, 'password' => $getpassword))->get()->getRowArray();
    }

    // public function getDataRegister()
    // {
    //     echo 'hello';
    // }
}
