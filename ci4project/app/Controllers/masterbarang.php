<?php

namespace App\Controllers;

class masterbarang extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Master Barang - Bengkel Jaya Motor',
        ];
        return view('masterbarang.php', $data);
    }
}
