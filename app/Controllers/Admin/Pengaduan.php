<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;

class Pengaduan extends BaseController
{
    public function __construct()
    {
        $this->pengaduanModel = new PengaduanModel;
    }
    public function index(string $params,$id = '')
    {
        if (session('isLogin') == true) {
            if (session('role') == 'users') {
                return redirect()->to(base_url());
            }else{
                switch ($params) {
                    case 'menunggu-ditanggapi':

                        $data = [
                            'title' => 'Pengaduan Masuk',
                            'listAduan' => $this->pengaduanModel->getPengaduanForAdmin('Menunggu Ditanggapi')
                        ];
                        $params = 'pengaduan';
                        break;
                    case 'ditanggapi':

                        $data = [
                            'title' => 'Pengaduan Ditanggapi',
                            'listAduan' => $this->pengaduanModel->getPengaduanForAdmin('Ditanggapi')

                        ];
                        $params = 'pengaduan';
                        break;
                        case 'detail':

                            $data = [
                                'title' => 'Detail Pengaduan',
                                'detailAduan' => $this->pengaduanModel->getPengaduanById($id)
                            ];
                            $params = $params. '-admin';
                            break;
    
                    default:
                        return redirect()->to(base_url('/'));
                        break;
                }

                return view('pengaduan-page/'.$params, $data);
            }
        } else {
            return redirect()->to(base_url('/auth/login'));
        }
    }
    public function detail($id)
    {
        return view('pengaduan-page/detail');
    }
}
