<?php

namespace App\Controllers;
use App\Models\Mkonfigurasi;
use App\Models\Mlayout;
use App\Models\Mnavigasi;
use App\Models\Msubnavigasi;
use App\Models\Mberita;
use App\Models\Mkategori;
use App\Models\Msatkerberita;

class Home extends BaseController
{
    public function index()
    {
        $conf = new Mkonfigurasi();
        $layout = new Mlayout();
        $nav = new Mnavigasi();
        $subnav = new Msubnavigasi();
        $kategori = new Mkategori();
        $satker = new Msatkerberita();

        $d['navigasi'] = $nav->findAll();
        $d['data'] = $conf->findAll();
        $d['satker'] = $satker->findAll();
        $d['kategori'] =$kategori->findAll();
        $d['judul'] = 'BERANDA';

        foreach($layout->where('status', 'active')->findAll() as $da){
            $d['layout'] = $da->data;
        }
        
        return view('beranda/home', $d);
    }
}
