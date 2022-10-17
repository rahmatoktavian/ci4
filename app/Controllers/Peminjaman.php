<?php
namespace App\Controllers;

//memanggil model
use App\Models\PeminjamanModel;

class Peminjaman extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->PeminjamanModel = new PeminjamanModel();
    }

    public function list()
    {
        //select data from table peminjaman
        $list = $this->PeminjamanModel->select('id, nama, tanggal')->orderBy('tanggal')->findAll();
        
        $output = [
            'list' => $list,
        ];

        return view('peminjaman_list', $output);
    }
}
