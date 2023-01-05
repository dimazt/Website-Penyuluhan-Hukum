<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PasalModel;
use CodeIgniter\CLI\Console;

class Pasal extends BaseController
{

    public function __construct()
    {
        $this->pasalModel = new PasalModel;
    }
    public function index(string $params, $id = '')
    {
        if (session('isLogin') == 'true') {
            if (session('role') == 'users') {
                return redirect()->to(base_url());
            }
            $pasal = $this->pasalModel->getPasalById($id);

            switch ($params) {
                case 'buat-pasal':
                    $data = [
                        'title' => 'Admin - Buat Data Pasal',
                        // 'pasal' => $this->pasalModel->getPasal()
                    ];
                    return view('admin-page/pasal/new-data-pasal', $data);
                    break;
                case 'edit-pasal':

                    $data = [
                        'title' => 'Admin - Edit Data Pasal',
                        'pasal' => $pasal
                        // 'pasal' => $this->pasalModel->getPasal()
                    ];
                    return view('admin-page/pasal/edit-data-pasal', $data);
                    break;
                case 'delete':
                    $this->pasalModel->deletePasal($id);
                    return redirect()->to(base_url('/admin/pasal/view-pasal'));
                    break;
                default:
                    $data = [
                        'title' => 'Admin - Data Pasal',
                        'pasal' => $this->pasalModel->getPasal()
                    ];
                    return view('admin-page/pasal/data-pasal', $data);
                    break;
            }
        } else {
            // Jika belum login maka kembali ke halaman home
            return redirect()->to(base_url('/'));
        }
    }
    public function process(string $params, $id = '')
    {
        if (session('isLogin') == 'true') {
            if (session('role') == 'users') {
                return redirect()->to(base_url());
            }
            switch ($params) {
                case 'create':
                    if (!$this->validate([

                        'thumbnail' => [
                            'rules' => 'uploaded[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/gif,image/png]|max_size[thumbnail,2048]',
                            'errors' => [
                                'uploaded' => 'Harus Ada File Thumbnail yang diupload',
                                'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                                'max_size' => 'Ukuran File Maksimal 2 MB'
                            ]

                        ],
                        'path_files' => [
                            'rules' => 'uploaded[path_files]|mime_in[path_files,application/pdf]|max_size[path_files,10240]',
                            'errors' => [
                                'uploaded' => 'Harus Ada File Pasal yang diupload',
                                'mime_in' => 'File Extention Harus Berupa pdf',
                                'max_size' => 'Ukuran File Maksimal 10 MB'
                            ]

                        ]
                    ])) {
                        session()->setFlashdata('error', $this->validator->listErrors());
                        return redirect()->back()->withInput();
                    }


                    $thumbnail = $this->request->getFile('thumbnail');
                    $fileNameThumbnail = $thumbnail->getRandomName();
                    $pasal = $this->request->getFile('path_files');
                    $fileNamePasal = $pasal->getRandomName();
                    $judul = $this->request->getPost('judul');
                    $data = [
                        'path_files' => $fileNamePasal,
                        'thumbnail' => $fileNameThumbnail,
                        'description' => $this->request->getVar('description'),
                        'judul' => $judul,
                    ];
                    $this->pasalModel->addNewPasal($data);
                    $thumbnail->move('uploads/thumbnail/', $fileNameThumbnail);
                    $pasal->move('uploads/berkas-pasal/', $fileNamePasal);
                    session()->setFlashdata('success', 'Berhasil Menambahkan Data ' . $judul);
                    return redirect()->to(base_url('/admin/pasal/view-pasal'));
                    break;
                case 'edit':
                    // $id = $this->request->getPost('id');
                    $judul = $this->request->getPost('judul');
                    $validate = $this->validate([

                        'thumbnail' => [
                            'rules' => 'uploaded[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/gif,image/png]|max_size[thumbnail,2048]',
                            'errors' => [
                                'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                                'max_size' => 'Ukuran File Maksimal 2 MB'
                            ]

                        ],
                        'pasal' => [
                            'rules' => 'uploaded[pasal]|mime_in[pasal,application/pdf]|max_size[pasal,10240]',
                            'errors' => [
                                'mime_in' => 'File Extention Harus Berupa pdf',
                                'max_size' => 'Ukuran File Maksimal 10 MB'
                            ]

                        ]
                    ]);

                    // if ($validate == FALSE) {
                    //     $data = [
                    //         'description' => $this->request->getVar('description'),
                    //         'judul' => $judul,
                    //     ];
                    // } else {
                    $pasalOld = $this->pasalModel->getPasalById($id);
                    $gambar = $pasalOld->thumbnail;
                    $filePasal = $pasalOld->path_files;
                    $path = 'uploads/berkas-pasal/';
                    $pathThumbnail = 'uploads/thumbnail/';



                    if (isset($_FILES) && @$_FILES['thumbnail']['error'] == '4') {
                        $fileNameThumbnail = $gambar;
                    } else {
                        @unlink($pathThumbnail . $gambar);
                        $thumbnail = $this->request->getFile('thumbnail');
                        $fileNameThumbnail = $thumbnail->getRandomName();
                        $thumbnail->move('uploads/thumbnail/', $fileNameThumbnail);
                    }

                    if (isset($_FILES) && @$_FILES['pasal']['error'] == '4') {
                        $fileNamePasal = $filePasal;
                    } else {
                        @unlink($path . $filePasal);
                        $pasal = $this->request->getFile('pasal');
                        $fileNamePasal = $pasal->getRandomName();
                        $pasal->move('uploads/berkas-pasal/', $fileNamePasal);
                    }

                    $data = [
                        'path_files' => $fileNamePasal,
                        'thumbnail' => $fileNameThumbnail,
                        'description' => $this->request->getVar('description'),
                        'judul' => $judul,
                    ];
                    // }
                    $this->pasalModel->updatePasal($data, $id);
                    session()->setFlashdata('success', 'Berhasil Mengubah Data ' . $judul);
                    return redirect()->to(base_url('/admin/pasal/view-pasal'));
                    break;


                default:
                    return redirect()->to(base_url('/admin/pasal/view-pasal'));
                    break;
            }
        } else {
            // Jika belum login maka kembali ke halaman home
            return redirect()->to(base_url('/'));
        }
    }
}
