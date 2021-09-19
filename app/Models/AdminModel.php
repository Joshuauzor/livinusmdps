<?php

namespace App\Models;

use CodeIgniter\Model;
$db = \Config\Database::connect();

class AdminModel extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'admin_id';

    protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['username', 'email', 'password'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getOne($array){
        $builder = $this->db->table($this->table);
        $builder->where($array);
        $result = $builder->get();
        return $result->getRow();
    }

    public function updateUser($user_id, $data){
        $builder = $this->db->table($this->table);
        $builder->where('uuid', $user_id);
        // $builder->set($data);
        $builder->update($data);
        $result = $builder->get();
        return $result->getRow();
    }

    #update user by email
    public function updateUserByEmail($email, $data){
        $builder = $this->db->table($this->table);
        $builder->where('email', $email);
        // var_dump($data); die;
        // $builder->set($data);
        $builder->update($data);
        $result = $builder->get();
        // var_dump($result); die;
        return $result->getRow();
    }

    #get users
    public function getAll(){
        $builder = $this->db->table($this->table);
        $result = $builder->get();
        return $result->getResult();
    }   

    public function getAllCondition($array, $limit = 12, $offset = 0){
        $builder = $this->db->table($this->table);
        $builder->where($array);
        $builder->limit($limit, $offset);
        $result = $builder->get();
        return $result->getResult();
    }  


}