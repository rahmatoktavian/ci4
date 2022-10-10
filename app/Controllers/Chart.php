<?php
namespace App\Controllers;

//memanggil model
use App\Models\BukuModel;

class Chart extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->BukuModel = new BukuModel();
    }

    public function list()
    {
        //select data from table buku
        $list = $this->BukuModel->select('judul, stok')->orderBy('judul')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('chart', $output);
    }
}
