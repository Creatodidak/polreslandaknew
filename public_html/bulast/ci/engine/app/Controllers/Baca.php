<?php
DECLARE(STRICT_TYPES=1);
namespace App\Controllers;
use App\Models\Mkonfigurasi;
use App\Models\Mlayout;
use App\Models\Mnavigasi;
use App\Models\Msubnavigasi;
use App\Models\Mberita;

class Baca extends BaseController
{
    public function index($link)
    {
        $conf = new Mkonfigurasi();
        $layout = new Mlayout();
        $nav = new Mnavigasi();
        $subnav = new Msubnavigasi();
        $news = new Mberita();

        $d['navigasi'] = $nav->findAll();
        $d['data'] = $conf->findAll();

        foreach($layout->where('status', 'active')->findAll() as $da){
            if($da->data == 'layout/dark'){
                $d['layout'] = 'layout/berita-dark';
            }
        }

        $d['berita'] = $news->where('link', $link)->findAll();
        
        return view('beranda/bacaberita', $d);
    }

    public function baca($link)
    {
        $conf = new Mkonfigurasi();
        $layout = new Mlayout();
        $nav = new Mnavigasi();
        $subnav = new Msubnavigasi();
        $news = new Mberita();

        $d['navigasi'] = $nav->findAll();
        $d['data'] = $conf->findAll();

        foreach($layout->where('status', 'active')->findAll() as $da){
            if($da->data == 'layout/dark'){
                $d['layout'] = 'layout/berita-dark';
            }
        }

        $d['berita'] = $news->where('link', $link)->findAll();
        
        return view('beranda/bacaberita', $d);
    }
}
