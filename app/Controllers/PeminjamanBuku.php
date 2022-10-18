<?php
namespace App\Controllers;

//memanggil model
use App\Models\PeminjamanModel;
use App\Models\PeminjamanBukuModel;
use App\Models\BukuModel;

class PeminjamanBuku extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->PeminjamanModel = new PeminjamanModel();
        $this->PeminjamanBukuModel = new PeminjamanBukuModel();
        $this->BukuModel = new BukuModel();
    }

    public function list($peminjaman_id)
    {   
        //peminjaman
        $peminjaman =  $this->PeminjamanModel->where('id', $peminjaman_id)->first();
        
        //peminjaman_buku
        $peminjaman_buku = $this->PeminjamanBukuModel->select('peminjaman_buku.id, buku.judul')
                ->join('buku', 'peminjaman_buku.buku_id = buku.id')
                ->where('peminjaman_buku.peminjaman_id', $peminjaman_id)
                ->findAll();

        $output = [
            'peminjaman' => $peminjaman,
            'peminjaman_buku' => $peminjaman_buku,
            'peminjaman_id' => $peminjaman_id
        ];

        return view('peminjaman_buku_list', $output);
    }

    public function insert($peminjaman_id)
    {
        $buku =  $this->BukuModel->orderBy('judul')->findAll();
        
        $output = [
            'buku' => $buku,
            'peminjaman_id' => $peminjaman_id
        ];

        return view('peminjaman_buku_insert', $output);
    }

    public function insert_save($peminjaman_id)
    {
        $buku_id = $this->request->getVar('buku_id');

        $db = \Config\Database::connect();
        $db->transStart();

        //insert peminjaman
        $this->PeminjamanBukuModel->insert([
            'peminjaman_id' => $peminjaman_id,
            'buku_id' => $buku_id,
        ]);

        //ambil data stok di table buku
        $buku = $this->BukuModel->where('id', $buku_id)->first();
        $stok_baru = $buku['stok'] - 1;
        
        //update stok buku
        $this->BukuModel->update($buku_id, [
            'stok' => $stok_baru,
        ]);
        
        $db->transComplete();

        return redirect()->to('peminjaman_buku/'.$peminjaman_id);
    }
}
