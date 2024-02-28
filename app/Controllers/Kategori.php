<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kategori extends BaseController
{
    public function index()
    {
       //
    }

    public function TampilKategori(){
        $data=[
            'listKategori' => $this->kategori->findAll()
        ];
        return view('kategori/list_kategori',$data);
    }

    public function tambah()
    {
        return view('kategori/tambah_kategori');
    }

    public function simpanKategori()
    {
        $data=[
            'nama_kategori' => $this->request->getPost('nama_kategori')
        ];

        $this->kategori->insert($data);

        return redirect()->to('/list-kategori');

    }
    public function edit($id){
        $data=[
         'detailKategori'=>$this->kategori->detailKategori($id)
        ];
         return view('kategori/edit_kategori',$data);
        }


    public function update()
    {
        $data=[
            'id_kategori'=>$this->request->getVar('id_kategori'),
            'nama_kategori'=>$this->request->getVar('nama_kategori')
        ];

        $this->kategori->update($this->request->getVar('id_kategori'),$data);
        return redirect()->to('/list-kategori');
    }

    public function hapus($id)
   {
    $this->kategori->hapusKategori($id);
    session()->setFlashdata('hapus','Data telah dihapus');
    return redirect()->to('/list-kategori');
   }

   
}
