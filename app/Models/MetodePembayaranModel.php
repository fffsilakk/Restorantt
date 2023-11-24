<?php

namespace App\Models;

use CodeIgniter\Model;

class MetodePembayaranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'metode_pembayaran';
    protected $primaryKey       = 'id_pembayaran';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tanggal_pembayaran', 'jumlah_pembayaran', 'pembayaran'];
}
