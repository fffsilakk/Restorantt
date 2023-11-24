<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PemesananModel;
use App\Models\PelangganModel;
use App\Models\MetodePembayaranModel;


class Pemesanan extends BaseController
{

    protected $pemesanan;
    protected $pelanggan;
    protected $metode_pembayaran;

    public function __construct()
    {
        $this->pemesanan = new PemesananModel();
        $this->pelanggan = new PelangganModel();
        $this->metode_pembayaran = new MetodePembayaranModel();
    }

    public function index()
    {
        $data['pemesanan'] = $this->pemesanan->findAll();

        return view('pemesanan', $data);
    }

    function tambah()
    {
        $data = $this->request->getPost();
        if(isset($data["tambah_pemesanan"])){
            $this->pemesanan->insert($data);
            return redirect()->to(base_url('pemesanan'));
        }else return view('tambah_pemesanan');
    }
    
}

