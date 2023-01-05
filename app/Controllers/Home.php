<?php

namespace App\Controllers;

use App\Models\PasalModel;

class Home extends BaseController
{
    public function index()
    {
        $pasalModel = new PasalModel;
        $data = [
            'title' => 'Home - Penyuluhan Hukum', 
            'pasal' => $pasalModel->getPasal()];

        return view('home-page/index', $data);
    }
    public function about()
    {
        $data['title'] = 'About Us - Penyuluhan Hukum';
        return view('home-page/about', $data);
    }
}
