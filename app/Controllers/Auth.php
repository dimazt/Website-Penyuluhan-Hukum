<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $data['title'] = 'Login';

        return view('login-page/login',$data);
    }
    public function process()
    {
        session()->set([
            'isLogin' => 'true',
            'role' => 'user'
        ]);
        return redirect()->to(base_url('/'));
        // return view('home-page/index');
    }
    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
