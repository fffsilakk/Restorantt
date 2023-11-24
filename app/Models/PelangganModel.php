<?php
namespace App\Models;
use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pelanggan';
    protected $primaryKey       = 'id_pelanggan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_pelanggan', 'no_telepon', 'alamat_pelanggan'];
}