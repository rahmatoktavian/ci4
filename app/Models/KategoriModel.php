<?php
namespace App\Models;
use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori_buku';
    protected $allowedFields = ['nama'];
}
