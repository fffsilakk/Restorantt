<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MetodePembayaranModel;
use App\Models\PemesananModel;

class Metode_pembayaran extends BaseController
{

    protected $metode_pembayaran;
    protected $pemesanan;

    public function __construct()
    {
        $this->metode_pembayaran = new MetodePembayaranModel();
        $this->pemesanan = new PemesananModel();
    }

    public function index()
    {
        $data['metode_pembayaran'] = $this->metode_pembayaran->findAll();

        return view('metode_pembayaran', $data);
    }

    function tambah()
    {
        $data = $this->request->getPost();
        if(isset($data["tambah_metode_pembayaran"])){
            $this->metode_pembayaran->insert($data);
            return redirect()->to(base_url('metode_pembayaran'));
        }else return view('tambah_metode_pembayaran');
    }

    function delete($id_pembayaran = null)
    {
        try {
            $this->metode_pembayaran->delete($id_pembayaran);
            return redirect()->to(base_url('metode_pembayaran'));
        } catch (\Throwable $th) {
            return redirect()->to(base_url('metode_pembayaran'));
        }
    }
    
    function edit($id=null)
    {
        $item = $this->request->getpost();
        if(isset($item['update'])){
            $this->metode_pembayaran->update($id, $item);
            return redirect()->to(base_url('metode_pembayaran'));
    }else{
        $item['metode_pembayaran'] = $this->metode_pembayaran->where('id_pembayaran', $id)->first();
        return view('ubah_metode_pembayaran', $item);
    }
}
}
