<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class PasalModel extends Model{

    public function __construct()
    {
        parent::__construct();
        $db = Database::connect();
        $this->pasal = $db->table('pasal');
    }

    public function getPasalById($id){
        $builder = $this->pasal;
        $builder->select('*');
        $builder->where('id_pasal',$id);
        $query = $builder->get();
        return $query->getRow();
    }
    public function getPasal(){
        $builder = $this->pasal;
        $builder->select('*');
        $builder->orderBy('id_pasal', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }

    public function addNewPasal($data){
        return $this->pasal->insert($data);
    }

    public function updatePasal($data, $id)
    {
        $builder = $this->pasal;
        $builder->where('id_pasal', $id);
        return $builder->update($data);
    }

    public function deletePasal($id)
    {
        return $this->pasal->where('id_pasal', $id)->delete();
    }
}