<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MProduk;
use App\Models\MKategori;
use App\Models\MSatuan;

class Produk extends BaseController
{
    public function index()
    {
        //
    }

    public function TampilProduk(){
        $data=[
            'listProduk' => $this->produk->findAll()
        ];
        return view('produk/list_produk',$data);
    }

    public function tambah()
    {
        $data=[
            'listSatuan'=>$this->satuan->getAllSatuan(),
            'listKategori'=>$this->kategori->getAllKategori()
        ];
        return view('produk/tambah_produk', $data);
    }

    public function simpanProduk()
    {
        $data=[
            'id_produk'=> $this->request->getPost('id_produk'),
            'kode_produk'=> $this->request->getPost('kode_produk'),
            'nama_produk'=> $this->request->getPost('nama_produk'),
            'harga_beli'=> $this->request->getPost('harga_beli'),
            'harga_jual'=> $this->request->getPost('harga_jual'),
            'id_satuan'=> $this->request->getPost('id_satuan'),
            'id_kategori'=> $this->request->getPost('id_kategori'),
            'stok'=> $this->request->getPost('stok')

            
        ];

        $this->produk->insert($data);

        return redirect()->to('/list-produk');

    }

    public function update()
    {
        $data=[
            'id_produk'=>$this->request->getVar('id_produk'),
            'kode_produk'=>$this->request->getVar('kode_produk'),
            'nama_produk'=>$this->request->getVar('nama_produk'),
            'harga_beli'=>$this->request->getVar('harga_beli'),
            'harga_jual'=>$this->request->getVar('harga_jual'),
            'id_satuan'=>$this->request->getVar('id_satuan'),
            'id_kategori'=>$this->request->getVar('id_kategori'),
            'stok'=>$this->request->getVar('stok')
        ];

        $this->produk->update($this->request->getVar('id_produk'),$data);
        return redirect()->to('/list-produk');
    }
    public function hapus($id)
   {
    $this->produk->hapusProduk($id);
    session()->setFlashdata('hapus','Data telah dihapus');
    return redirect()->to('/list-produk');
   }

   public function edit($id){
    $syarat = [
        'id_produk' =>$id
    ];

    $data = [
        'detailProduk'=>$this->produk->where($syarat)->findAll()
    ];
    return view('produk/edit_produk',$data);
   }

}
