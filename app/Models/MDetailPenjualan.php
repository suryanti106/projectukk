<?php

namespace App\Models;

use CodeIgniter\Model;

class MDetailPenjualan extends Model
{
    protected $table            = 'detailpenjualan';
    protected $primaryKey       = 'id_detail';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_detail','no_faktur','id_produk','harga_jual','qyt','total_harga'];

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

    public function getDetailPenjualan($idPenjualan){
        return $this->db->table('detailpenjualan')
            ->select('detailpenjualan.*, penjualan.no_faktur,produk.nama_produk')
            ->join('penjualan', 'penjualan.id_penjualan = detailpenjualan.id_penjualan')
            ->join('produk', 'produk.id_produk = detailpenjualan.id_produk')
            ->where('detailpenjualan.id_penjualan', $idPenjualan)
            ->get()
            ->getResultArray();
    }

    public function hapusdetail($idDetail){
        $detailPenjualan = NEW MDetailPenjualan;
        $detailPenjualan->query("CALL hapus_detailPenjualan('".$idDetail."')");
    }
}
