<?php

namespace App\Models;

use CodeIgniter\Model;

class MProduk extends Model
{
    protected $table            = 'produk';
    protected $primaryKey       = 'id_produk';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_produk','kode_produk','nama_produk','harga_beli','harga_jual','id_satuan','id_kategori','stok'];

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

    public function getAllProduk(){
        $produk= NEW MProduk;
        $queryProduk=$produk->query("CALL tampil_produk()")->getResult();
        return $queryProduk;
       }
    
       public function hapusProduk($id){
        $produk= NEW MProduk;
        $produk->query("CALL hapus_produk('".$id."')");
    
       }
    
       public function simpan($data){
        $produk=NEW MProduk;
        $kode= $data['kode_produk'];
        $nama= $data['nama_produk'];
        $hargabeli= $data['harga_beli'];
        $hargajual= $data['harga_jual'];
        $idsatuan= $data['id_satuan'];
        $idkategori= $data['id_kategori'];
        $stok= $data['stok'];
        $produk->query("CALL tambah_produk('$kode','$nama','$hargabeli','$hargajual','$idsatuan','$idkategori','$stok')");
       }
    
       public function updateSiswa($data){
        $produk=NEW MProduk;
        $kode= $data['kode_produk'];
        $nama= $data['nama_produk'];
        $hargabeli= $data['harga_beli'];
        $hargajual= $data['harga_jual'];
        $idsatuan= $data['id_satuan'];
        $idkategori= $data['id_kategori'];
        $stok= $data['stok'];
        $produk->query("CALL update_produk('$kode','$nama','$hargabeli','$hargajual','$idsatuan','$idkategori','$stok)");
       }

    public function getAllLaporanProduk(){
        $produk= NEW MProduk;
        $queryProduk=$produk->query("CALL lihat_stok()")->getResult();
        return $queryProduk;
    }

    public function getAllDetailProduk(){
        $produk= NEW MProduk;
        $queryproduk=$produk->query("CALL lihat_detailproduk()")->getResult();
        return $queryproduk;
    }

      
    
    
}
