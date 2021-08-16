<?php

namespace App\Controllers;

class transaksi extends BaseController
{
    protected $notainv;
    protected $transaksi;
    protected $userAdmin;
    protected $masterbarang;
    protected $mekanik;

    public function __construct()
    {
        $this->notainv = new \App\Models\notainv();
        $this->transaksi = new \App\Models\transaksi();
        $this->userAdmin = new \App\Models\userAdmin();
        $this->masterbarang = new \App\Models\masterbarang();
        $this->mekanik = new \App\Models\userMekanik();
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
            'showbarang' => $this->masterbarang->getallItems(),
            'showmekan' => $this->mekanik->getallMekanik()

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

    // insert data penjualan
    public function insertPJ()
    {
        // dd($this->request->getVar());
        $qty = $this->request->getVar('qtypj');
        $harga = $this->request->getVar('harga_jualpj');
        $grandtotal = $qty * $harga;
        $this->transaksi->insert([
            'id_barang' => $this->request->getVar('id_brgpj'),
            'id_user' => $this->request->getVar('id_kasir'),
            'id_cus' => $this->request->getVar('idcustpj'),
            // 'id_nota' => $this->request->getVar('id_notapj'),
            'invoice' => $this->request->getVar('invoicePJ'),
            'qty_trx' => $this->request->getVar('qtypj'),
            'harga_trx' => $this->request->getVar('harga_jualpj'),
            'harga_totaltrx' => $grandtotal
        ]);
    }


    // insert data service
    public function insertSRV()
    {
        // dd($this->request->getVar());
        $qty = $this->request->getVar('qty_srv');
        $harga = $this->request->getVar('harga_jualsrv');
        $grandtotal = $qty * $harga;
        $this->transaksi->insert([
            'id_barang' => $this->request->getVar('id_brgsrv'),
            'id_mekanik' => $this->request->getVar('mekanik'),
            'id_user' => $this->request->getVar('id_kasirsrv'),
            'id_cus' => $this->request->getVar('idpelanggan'),
            // 'id_nota' => $this->request->getVar('id_notaservice'),
            'invoice' => $this->request->getVar('invoicesrv'),
            'keluhan' => $this->request->getVar('keluhan'),
            'qty_trx' => $this->request->getVar('qty_srv'),
            'harga_trx' => $this->request->getVar('harga_jualsrv'),
            'harga_totaltrx' => $grandtotal,
            'km_datang' => $this->request->getVar('kmdtg'),
        ]);
    }

    public function showlistPJ()
    {
        $inv = $this->request->getVar('inv'); //data from ajax
        $result = $this->transaksi->getTrxByINV($inv);
        return json_encode($result);
    }

    public function getSumPricePJ()
    {
        $id = $this->request->getVar('inv'); //menerima data dari ajax
        $result = $this->transaksi->showPricePJ($id); //input value dari ajax ke model
        return json_encode($result);
    }

    public function delete() //delete list pj
    {
        $id = $this->request->getVar('id'); //data from ajax
        $result = $this->transaksi->deletelist($id);
        return json_encode($result);
    }
}
