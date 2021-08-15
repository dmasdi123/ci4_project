<?php

namespace App\Controllers;

use \App\Models\authModel;

class Auth extends BaseController
{

    protected $authmodel;

    public function __construct()
    {
        $this->authmodel = new authModel();
    }

    public function login()
    {
        $data = [
            'title' => 'Halaman Login',
        ];
        return view('auth/login');
    }

    public function do_login()
    {
        $data = [
            'title' => 'Halaman Login',
        ];

        $getusername = $this->request->getVar('username');
        $getpassword = $this->request->getVar('password');

        $cek = $this->authmodel->getDataLogin($getusername, $getpassword);


        if (($cek['username'] == $getusername) && ($cek['password'] == $getpassword)) {


            session()->set('id_adm', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('password', $cek['password']);
            session()->set('nama_user', $cek['nama_user']);
            session()->set('alamat', $cek['alamat']);
            session()->set('notelp', $cek['notelp']);
            session()->set('role', $cek['role']);
            return redirect()->to('/dashboard');
        } else {
            return view('/auth/login', $data);
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
