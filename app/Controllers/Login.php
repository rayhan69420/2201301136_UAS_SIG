<?php

namespace App\Controllers;

use App\Models\AkunModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function auth()
    {

        // dd($this->request);
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $model = new AkunModel();
        $akun = $model->getAkunByEmail($email);
        // dd($akun);
        if ($akun !== null) {
            if (($password == $akun['password'])) {
                $session = session();
                $sessionData = [
                    'id' => $akun['id'],
                    'email' => $akun['email'],
                    'isLoggedIn' => true
                ];
                $session->set($sessionData);

                return redirect()->to('/dashboard');
            } else {
                session()->setFlashdata('error', 'Password salah.');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('error', 'Email tidak ditemukan.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/index'));
    }
}
