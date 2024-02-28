<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{

    public function index()
    {
        return view('login/halaman-login');
    }


    public function login()
    {
        return view('dashboard');
    }

    public function prosesLogin()
    {
        // Validasi form
        $validasiForm = [
            'username' => 'required',
            'password' => 'required'
        ];

        if ($this->validate($validasiForm)) {
            $model = new \App\Models\MUser(); 

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $model->getUser($username, $password);

            if (!is_null($user) && count($user) > 0) {
                $dataSession = [
                    'id_user' => $user['id_user'],
                    'nama_user' => $user['nama_user'],
                    'username' => $user['username'],
                    'level' => $user['level'],
                    'sudahkahLogin' => true
                ];

                session()->set($dataSession);

                return redirect()->to('/dashboard'); 
            } else {
                // Pesan kesalahan jika login gagal
                return redirect()->to('/')
                    ->with('pesan', 'Username atau Password salah!')
                    ->withInput();
            }
        } else {
            // Pesan kesalahan jika validasi form tidak berhasil
            return redirect()->to('/')
                ->with('pesan', 'Username dan Password harus diisi dengan benar!')
                ->withInput();
        }
    }

    public function logout()
    {
        // Hapus data sesi dan arahkan ke halaman login
        session()->destroy();
        return redirect()->to('/');
    }
}
