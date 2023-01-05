<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class TanggapanModel extends Model{

    public function __construct()
    {
        parent::__construct();
        $db = Database::connect();
        $this->tanggapan = $db->table('tanggapan');
    }

    
    public function getTanggapan($pengaduanId){
        $builder = $this->tanggapan;
        $builder->select('*');
        // $builder->join('pengaduan','tanggapan.id_pengaduan = pengaduan.id_pengaduan','inner');
        $builder->where('tanggapan.id_pengaduan', $pengaduanId);
        $builder->orderBy('id_pengaduan', 'ASC');
        $query = $builder->get();
        return $query->getResult();
    }
  

    public function addNewTanggapan($data){
        return $this->tanggapan->insert($data);
    }

    
}