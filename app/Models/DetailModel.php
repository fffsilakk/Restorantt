<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'detail';
    protected $primaryKey       = 'id_detail';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['jumlah_pemesanan', 'total'];
}
