<?php

namespace App\Models;

use CodeIgniter\Model;

class userCustomer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_cus';

    public function getallcust()
    {
        return $this->findAll();
    }

    public function showCustbyId($id)
    {
        return $this->select('*')->where('nama_cus', $id)->findAll();
    }

    public function showCustbyId2($id)
    {
        // return $this->select('*')->where('id_cus', $id)->findAll();
        return $this->select('*')->join('transaksi', 'transaksi.id_cus = customer.id_cus')->where('invoice', $id)->findAll();
    }
}
