<?php

namespace App\Controllers;

class dashboardUtama extends BaseController
{
    public function dashboardutama()
    {
        $data = [
            'title' => 'Dashboard - Bengkel Jaya Motor',
        ];
        return view('dashboardutama.php', $data);
    }
}
