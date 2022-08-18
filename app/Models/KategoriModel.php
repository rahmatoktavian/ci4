<?php
namespace App\Models;
use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $allowedFields = ['nama'];
}
