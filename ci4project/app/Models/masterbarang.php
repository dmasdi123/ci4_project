<?php

namespace App\Models;

use CodeIgniter\Model;

class masterbarang extends Model
{
    protected $table = 'master_barang';
    protected $primaryKey = 'id_barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_barang', 'id_user', 'id_supp', 'nama_barang', 'qty', 'harga_beli', 'harga_jual'];

    public function getallItems($idbarang = false)
    {
        if ($idbarang == false) {
            return $this->findAll();
        }
        return $this->where(['id_barang' => $idbarang])->first();
    }


    public function tampildatamb()
    {
        return $this->select('*')->join('supplier', 'supplier.id_supp = master_barang.id_supp ')->findAll();
    }


    public function showBarangbyID($id)
    {
        return $this->select('*')->where('id_barang', $id)->findAll();
    }
}
