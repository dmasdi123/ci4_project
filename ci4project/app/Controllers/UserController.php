<?php

namespace App\Controllers;

class userController extends BaseController
{
    public function userAdmin()
    {
        $data = [
            'title' => 'Data Admin - Bengkel Jaya Motor',
        ];
        return view('user/admin.php', $data);
    }

    public function userSupplier()
    {
        $data = [
            'title' => 'Data Supplier - Bengkel Jaya Motor',
        ];
        return view('user/supplier.php', $data);
    }

    public function userCustomer()
    {
        $data = [
            'title' => 'Data Customer - Bengkel Jaya Motor',
        ];
        return view('user/customer.php', $data);
    }

    public function userMekanik()
    {
        $data = [
            'title' => 'Data Mekanik - Bengkel Jaya Motor',
        ];
        return view('user/mekanik.php', $data);
    }
}
