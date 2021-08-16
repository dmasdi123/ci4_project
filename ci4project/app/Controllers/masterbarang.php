<?php

namespace App\Controllers;

class masterbarang extends BaseController
{

    protected $masterbarang;
    protected $usersupplier;

    public function __construct()
    {
        $this->masterbarang = new \App\Models\masterbarang();
        $this->usersupplier = new \App\Models\userSupplier();
    }

    public function index()
    {
        $data = [
            'title' => 'Master Barang - Bengkel Jaya Motor',
            'master_barang' => $this->masterbarang->tampildatamb(),
            'supplier' => $this->usersupplier->getDashboardSupplier()
        ];
        return view('masterbarang.php', $data);
    }

    public function addmasterbarang()
    {
        $this->masterbarang->insert([
            'id_user' => $this->request->getVar('id_user'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'qty' => $this->request->getVar('qty'),
            'harga_beli' => $this->request->getVar('harga_beli'),
            'harga_jual' => $this->request->getVar('harga_jual'),
            'id_supp' => $this->request->getVar('id_supp')
        ]);
        session()->setFlashData('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/master_barang');
    }

    public function deletemb($idmb = null)
    {
        $this->masterbarang->delete($idmb);
        session()->setFlashData('pesan3', 'Data Berhasil Dihapus');
        return redirect()->to('/master_barang');
    }

    public function editmb($idmb)
    {
        $data = [
            'title' => 'Form Edit Master Barang',
            'mb' => $this->masterbarang->getallItems($idmb),
            'supplier' => $this->usersupplier->getDashboardSupplier()
        ];

        return view('/editmasterbarang', $data);
    }

    public function updatemb($idmb)
    {
        $this->masterbarang->save([
            'id_barang' => $idmb,
            'id_user' => $this->request->getVar('id_user'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'qty' => $this->request->getVar('qty'),
            'harga_beli' => $this->request->getVar('harga_beli'),
            'harga_jual' => $this->request->getVar('harga_jual'),
            'id_supp' => $this->request->getVar('id_supp')

        ]);

        session()->setFlashData('pesan2', 'Data Berhasil Diubah');
        return redirect()->to('/master_barang');
    }
}
