<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\MProduk;
Use Dompdf\Dompdf;

class Laporan extends BaseController
{
    public function index()
    {
        $data =[
            'listProduk'=> $this->produk->getAllLaporanProduk()
        ];

        return view('laporan/list-laporan', $data);
    }

    public function generate()
    {
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        $data =[
            'listProduk'=> $this->produk->getAllLaporanProduk()
        ];


        // load HTML content
        $dompdf->loadHtml(view('laporan/prin-stok',$data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);

    }

   

    
}
