<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        //
    }

    public function TampilUser(){
        $data=[
            'listUser' => $this->user->findAll()
        ];
        return view('user/list_user',$data);
    }

    public function tambah()
    {
        return view('user/tambah_user');
    }

    public function simpanUser()
    {
        $data=[
            'nama_user' => $this->request->getPost('user'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'level' => $this->request->getPost('level')
        ];

        $this->user->insert($data);

        return redirect()->to('/list-user');

    }

    public function edit($id){
        $data=[
         'detailUser'=>$this->user->detailUser($id)
        ];
         return view('user/edit_user',$data);
        }

    public function update()
    {
        $data=[
            'id_user'=>$this->request->getVar('id_user'),
            'nama_user'=>$this->request->getVar('nama_user'),
            'username'=>$this->request->getVar('username'),
            'password'=>$this->request->getVar('password'),
            'level'=>$this->request->getVar('level'),
        ];

        $this->user->update($this->request->getVar('id_user'),$data);
        return redirect()->to('/list-user');
    }
    public function hapus($id)
   {
    $this->user->hapusUser($id);
    session()->setFlashdata('hapus','Data telah dihapus');
    return redirect()->to('/list-user');
   }

   

    

   
   
}


