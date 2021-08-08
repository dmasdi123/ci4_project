<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Halaman Login',
        ];
        return view('auth/login.php', $data);
    }
}
