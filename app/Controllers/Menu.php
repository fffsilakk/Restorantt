<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class Menu extends BaseController
{
    protected $menu;

    public function __construct()
    {
        $this->menu = new MenuModel();
    }

    public function index()
    {
        $data['menu'] = $this->menu->findAll();

        return view('menu', $data);
    }

    function tambah()
    {
        $data = $this->request->getPost();
        if(isset($data["tambah_menu"])){
            $this->menu->insert($data);
            return redirect()->to(base_url('menu'));
        }else return view('tambah_menu');
    }
    
    function hapus($id_menu = null)
    {
        try {
            $this->menu->delete($id_menu);
            return redirect()->to(base_url('menu'));
        } catch (\Throwable $th) {
            return redirect()->to(base_url('menu'));
        }
    }
    
    function ubah($id=null)
    {
        $item = $this->request->getpost();
        if(isset($item['update'])){
            $this->menu->update($id, $item);
            return redirect()->to(base_url('menu'));
    }else{
        $item['menu'] = $this->menu->where('id_menu', $id)->first();
        return view('ubah_menu', $item);
    }
}
}