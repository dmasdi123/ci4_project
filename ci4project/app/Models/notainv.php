<?php

namespace App\Models;

use CodeIgniter\Model;

class notainv extends Model
{
    protected $table = 'nota';
    protected $primaryKey = 'id_nota';

    public function getINV()
    {
        $id = $this->selectMax('id_nota')->findAll();
        foreach ($id as $key) {
            $id_n = $key['id_nota'] + 1;
        }
        return $id_n;
    }
}
