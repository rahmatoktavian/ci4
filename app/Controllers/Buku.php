<?php
namespace App\Controllers;

//memanggil model
use App\Models\BukuModel;
use App\Models\KategoriModel;

class Buku extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->BukuModel = new BukuModel();
        $this->KategoriModel = new KategoriModel();
    }

    public function list()
    {
        //select data from table buku
        $list = $this->BukuModel->select('buku.id, buku.judul, kategori.nama AS kategori_nama')->join('kategori','buku.kategori_id = kategori.id')->orderBy('kategori.nama, judul')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('buku_list', $output);
    }

    public function insert()
    {
        //select data from table kategori (untuk data di selectbox/dropdown)
        $data_kategori = $this->KategoriModel->orderBy('nama')->findAll();

        $output = [
            'data_kategori' => $data_kategori,
        ];

        return view('buku_insert', $output);
    }

    public function insert_save()
    {
        $kategori_id = $this->request->getVar('kategori_id');
        $judul = $this->request->getVar('judul');

        //insert data ke table buku
        $this->BukuModel->insert([
            'kategori_id' => $kategori_id,
            'judul' => $judul,
        ]);

        return redirect()->to('buku');
    }

    public function update($id)
    {
        //select data kategori yang dipilih (filter by id)
        $data =  $this->BukuModel->where('id', $id)->first();
        
        //select data from table kategori (untuk data di selectbox/dropdown)
        $data_kategori = $this->KategoriModel->orderBy('nama')->findAll();

        $output = [
            'data' => $data,
            'data_kategori' => $data_kategori,
        ];

        return view('buku_update', $output);
    }

    public function update_save($id)
    {
        $kategori_id = $this->request->getVar('kategori_id');
        $judul = $this->request->getVar('judul');

        //update data ke table buku filter by id
        $this->BukuModel->update($id, [
            'kategori_id' => $kategori_id,
            'judul' => $judul,
        ]);

        return redirect()->to('buku/');
    }

    public function delete($id)
    {   
        //delete data table buku filter by id
        $this->BukuModel->delete($id);
        return redirect()->to('buku');
    }
}
