<?php

namespace App\Models;

use CodeIgniter\Model;

class userAdmin extends Model
{

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    // protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'username', 'password', 'nama_user', 'alamat', 'notelp', 'role'];

    public function getDashboardAdmin()
    {
        return $this->findAll();
    }

    // public function deleteadm($iduser)
    // {
    //     return $this->delete('id_user', $iduser);
    // }
}
