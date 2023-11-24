<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelangganModel;
use App\Models\PemesananModel;

class Pelanggan extends BaseController
{
    protected $pelanggan;
    protected $pemesanan;

    public function __construct()
    {
        $this->pelanggan = new PelangganModel();
        $this->pemesanan = new PemesananModel();
    }

    public function index()
    {
        $data['pelanggan'] = $this->pelanggan->findAll();

        return view('pelanggan', $data);
    }

    function tambah()
    {
        $data = $this->request->getPost();
        if (isset($data["tambah_pelanggan"])) {
            $this->pelanggan->insert($data);
            return redirect()->to(base_url('pelanggan'));
        } else return view('tambah_pelanggan');
    }

    function hapus($id_pelanggan = null)
    {
        try {
            $this->pelanggan->delete($id_pelanggan);
            return redirect()->to(base_url('pelanggan'));
        } catch (\Throwable $th) {
            return redirect()->to(base_url('pelanggan'));
        }
    }

    function ubahh($id = null)
    {
        $item = $this->request->getpost();
        if (isset($item['update'])) {
            $this->pelanggan->update($id, $item);
            return redirect()->to(base_url('pelanggan'));
        } else {
            $item['pelanggan'] = $this->pelanggan->where('id_pelanggan', $id)->first();
            return view('ubah_pelanggan', $item);
        }
    }
}
