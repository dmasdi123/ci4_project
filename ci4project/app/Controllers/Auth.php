<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login.php');
    }

    public function register()
    {
        return view('auth/register.php');
    }
}
