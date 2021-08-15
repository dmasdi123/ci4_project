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



    // controller untuk admin start -----------------------------------------------------------------
    public function userAdmin()
    {
        // $admin = $this->useradmin->getDashboardAdmin();
        $data = [
            'title' => 'Data Admin - Bengkel Jaya Motor',
            'admin' => $this->useradmin->getDashboardAdmin()
        ];
        return view('user/admin.php', $data);
    }

    public function adduseradm()
    {
        // dd($this->request->getVar());
        $this->useradmin->insert([
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'nama_user' => $this->request->getVar('nama_user'),
            'alamat' => $this->request->getVar('alamat'),
            'notelp' => $this->request->getVar('notelp'),
            'role' => $this->request->getVar('role')
        ]);

        return redirect()->to('user/admin');
    }

    public function deleteadm($iduser = null)
    {
        $this->useradmin->delete($iduser);
        return redirect()->to('user/admin');
    }
    // controller untuk admin end -----------------------------------------------------------------------



    // controller untuk supplier start ------------------------------------------------------------------
    public function userSupplier()
    {
        $data = [
            'title' => 'Data Supplier - Bengkel Jaya Motor',
            'supplier' => $this->usersupplier->getDashboardSupplier(),
            'id_supp' => $this->usersupplier->getIdSupp()
        ];
        return view('user/supplier.php', $data);
    }

    public function addusersupp()
    {
        $this->usersupplier->insert([
            'id_supp' => $this->usersupplier->getIdSupp(),
            'nama_supp' => $this->request->getVar('nama_supp'),
            'alamat' => $this->request->getVar('alamat'),
            'notelp' => $this->request->getVar('notelp')
        ]);
        return redirect()->to('user/supplier');
    }

    public function deletesupp($idsupp = null)
    {
        $this->usersupplier->delete($idsupp);
        return redirect()->to('user/supplier');
    }
    // controller untuk supplier end --------------------------------------------------------------------

    // controller untuk customer start ------------------------------------------------------------------
    public function userCustomer()
    {
        $data = [
            'title' => 'Data Customer - Bengkel Jaya Motor',
        ];
        return view('user/customer.php', $data);
    }
    // controller untuk customer end -------------------------------------------------------------------

    // controller untuk mekanik start ------------------------------------------------------------------
    public function userMekanik()
    {
        $data = [
            'title' => 'Data Mekanik - Bengkel Jaya Motor',
        ];
        return view('user/mekanik.php', $data);
    }
    // controller untuk mekanik end ------------------------------------------------------------------
}
