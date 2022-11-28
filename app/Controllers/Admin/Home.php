<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Home extends BaseController{

    public function index(){
        $data['title'] = 'Admin - Dashboard';
        return view('admin-page/dashboard', $data);
    }
    public function data_pasal(){
        $data['title'] = 'Admin - Data Pasal';
        return view('admin-page/data-pasal', $data);
    }
}