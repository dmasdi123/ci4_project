<?php

namespace App\Models;

use CodeIgniter\Model;

class userMekanik extends Model
{

    protected $table = 'mekanik';
    protected $primaryKey = 'id_mekanik';
    protected $allowedFields = ['id_mekanik', 'nama_mekan', 'alamat', 'notelp'];

    public function getDashboardMekanik($idmekan = null)
    {
        if ($idmekan == false) {
            return $this->findAll();
        }
        return $this->where(['id_mekanik' => $idmekan])->first();
    }

    public function getIdmekan()
    {
        $id = $this->selectMax('id_mekanik')->findAll();
        foreach ($id as $key) {
            $id_mekan = $key['id_mekanik'] + 1;
        }
        return $id_mekan;
    }
}
