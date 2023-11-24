<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetailModel;

class Detail extends BaseController
{
    protected $detail;

    public function __construct()
    {
        $this->detail = new DetailModel();
    }

    public function index()
    {
        $data['detail'] = $this->detail->findAll();

        return view('detail', $data);
    }

    function tambah()
    {
        $data = $this->request->getPost();
        if(isset($data["tambah_detail"])){
            $this->detail->insert($data);
            return redirect()->to(base_url('detail'));
        }else return view('tambah_detail');
    }
    
    function hapus($id_detail = null)
    {
        try {
            $this->detail->delete($id_detail);
            return redirect()->to(base_url('detail'));
        } catch (\Throwable $th) {
            return redirect()->to(base_url('detail'));
        }
    }
    
    function ubah($id=null)
    {
        $item = $this->request->getpost();
        if(isset($item['update'])){
            $this->detail->update($id, $item);
            return redirect()->to(base_url('detail'));
    }else{
        $item['detail'] = $this->detail->where('id_detail', $id)->first();
        return view('ubah_detail', $item);
    }
}
}