<?php
namespace App\Models;
use CodeIgniter\Model;

class PeminjamanBukuModel extends Model
{
    protected $table = 'peminjaman_buku';
    protected $allowedFields = ['peminjaman_id', 'buku_id'];
}
