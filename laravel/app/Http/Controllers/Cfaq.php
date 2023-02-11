<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfigurasi;
use App\Models\Navigasi;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Faqadmin;
use App\Models\Faq;
use Validator;

use Illuminate\Support\Facades\DB;



class Cfaq extends Controller
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
        $d['judul'] = 'FREQUENTLY ASKED QUESTION';
        return view('faq', $d);
    }

    public function admin(){
        return view('faqadmin');
    }

    public function validasi($nrp = null, $pelayanan = null){
        $cek = Faqadmin::where('nrp', $nrp)->where('pelayanan', $pelayanan)->count();
        if($cek > 0){
            return response()->json(['msg' => 'ok']);
        }else{
            return response()->json(['msg' => 'no']);
        };
    }

    public function data($pelayanan = null){
        $cek = Faq::where('pelayanan', $pelayanan)->get();
        return response()->json($cek);
    }

    public function add(Request $req){
        
        $validator = Validator::make($req->all(), [
            'pertanyaan' => 'required|min:8',
            'jawaban' => 'required|min:8',
            'pelayanan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => 'no']);
        }else{
            $add = Faq::create(['pertanyaan' => $req->pertanyaan,
                                'jawaban' => nl2br($req->jawaban),
                                'pelayanan' => $req->pelayanan
                               ]);
            
            if($add){return response()->json(['msg' => 'ok']);}else{return response()->json(['msg' => 'no']);}
        }
    }

    public function del($id){
        if(Faq::where('id', $id)->count() != 0){
            if(Faq::where('id', $id)->delete()){
                return response()->json(['msg' => 'ok']);
            }else{
                return response()->json(['msg' => 'no']);
            }
        }else {
            return response()->json(['msg' => 'no']);
        }
    }
}
