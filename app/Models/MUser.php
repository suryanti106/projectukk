<?php

namespace App\Models;

use CodeIgniter\Model;

class MUser extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user','nama_user','username','passworrd','level'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllUser(){
        $user= NEW Muser;
        $queryUser=$user->query("CALL tampil_user()")->getResult();
        return $queryUser;
       }
    
       public function hapusUser($id){
        $user= NEW Muser;
        $user->query("CALL hapus_user('".$id."')");
    
       }
    
       public function simpan($data){
        $user=NEW MUser;
        $nama= $data['nama_user'];
        $username= $data['username'];
        $password= $data['password'];
        $level= $data['level'];
        $user->query("CALL tambah_user('$nama','$username','$password','$level')");
       }
    
       public function detailUser($idUser){
        $user= NEW Muser;
        $queryUser=$user->query("CALL detail_user('".$idUser."')")->getResult();
        return $queryUser;
       }
    
       public function updateUser($data){
        $user=NEW MUser;
        $nama       = $data['nama_user'];
        $username= $data['username'];
        $password= $data['password'];
        $level= $data['level'];
        $user->query("CALL update_user('$nama''$username','$password','$level)");
    }

    public function getUser($username, $password)
    {
        // Ambil data pengguna berdasarkan username dan password
        $user = $this->db->table($this->table)
            ->where('username', $username)
            ->where('password', $password)
            ->get()
            ->getRowArray();

        return $user;
    }
    
    
}
