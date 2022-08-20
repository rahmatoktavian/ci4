<?php
namespace App\Controllers;

//memanggil model
use App\Models\KategoriModel;

class Kategori extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->KategoriModel = new KategoriModel();
    }

    public function list()
    {
        //select data from table kategori
        $list = $this->KategoriModel->select('id, nama')->orderBy('nama')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('kategori_list', $output);
    }

    public function insert()
    {
        return view('kategori_insert');
    }

    public function insert_save()
    {
        $nama = $this->request->getVar('nama');

        //insert data ke table kategori
        $this->KategoriModel->insert([
            'nama' => $nama,
        ]);

        return redirect()->to('kategori');
    }

    public function update($id)
    {
        //select data kategori yang dipilih (filter by id)
        $data =  $this->KategoriModel->where('id', $id)->first();
        
        $output = [
            'data' => $data,
        ];

        return view('kategori_update', $output);
    }

    public function update_save($id)
    {
        $nama = $this->request->getVar('nama');

        //update data ke table kategori filter by id
        $this->KategoriModel->update($id, [
            'nama' => $nama,
        ]);

        return redirect()->to('kategori/');
    }

    public function delete($id)
    {   
        //delete data table kategori filter by id
        $this->KategoriModel->delete($id);
        return redirect()->to('kategori');
    }
}
