<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfigurasi;
use App\Models\Navigasi;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Anggaran;

use Illuminate\Support\Facades\DB;



class Czonaintegritas extends Controller
{
    public function index(){
        $d['conf'] = Konfigurasi::all();
        $d['nav'] = Navigasi::all();
        $d['anggaran'] = Anggaran::all();
        $d['pagu'] = Anggaran::sum('pagu');
        $d['jan'] = Anggaran::sum('jan');
        $d['feb'] = Anggaran::sum('feb');
        $d['mar'] = Anggaran::sum('mar');
        $d['apr'] = Anggaran::sum('apr');
        $d['mei'] = Anggaran::sum('mei');
        $d['jun'] = Anggaran::sum('jun');
        $d['jul'] = Anggaran::sum('jul');
        $d['agu'] = Anggaran::sum('agu');
        $d['sep'] = Anggaran::sum('sep');
        $d['okt'] = Anggaran::sum('okt');
        $d['nov'] = Anggaran::sum('nov');
        $d['des'] = Anggaran::sum('des');
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
        $d['judul'] = 'ZONA INTEGRITAS';
        return view('zonaintegritas', $d);
    }
}
