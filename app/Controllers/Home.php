<?php

namespace App\Controllers;
class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home - Penyuluhan Hukum';
        return view('home-page/index',$data);
    }
    public function about()
    {
        $data['title'] = 'About Us - Penyuluhan Hukum';
        return view('home-page/about',$data);
    }
}
