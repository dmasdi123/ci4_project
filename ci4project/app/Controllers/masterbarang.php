<?php

namespace App\Controllers;

class masterbarang extends BaseController
{

    protected $masterbarang;

    public function __construct()
    {
        $this->master_barang = new \App\Models\masterbarang();
    }

    public function index()
    {
        $data = [
            'title' => 'Master Barang - Bengkel Jaya Motor',
            'master_barang' => $this->masterbarang->getallItems()
        ];
        return view('masterbarang.php', $data);
    }

    public function addmasterbarang()
    {
        $this->masterbarang->insert([
            'nama_barang' => $this->request->getVar('nama_barang'),
            'qty' => $this->request->getVar('qty'),
            'harga_beli' => $this->request->getVar('harga_beli'),
            'harga_jual' => $this->request->getVar('harga_jual'),
        ]);
        return redirect()->to('/master_barang');
    }
}
