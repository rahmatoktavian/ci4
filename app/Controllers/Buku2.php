<?php
namespace App\Controllers;

//memanggil model
use App\Models\BukuModel;
use App\Models\KategoriModel;

use CodeIgniter\Files\File;

class Buku2 extends BaseController
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
        $list = $this->BukuModel->select('buku.id, buku.judul, buku.cover, kategori.nama AS kategori_nama')->join('kategori','buku.kategori_id = kategori.id')->orderBy('kategori.nama, judul')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('buku_list2', $output);
    }

    public function insert()
    {
        //select data from table kategori (untuk data di selectbox/dropdown)
        $data_kategori = $this->KategoriModel->orderBy('nama')->findAll();

        $output = [
            'data_kategori' => $data_kategori,
        ];

        return view('buku_insert2', $output);
    }

    public function insert_save()
    {
        //set validation rule
        $validationRule = [
            'judul' => 'required',
        ];
        
        //if validation failed
        if(!$this->validate($validationRule)) {
            return redirect()->back()->with('validation', $this->validator);

        //validation success
        } else {
            $kategori_id = $this->request->getVar('kategori_id');
            $judul = $this->request->getVar('judul');

            //insert data ke table buku
            $this->BukuModel->insert([
                'kategori_id' => $kategori_id,
                'judul' => $judul,
            ]);

            return redirect()->to('buku2');
        }
    }

    public function upload($id)
    {
        //select data kategori yang dipilih (filter by id)
        $data =  $this->BukuModel->where('id', $id)->first();
    
        $output = [
            'data' => $data,
        ];

        return view('buku_upload', $output);
    }

    public function upload_save($id)
    {
        $validationRule = [
            'cover' => 'uploaded[cover]|max_size[cover,10]|ext_in[cover,jpg,jpeg,png],'
        ];

        //if validation failed
        if(!$this->validate($validationRule)) {
            echo $this->validator->showError('cover');
            //return redirect()->back()->withInput()->with('validation', $this->validator);

        //validation success
        } else {

            $image = $this->request->getFile('cover');
            if (!$image->hasMoved()) {
                // Get random file name
                $cover = $image->getRandomName(); 

                // Store file in public/upload/ folder
                $image->move('../public/upload', $cover);

                //update data ke table buku filter by id
                $this->BukuModel->update($id, [
                    'cover' => $cover,
                ]);

                return redirect()->to('buku2');
            }
        }
    }
}
