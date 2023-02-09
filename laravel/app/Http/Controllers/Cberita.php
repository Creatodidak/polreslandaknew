<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;
use App\Models\Konfigurasi;
use App\Models\Navigasi;
use App\Models\Komentar;
use Carbon\Carbon;
class Cberita extends Controller
{
    public function index($link){
        $d['judul'] = $link;
        $d['conf'] = Konfigurasi::all();
        $d['nav'] = Navigasi::all();
        $d['data'] = Berita::where('link', $link)
                            ->join('personils', 'beritas.publisher', '=', 'personils.nrp')
                            ->select('beritas.*', 'personils.foto as publisherfoto', 'personils.nama as namapublisher')
                            ->orderby('id', 'desc')
                            ->get();
        $d['other'] = Berita::where('link', '!=', $link)->limit(3)->orderby('id', 'DESC')->get();
        $d['komentar'] = Komentar::where('post', $link)->orderby('id', 'DESC');


        if(Berita::where('link', $link)->count() != 0){
            return view('berita', $d);
        }else{
            return abort(404);
        }
    }

    public function kategori($link){
        $berita = Berita::where('kategori', strtoupper($link))->limit(15)->orderby('id', 'DESC');
        return $berita->get();
    }

    public function komentar($link, Request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:3|max:255',
            'komentar' => 'required',
        ]);
        if ($validator->fails()) {
            return abort(403);
        }else{
            $komentar = Komentar::create([
                'nama'     => $request->nama,
                'komentar'     => $request->komentar,
                'post'   => $link
            ]);

            if($komentar){
                return redirect('berita/'.$link.'#komentarsec')->with(['success' => 'Komentar Berhasil!']);
            }else{
                return redirect('berita/'.$link.'#komentarsec')->with(['error' => 'Komentar Gagal!']);
            }
        }

        $berita = Berita::where('kategori', strtoupper($link))->limit(15)->orderby('id', 'DESC');
        return $berita->get();
    }

    public function more($limit){

        $data = DB::table('beritas')
                            ->join('personils', 'beritas.publisher', '=', 'personils.nrp')
                            ->select('beritas.*', 'personils.foto as publisherfoto', 'personils.nama as namapublisher')
                            ->orderby('id', 'desc')
                            ->offset($limit)
                            ->limit(9)
                            ->get();
                            return $data;
    }
}