<?php

namespace App\Controllers;

class print_nota extends BaseController
{

    protected $notainv;
    protected $transaksi;
    protected $customer;
    protected $admin;

    public function __construct()
    {
        $this->notainv = new \App\Models\notainv();
        $this->transaksi = new \App\Models\transaksi();
        $this->customer = new \App\Models\userCustomer();
        $this->admin = new \App\Models\userAdmin();
    }


    public function insertnota()
    {
        $this->notainv->insert([
            'inv_nota' => $this->request->getVar('invoicePJ')
        ]);
    }

    public function invoice()
    {
        $inv = $this->request->getVar('id');
        $show_nota = $this->transaksi->getTrxByINV($inv);
        $jumlah_trx = $this->transaksi->showPricePJ($inv);
        $show_cust = $this->customer->showCustbyId2($inv);
        $admin = $this->admin->showAdmbyId($inv);
        $data = [
            'title' => 'Print - Bengkel Jaya Motor',
            'detail' => $show_nota,
            'gtotal' => $jumlah_trx,
            'cust' => $show_cust,
            'adm' => $admin
        ];
        return view('print_nota.php', $data);
    }
}
