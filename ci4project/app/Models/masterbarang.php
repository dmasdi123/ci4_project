<?php

namespace App\Models;

use CodeIgniter\Model;

class masterbarang extends Model
{
    protected $table = 'master_barang';
    protected $primaryKey = 'id_barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_barang', 'nama_barang', 'qty', 'harga_beli', 'harga_jual'];

    public function getallItems()
    {
        return $this->findAll();
    }

    public function showBarangbyID($id)
    {
        return $this->select('*')->where('id_barang', $id)->findAll();
    }
}
