<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel;
    }
    function userRegister()
    {
    }
    public function authentication(string $params)
    {

        if ($params == 'logout') {
            session()->destroy();
            return redirect()->to(base_url('/'));
        } else {
            $data['title'] = ucfirst($params);
            return view('login-page/' . $params, $data);
        }
    }
    public function process(string $params)
    {
        if ($params == 'register') {
            if (!$this->validate([
                'email' => [
                    'rules' => 'required|max_length[50]|is_unique[users.email]',
                    'errors' => [
                        'required' => '{field} Harus diisi',
                        'is_unique' => 'Email sudah digunakan sebelumnya'
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[4]|max_length[50]',
                    'errors' => [
                        'required' => '{field} Harus diisi',
                        'min_length' => '{field} Minimal 4 Karakter',
                        'max_length' => '{field} Maksimal 50 Karakter',
                    ]
                ],
                'nama' => [
                    'rules' => 'required|min_length[4]|max_length[100]',
                    'errors' => [
                        'required' => '{field} Harus diisi',
                        'min_length' => '{field} Minimal 4 Karakter',
                        'max_length' => '{field} Maksimal 100 Karakter',
                    ]
                ],
            ])) {
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back()->withInput();
            }
            $data = [
                'email' => $this->request->getPost('email'),
                'nama' => $this->request->getPost('nama'),
                'role' => 'users',
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT)
            ];
            $this->UsersModel->addNewUser($data);
            session()->setFlashdata(
                'success',
                'Registrasi Berhasil Silahkan Login!'
            );
            return redirect()->to(base_url('/auth/login'));
        } else if ($params == 'login') {
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $checkUserByEmail = $this->UsersModel->getUsersByEmail($email);
            if ($checkUserByEmail) {
                // Kalau email benar
                // Cek Password
                if (password_verify($password, $checkUserByEmail->password)) {
                    session()->set([
                        'name' => $checkUserByEmail->nama,
                        'isLogin' => TRUE,
                        'userId' => $checkUserByEmail->id_users,
                        'role' => $checkUserByEmail->role
                    ]);
                    if($checkUserByEmail->role == 'admin'){
                        return redirect()->to(base_url('/admin'));
                    }else{
                        return redirect()->to(base_url('/users/pengaduan/menunggu-ditanggapi'));
                    }
                } else {
                    // Kalau password salah
                    session()->setFlashdata('error', 'Password Salah');
                    return redirect()->back();
                }
                // Kalau email salah
                // maka sistem tidak perlu mengecek password
            }else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        }

        // return view('home-page/index');
    }
    public function logout()
    {
    }
}
