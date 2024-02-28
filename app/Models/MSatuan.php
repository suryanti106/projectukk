<?php

namespace App\Models;

use CodeIgniter\Model;

class MSatuan extends Model
{
    protected $table            = 'satuan';
    protected $primaryKey       = 'id_satuan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_satuan','nama_satuan'];

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

   public function getAllSatuan(){
    $satuan= NEW MSatuan;
    $querySatuan=$satuan->query("CALL tampil_satuan()")->getResult();
    return $querySatuan;
   }

   public function hapusSatuan($id){
    $satuan= NEW MSatuan;
    $satuan->query("CALL hapus_satuan('".$id."')");

   }

   public function simpan($data){
    $satuan=NEW MSatuan;
    $nama= $data['nama_satuan'];
    $satuan->query("CALL tambah_satuan('$nama')");
   }

   public function detailSatuan($idSatuan){
    $satuan= NEW MSatuan;
    $querySatuan=$satuan->query("CALL detail_satuan('".$idSatuan."')")->getResult();
    return $querySatuan;
   }

   public function updateSatuan($data){
    $satuan=NEW MSatuan;
    $nama       = $data['nama_satuan'];
    $satuan->query("CALL update_satuan('$nama')");
}



}
