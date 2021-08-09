<?php

namespace App\Models;

use CodeIgniter\Model;

class userSupplier extends Model
{
    protected $table = 'supplier';
    protected $primaryKey = 'id_supp';
    protected $allowedFields = ['id_supp', 'nama_supp', 'alamat', 'notelp'];

    public function getDashboardSupplier()
    {
        return $this->findAll();
    }
}
