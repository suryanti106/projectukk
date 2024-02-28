<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\MSatuan;

class Satuan extends BaseController
{
    public function index()
    {
    //
    }
    public function TampilSatuan(){
        $data=[
            'listSatuan' => $this->satuan->findAll()
        ];
        return view('satuan/list_satuan',$data);
    }

    public function tambah()
    {
        return view('satuan/tambah_satuan');
    }

    public function simpanSatuan()
    {
        $data=[
            'nama_satuan' => $this->request->getPost('nama_satuan')
        ];

        $this->satuan->insert($data);

        return redirect()->to('/list-satuan');

    }

    public function edit($id){
        $data=[
         'detailSatuan'=>$this->satuan->detailSatuan($id)
        ];
         return view('satuan/edit_satuan',$data);
        }

    public function update()
    {
        $data=[
            'id_satuan'=>$this->request->getVar('id_satuan'),
            'nama_satuan'=>$this->request->getVar('nama_satuan')
        ];

        $this->satuan->update($this->request->getVar('id_satuan'),$data);
        return redirect()->to('/list-satuan');
    }
    public function hapus($id)
   {
    $this->satuan->hapusSatuan($id);
    session()->setFlashdata('hapus','Data telah dihapus');
    return redirect()->to('/list-satuan');
   }

   

    
}
