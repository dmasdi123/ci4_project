<?php

namespace App\Models;

use CodeIgniter\Model;

class userAdmin extends Model
{

    protected $table = 'user';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'username', 'password', 'alamat', 'notelp', 'nama_user', 'role'];

    public function getDashboardAdmin()
    {
        return $this->findAll();
    }
}
