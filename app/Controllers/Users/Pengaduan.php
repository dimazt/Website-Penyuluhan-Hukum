<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;
use App\Models\TanggapanModel;

class Pengaduan extends BaseController
{
    public function __construct()
    {
        $this->pengaduanModel = new PengaduanModel;
        $this->tanggapanModel = new TanggapanModel;

    }
    public function index(string $params, $id = '')
    {
        if (session('isLogin') == true) {
            if (session('role') == 'admin') {
                return redirect()->to(base_url('/admin'));
            } else {

                switch ($params) {
                    case 'menunggu-ditanggapi':

                        $data = [
                            'title' => 'Pengaduan Dalam Antrian',
                            'listAduan' => $this->pengaduanModel->getPengaduan('Menunggu Ditanggapi',session('userId'))
                        ];
                        $params = 'pengaduan';
                        break;

                    case 'ditanggapi':

                        $data = [
                            'title' => 'Pengaduan Ditanggapi',
                            'listAduan' => $this->pengaduanModel->getPengaduan('Ditanggapi',session('userId'))

                        ];
                        $params = 'pengaduan';
                        break;
                    case 'buat-pengaduan':

                        $data = [
                            'title' => 'Buat Aduan Baru',
                        ];
                        break;
                    case 'detail':

                        $data = [
                            'title' => 'Detail Pengaduan',
                            'detailAduan' => $this->pengaduanModel->getPengaduanById($id)
                        ];
                        $params = $params . '-users';
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

    public function action(string $params, $id = '')
    {
        if (session('isLogin') == true) {
            if (session('role') == 'admin') {
                return redirect()->to(base_url('/admin'));
            } else {
                switch ($params) {
                    case 'create':

                        $judul = $this->request->getPost('judul');
                        $data = [
                            'aduan' => $this->request->getPost('isi_aduan'),
                            'judul' => $judul,
                            'status' => 'Menunggu Ditanggapi',
                            'id_users' => session('userId')
                        ];
                        $this->pengaduanModel->addNewPengaduan($data);
                        session()->setFlashdata('success', 'Berhasil Membuat ' . $judul);
                        return redirect()->to(base_url('/users/pengaduan/menunggu-ditanggapi'));
                        break;


                    default:
                        return redirect()->to(base_url('/'));
                        break;
                }
            }
        } else {
            return redirect()->to(base_url('/auth/login'));
        }
    }
}
