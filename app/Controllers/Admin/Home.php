<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PasalModel;

class Home extends BaseController
{

    // public function __construct()
    // {
    //     $this->pasalModel = new PasalModel;
    // }
    public function index()
    {
        if (session('isLogin') == 'true') {
            if (session('role') == 'users') {
                return redirect()->to(base_url());
            }
            $data = [
                'title' => 'Admin - Dashboard'
            ];
            return view('admin-page/dashboard', $data);
        } else {
            // Jika belum login maka kembali ke halaman home
            return redirect()->to(base_url('/'));
        }
    }
    
}
