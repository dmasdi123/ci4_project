<?php

namespace App\Models;

use CodeIgniter\Model;

class masterbarang extends Model
{
    protected $table = 'master_barang';
    protected $primaryKey = 'id_barang';

    public function getallItems()
    {
        return $this->findAll();
    }

    public function showBarangbyID($id)
    {
        return $this->select('*')->where('id_barang', $id)->findAll();
    }
}
