<?php

namespace App\Controllers;

class dashboardUtama extends BaseController
{
    public function dashboardutama()
    {
        if (session()->get('username', 'password') == null) {
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Dashboard - Bengkel Jaya Motor',
        ];
        return view('dashboardutama.php', $data);
    }
}
