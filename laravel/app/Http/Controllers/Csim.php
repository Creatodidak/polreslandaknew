<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfigurasi;
use App\Models\Navigasi;
use App\Models\Berita;
use App\Models\Kategori;

use Illuminate\Support\Facades\DB;



class Csim extends Controller
{
    public function index(){
        $d['conf'] = Konfigurasi::all();
        $d['nav'] = Navigasi::all();
        $d['cat'] = Kategori::all();
        $d['berita'] = DB::table('beritas')
                            ->join('personils', 'beritas.publisher', '=', 'personils.nrp')
                            ->select('beritas.*', 'personils.foto as publisherfoto', 'personils.nama as namapublisher')
                            ->orderby('id', 'DESC')
                            ->limit('9')
                            ->get();
        $d['beritahumas'] = DB::table('beritas')
                            ->where('beritas.satker', 'POLRES LANDAK')
                            ->where('beritas.kategori', 'PIMPINAN')
                            ->join('personils', 'beritas.publisher', '=', 'personils.nrp')
                            ->select('beritas.*', 'personils.foto as publisherfoto', 'personils.nama as namapublisher')
                            ->orderby('id', 'DESC')
                            ->limit('3')
                            ->get();
        //$d['berita'] = Berita::orderBy('id', 'desc')->get();
        $d['judul'] = 'INFORMASI PELAYANAN';
        return view('sim', $d);
    }
}
