<?php

namespace App\Controllers;

class transaksi extends BaseController
{
    protected $notainv;
    protected $transaksi;
    protected $userAdmin;
    protected $masterbarang;

    public function __construct()
    {
        $this->notainv = new \App\Models\notainv();
        $this->transaksi = new \App\Models\transaksi();
        $this->userAdmin = new \App\Models\userAdmin();
        $this->masterbarang = new \App\Models\masterbarang();
    }

    public function pembelian()
    {
        $data = [
            'title' => 'Pembelian - Bengkel Jaya Motor',
        ];
        return view('pembelian.php', $data);
    }

    public function service()
    {
        $data = [
            'title' => 'Service - Bengkel Jaya Motor',
            'autoinvpj' => $this->notainv->getINV(),
            'showbarang' => $this->masterbarang->getallItems()

        ];
        return view('service.php', $data);
    }

    //menambahkan data dari modal ke inputan penjualan
    public function add()
    {
        $id = $this->request->getVar('id'); //data from ajax
        $result = $this->masterbarang->showBarangbyID($id);
        return json_encode($result);
    }
}
