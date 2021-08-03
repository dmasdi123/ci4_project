<?php

namespace App\Controllers;

class userController extends BaseController
{
    public function userAdmin()
    {
        return view('user/admin.php');
    }

    public function userSupplier()
    {
        return view('user/supplier.php');
    }

    public function userCustomer()
    {
        return view('user/customer.php');
    }

    public function userMekanik()
    {
        return view('user/mekanik.php');
    }
}
