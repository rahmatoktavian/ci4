<?php
namespace App\Models;
use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = 'peminjaman';
    protected $allowedFields = ['nama', 'tanggal', 'petugas_id'];
}
