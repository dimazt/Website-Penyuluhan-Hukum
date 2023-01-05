<?php

namespace App\Controllers;

class Lampiran extends BaseController
{

    public function __construct()
    {
        // $this->load = 
    }
    public function index(){

    }
    
    function upload_image(){
        if ($this->request->getFile('image')) {
            $dataFile = $this->request->getFile('image');
            $fileName = $dataFile->getRandomName();
            $dataFile->move("uploads/lampiran/", $fileName);
            echo base_url("uploads/lampiran/$fileName");
        }
    }
 
    //Delete image summernote
    function delete_image(){
        $src = $this->request->getVar('src');
        //--> uploads/berkas/1630368882_e4a62568c1b50887a8a5.png

        //https://localhost/ci4summernote/public
        if ($src) {
            $file_name = str_replace(base_url() . "/", "", $src);
            if (unlink($file_name)) {
                echo "Delete file berhasil";
            }
        }
    }
    
}