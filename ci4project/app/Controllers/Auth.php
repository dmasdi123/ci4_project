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
        $getusername = $this->request->getVar('username');
        $getpassword = $this->request->getVar('password');

        $data_login = $this->authmodel->where('username', $getusername)->first();
        if ($data_login) {
            $pass = $data_login['password'];
            if ($pass == $getpassword) {
                session()->set('id_adm', $data_login['id_user']);
                session()->set('username', $data_login['username']);
                session()->set('password', $data_login['password']);
                session()->set('nama_user', $data_login['nama_user']);
                session()->set('alamat', $data_login['alamat']);
                session()->set('notelp', $data_login['notelp']);
                session()->set('role', $data_login['role']);

                return redirect()->to('/dashboard');
            } else {
                return redirect()->to('/');
                session()->setFlashData('pesan', 'Username atau Password Anda SALAH');
            }
        } else {
            return redirect()->to('/');
            session()->setFlashData('pesan', 'Username atau Password Anda SALAH');
        }
    }

    // public function do_login()
    // {

    //     $getusername = $this->request->getVar('username');
    //     $getpassword = $this->request->getVar('password');

    //     $cek = $this->authmodel->getDataLogin($getusername, $getpassword);


    //     if (($cek['username'] == $getusername) && ($cek['password'] == $getpassword)) {
    //         session()->set('id_adm', $cek['id_user']);
    //         session()->set('username', $cek['username']);
    //         session()->set('password', $cek['password']);
    //         session()->set('nama_user', $cek['nama_user']);
    //         session()->set('alamat', $cek['alamat']);
    //         session()->set('notelp', $cek['notelp']);
    //         session()->set('role', $cek['role']);
    //         return redirect()->to('/dashboard');
    //     } else {
    //         return redirect()->to('/auth/login');
    //     }
    // }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
