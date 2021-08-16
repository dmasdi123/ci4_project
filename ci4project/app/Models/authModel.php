<?php

namespace App\Models;

use CodeIgniter\Model;

class authModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['id_user', 'username', 'password', 'nama_user', 'alamat', 'notelp', 'role'];
}
