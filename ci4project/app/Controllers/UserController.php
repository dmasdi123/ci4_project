<?php

namespace App\Controllers;

use \App\Models\userAdmin;
use \App\Models\userCustomer;
use \App\Models\userMekanik;
use \App\Models\userSupplier;

class userController extends BaseController
{
    protected $useradmin;
    protected $usercustomer;
    protected $usermekanik;
    protected $usersupplier;


    public function __construct()
    {
        $this->useradmin = new userAdmin();
        $this->usercustomer = new userCustomer();
        $this->usermekanik = new userMekanik();
        $this->usersupplier = new userSupplier();
    }

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
