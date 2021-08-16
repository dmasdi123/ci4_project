<?php

namespace App\Models;

use CodeIgniter\Model;

class userAdmin extends Model
{

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    // protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'username', 'password', 'nama_user', 'alamat', 'notelp', 'role'];

    public function getDashboardAdmin($iduser = false)
    {
        if ($iduser == false) {
            return $this->findAll();
        }
        return $this->where(['id_user' => $iduser])->first();
    }

    public function showAdmbyId($id)
    {
        return $this->select('*')->join('transaksi', 'transaksi.id_user = user.id_user')->where('invoice', $id)->findAll();
    }

    // public function deleteadm($iduser)
    // {
    //     return $this->delete('id_user', $iduser);
    // }
}
