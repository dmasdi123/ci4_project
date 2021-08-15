<?php

namespace App\Models;

use CodeIgniter\Model;

class userCustomer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_cus';
    protected $allowedFields = ['id_cus', 'no_pol', 'nama_cus', 'telp', 'alamat_cus', 'merk', 'tipe'];

    public function getDashboardCustomer()
    {
        return $this->findAll();
    }
}
