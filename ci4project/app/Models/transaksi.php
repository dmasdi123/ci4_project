<?php

namespace App\Models;

use CodeIgniter\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_trx';
    protected $allowedFields = [
        'id_barang', 'id_mekanik', 'id_user', 'id_cus', 'id_nota',
        'invoice', 'keluhan', 'qty_trx', 'harga_trx', 'harga_totaltrx', 'km_datang'
    ];
    protected $useTimestamps = true;

    public function getTrxByINV($inv)
    {
        // return $this->select('*')->where('invoice', $inv)->findAll();
        return $this->select('*')->join('master_barang', 'master_barang.id_barang = transaksi.id_barang')->where('invoice', $inv)->findAll();
    }

    public function getAlltrxService()
    {
        // return $this->select('transaksi.id_trx,transaksi.invoice,mekanik.nama_mekan,customer.nama_cus')->join('customer', 'customer.id_cus = transaksi.id_cus')->join('mekanik', 'mekanik.id_mekanik = transaksi.id_mekanik')->like('invoice', 'SRV')->findAll();
        return $this->select('transaksi.invoice, customer.nama_cus')->join('customer', 'customer.id_cus = transaksi.id_cus')->like('invoice', 'SRV')->findAll();
    }

    public function getAlltrxPJ()
    {
        return $this->select('transaksi.invoice, customer.nama_cus')->join('customer', 'customer.id_cus = transaksi.id_cus')->like('invoice', 'INV')->findAll();
        // return $this->select('transaksi.id_trx,transaksi.invoice,customer.nama_cus')->join('customer', 'customer.id_cus = transaksi.id_cus')->like('invoice', 'INV')->findAll();
    }

    public function deletelist($id)
    {
        return $this->delete(['id_trx', $id]);
    }

    public function deletelist2($id)
    {
        return $this->where('invoice', $id)->delete();
    }

    public function showPricePJ($id)
    {
        return $this->selectSum('harga_totaltrx')->where('invoice', $id)->findAll();
    }
}
