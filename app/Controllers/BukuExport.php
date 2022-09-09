<?php
namespace App\Controllers;

//memanggil model
use App\Models\BukuModel;
use App\Models\KategoriModel;

//memanggil package excel
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class BukuExport extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->BukuModel = new BukuModel();
        $this->KategoriModel = new KategoriModel();
    }

    function export()
    {
        //select data from table buku
        $list = $this->BukuModel->select('buku.id, buku.judul, kategori.nama AS kategori_nama')->join('kategori','buku.kategori_id = kategori.id')->orderBy('kategori.nama, judul')->findAll();

        //filename
        $fileName = 'buku_export.xlsx';

        //start package excel
        $spreadsheet = new Spreadsheet();

        //header
        $sheet = $spreadsheet->getActiveSheet();
        //(A1 : lokasi line & column excel, No : display data)
        $sheet->setCellValue('A1', 'No')->getColumnDimension('A')->setAutoSize(true);
        $sheet->setCellValue('B1', 'Judul')->getColumnDimension('B')->setAutoSize(true);
        $sheet->setCellValue('C1', 'Kategori')->getColumnDimension('C')->setAutoSize(true);

        //body
        $line = 2;
        foreach ($list as $row) {
            $sheet->setCellValue('A'.$line, $line-1);
            $sheet->setCellValue('B'.$line, $row['kategori_nama']);
            $sheet->setCellValue('C'.$line, $row['judul']);
            $line++;
        }

        header("Content-Type: application/vnd.ms-excel");
        header('Content-Disposition: attachment; filename="' . urlencode($fileName) . '"');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
