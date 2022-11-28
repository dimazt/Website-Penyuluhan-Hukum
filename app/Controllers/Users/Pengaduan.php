<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Pengaduan extends BaseController
{
    public function index(string $params)
    {
        if (session('isLogin') == true) {
            if ($params == 'menunggu-ditanggapi') {
                $title = 'Pengaduan Dalam Antrian';
            } else if ($params == 'ditolak') {
                $title = 'Pengaduan Ditolak';
            } else {
                $title = 'Pengaduan Ditanggapi';
            }
            $data['title'] = $title;
            return view('pengaduan-page/' . $params, $data);
        } else {
            return redirect()->to(base_url('/auth'));
        }
    }
    public function detail($id)
    {
        return view('pengaduan-page/detail');
    }
}
