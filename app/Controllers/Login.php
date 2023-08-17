<?php

namespace App\Controllers;

use App\Models\modelPengguna;

class Login extends BaseController
{
    public function index()
    {
        
        $modelPengguna = new modelPengguna();
        $login = $this->request->getPost('login');
        if ($login) {
            $nik = $this->request->getPost('nik');
            $password = $this->request->getPost('password');
            if ($nik == '' or $password == '') {
                $err = "Silahkan masukkan NIK dan Password";
            }
            if ($err) {
                session()->setFlashdata('error', $err);
                return redirect()->to("views_login");
            }

        }
        return view('views_login');

    }
}