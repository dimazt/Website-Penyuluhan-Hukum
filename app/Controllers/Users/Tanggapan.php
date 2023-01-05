<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;
use App\Models\TanggapanModel;

class Tanggapan extends BaseController
{
    public function __construct()
    {
        $this->tanggapanModel = new TanggapanModel;
        $this->pengaduanModel = new PengaduanModel;
    }
    public function index()
    {
        if (session('isLogin') == true) {
            // $balasan = $this->request->getPost('balasan');
            $id_pengaduan = $this->request->getPost('id_pengaduan');
            $data = $this->tanggapanModel->getTanggapan($id_pengaduan);
            echo json_encode($data);
        } else {
            return redirect()->to(base_url('/auth/login'));
        }
    }
    public function update()
    {
        // if (session('isLogin') == true) {
        if (session('role') == 'admin') {
            $status = 'Ditanggapi';
        } else {
            $status = 'Menunggu Ditanggapi';
        }
        $id_pengaduan = $this->request->getPost('id_pengaduan');
        $pengaduan = [
            'status' => $status,
        ];
        $this->pengaduanModel->updatePengaduan($pengaduan,$id_pengaduan);
        echo json_encode($pengaduan);

    }
    public function balasan()
    {
        
        // if (session('isLogin') == true) {
        if (session('role') == 'admin') {
            $nama = session('name');
        } else {
            $nama = null;
        }
        $balasan = $this->request->getPost('reply');
        $id_pengaduan = $this->request->getPost('id_pengaduan');
        $data = [
            'reply' => $balasan,
            'id_pengaduan' => $id_pengaduan,
            'admin_name' => $nama,
        ];

        $this->tanggapanModel->addNewTanggapan($data);
        echo json_encode($data);
        // return redirect()->to(base_url('/users/pengaduan/detail-users/', $id_pengaduan));

        //     }
        // } else {
        //     return redirect()->to(base_url('/auth/login'));
        // }
    }
}
