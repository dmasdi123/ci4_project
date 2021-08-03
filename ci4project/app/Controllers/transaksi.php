<?php

namespace App\Controllers;

class transaksi extends BaseController
{
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
        ];
        return view('service.php', $data);
    }
}
