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
        $petugas_id = session()->get('petugas_id');
        $list = $this->PeminjamanModel->select('id, nama, tanggal')->where('petugas_id', $petugas_id)->orderBy('tanggal')->findAll();
        
        $output = [
            'list' => $list,
        ];

        return view('peminjaman_list', $output);
    }

    public function insert()
    {
        return view('peminjaman_insert');
    }

    public function insert_save()
    {
        $nama = $this->request->getVar('nama');
        $tanggal = $this->request->getVar('tanggal');
        $petugas_id = session()->get('petugas_id');
       
        //insert data ke table peminjaman
        $this->PeminjamanModel->insert([
            'nama' => $nama,
            'tanggal' => $tanggal,
            'petugas_id' => $petugas_id,
        ]);

        return redirect()->to('peminjaman');
    }
}
