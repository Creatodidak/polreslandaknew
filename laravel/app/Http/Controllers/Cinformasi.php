<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfigurasi;
use App\Models\Navigasi;
use App\Models\Berita;
use App\Models\Kategori;

use Illuminate\Support\Facades\DB;



class Cinformasi extends Controller
{
    public function sim(){
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
        $d['judul'] = 'INFORMASI PELAYANAN SIM';
        return view('sim', $d);
    }

    public function skck(){
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
        $d['judul'] = 'INFORMASI PELAYANAN SKCK';
        return view('skck', $d);
    }

    public function identifikasi(){
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
        $d['judul'] = 'INFORMASI PELAYANAN IDENTIFIKASI SIDIK JARI';
        return view('sidikjari', $d);
    }

    public function spkt(){
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
        $d['judul'] = 'INFORMASI SENTRA PELAYANAN KEPOLISIAN TERPADU';
        return view('spkt', $d);
    }
}
