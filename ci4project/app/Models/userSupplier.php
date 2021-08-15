<?php

namespace App\Models;

use CodeIgniter\Model;

class userSupplier extends Model
{
    protected $table = 'supplier';
    protected $primaryKey = 'id_supp';
    protected $allowedFields = ['id_supp', 'nama_supp', 'alamat', 'notelp'];

    public function getDashboardSupplier($idsupp = null)
    {
        if ($idsupp == false) {
            return $this->findAll();
        }
        return $this->where(['id_supp' => $idsupp])->first();
    }

    public function getIdSupp()
    {
        $id = $this->selectMax('id_supp')->findAll();
        foreach ($id as $key) {
            $id_supp = $key['id_supp'] + 1;
        }
        return $id_supp;
    }
}
