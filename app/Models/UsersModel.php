<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class UsersModel extends Model{

    public function __construct()
    {
        parent::__construct();
        $db = Database::connect();
        $this->users = $db->table('users');
    }

    public function getUsersByEmail($email){
        $builder = $this->users;
        $builder->select('*');
        $builder->where('email',$email);
        $query = $builder->get();
        return $query->getRow();
    }

    public function addNewUser($data){
        return $this->users->insert($data);
    }
}