<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class PengaduanModel extends Model{

    public function __construct()
    {
        parent::__construct();
        $db = Database::connect();
        $this->pengaduan = $db->table('pengaduan');
    }

    public function getPengaduanById($id){
        $builder = $this->pengaduan;
        $builder->select('*');
        $builder->join('users','pengaduan.id_users = users.id_users', 'inner');
        $builder->where('id_pengaduan',$id);
        $query = $builder->get();
        return $query->getRow();
    }
    public function getPengaduan($status,$userId){
        $builder = $this->pengaduan;
        $builder->select('*');
        $builder->where('status',$status);
        $builder->where('id_users',$userId);
        $builder->orderBy('id_pengaduan', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }
    public function getPengaduanForAdmin($status){
        $builder = $this->pengaduan;
        $builder->select('*');
        $builder->join('users','pengaduan.id_users = users.id_users', 'inner');
        $builder->where('status',$status);
        $builder->orderBy('id_pengaduan', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }

    public function addNewPengaduan($data){
        return $this->pengaduan->insert($data);
    }

    public function updatePengaduan($data, $id)
    {
        $builder = $this->pengaduan;
        $builder->where('id_pengaduan', $id);
        return $builder->update($data);
    }

    public function deletePengaduan($id)
    {
        return $this->pengaduan->where('id_pengaduan', $id)->delete();
    }
}