<?php

namespace App\Controllers;

use \App\Models\userAdmin;
use \App\Models\userCustomer;
use \App\Models\userMekanik;
use \App\Models\userSupplier;
use CodeIgniter\HTTP\Request;

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
        // $getidser = $this->request->getVar('')
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

    public function editadmin($iduser)
    {
        $data = [
            'title' => 'Form Edit Admin',
            'admin' => $this->useradmin->getDashboardAdmin($iduser)
        ];
        return view('/user/editadmin', $data);
    }

    public function updateadmin($id_user)
    {
        $this->useradmin->save([
            'id_user' => $id_user,
            'nama_user' => $this->request->getVar('nama_user'),
            'alamat' => $this->request->getVar('alamat'),
            'notelp' => $this->request->getVar('notelp'),
            'role' => $this->request->getVar('role')
        ]);
        return redirect()->to('/user/admin');
        // dd($this->request->getVar());
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

    public function editsupp($idsupp)
    {
        $data = [
            'title' => 'Form Edit Admin',
            'supplier' => $this->usersupplier->getDashboardSupplier($idsupp)
        ];
        return view('/user/editsupplier', $data);
    }

    public function updatesupp($idsupp)
    {
        $this->usersupplier->save([
            'id_supp' => $idsupp,
            'nama_supp' => $this->request->getVar('nama_supp'),
            'alamat' => $this->request->getVar('alamat'),
            'notelp' => $this->request->getVar('notelp')
        ]);
        return redirect()->to('/user/supplier');
    }
    // controller untuk supplier end --------------------------------------------------------------------

    // controller untuk customer start ------------------------------------------------------------------
    public function userCustomer()
    {
        $data = [
            'title' => 'Data Customer - Bengkel Jaya Motor',
            'customer' => $this->usercustomer->getDashboardCustomer()
        ];
        return view('user/customer.php', $data);
    }

    public function showcust()
    {
        $id = $this->request->getVar('id'); //menerima data dari ajax
        $result = $this->usercustomer->showCustbyId($id); //input value dari ajax ke model
        return json_encode($result);
    }

    public function addcustomer()
    {
        $this->usercustomer->insert([
            'no_pol' => $this->request->getVar('no_pol'),
            'nama_cus' => $this->request->getVar('nama_cus'),
            'telp' => $this->request->getVar('telp'),
            'alamat_cus' => $this->request->getVar('alamat_cus'),
            'merk' => $this->request->getVar('merk'),
            'tipe' => $this->request->getVar('tipe')
        ]);
        return redirect()->to('/user/customer');
    }

    public function deletecus($idcus = null)
    {
        $this->usercustomer->delete($idcus);
        return redirect()->to('/user/customer');
    }

    public function editcust($idcust)
    {
        $data = [
            'title' => 'Form Edit Customer',
            'customer' => $this->usercustomer->getDashboardCustomer($idcust)
        ];
        return view('/user/editcustomer', $data);
    }

    public function updatecust($idcust)
    {
        $this->usercustomer->save([
            'id_cus' => $idcust,
            'no_pol' => $this->request->getVar('no_pol'),
            'nama_cus' => $this->request->getVar('nama_cus'),
            'telp' => $this->request->getVar('telp'),
            'alamat_cus' => $this->request->getVar('alamat_cus'),
            'merk' => $this->request->getVar('merk'),
            'tipe' => $this->request->getVar('tipe')

        ]);
        return redirect()->to('/user/customer');
    }
    // controller untuk customer end -------------------------------------------------------------------

    // controller untuk mekanik start ------------------------------------------------------------------
    public function userMekanik()
    {
        $data = [
            'title' => 'Data Mekanik - Bengkel Jaya Motor',
            'mekanik' => $this->usermekanik->getDashboardMekanik(),
            'id_mekan' => $this->usermekanik->getIdmekan()
        ];
        return view('user/mekanik.php', $data);
    }

    public function addmekanik()
    {
        $this->usermekanik->insert([
            'id_mekanik' => $this->usermekanik->getIdmekan(),
            'nama_mekan' => $this->request->getVar('nama_mekan'),
            'alamat' => $this->request->getVar('alamat'),
            'notelp' => $this->request->getVar('notelp')
        ]);
        return redirect()->to('user/mekanik');
    }

    public function deletemekan($idmekan = null)
    {
        $this->usermekanik->delete($idmekan);
        return redirect()->to('/user/mekanik');
    }

    public function editmekan($idmekan)
    {
        $data = [
            'title' => 'Form Edit Mekanik',
            'mekanik' => $this->usermekanik->getDashboardMekanik($idmekan)
        ];
        return view('/user/editmekanik', $data);
    }

    public function updatemekan($idmekan)
    {
        $this->usermekanik->save([
            'id_cus' => $idmekan,
            'nama_mekan' => $this->request->getVar('nama_mekan'),
            'alamat' => $this->request->getVar('alamat'),
            'notelp' => $this->request->getVar('notelp')


        ]);
        return redirect()->to('/user/mekanik');
    }
    // controller untuk mekanik end ------------------------------------------------------------------
}
