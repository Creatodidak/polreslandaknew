<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfigurasi;
use App\Models\Navigasi;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Pangkat;
use App\Models\Jabatan;
use App\Models\Satfung;
use App\Models\Satker;
use App\Models\Personil;
use Validator;

use Illuminate\Support\Facades\DB;
class Cregister extends Controller
{
    public function index(){
        $d['conf'] = Konfigurasi::all();
        $d['nav'] = Navigasi::all();
        $d['cat'] = Kategori::all();
        $d['pangkat'] = Pangkat::all();
        $d['satker'] = Satker::all();
        $d['fpolres'] = Satfung::where('satker', 'polres')->get();
        $d['fpolsek'] = Satfung::where('satker', 'polsek')->get();
        $d['fpolsubsektor'] = Satfung::where('satker', 'polsubsektor')->get();
        $d['jpolres'] = Jabatan::where('satker', 'polres')->get();
        $d['jpolsek'] = Jabatan::where('satker', 'polsek')->get();
        $d['jpolsubsektor'] = Jabatan::where('satker', 'polsubsektor')->get();
        //$d['berita'] = Berita::orderBy('id', 'desc')->get();
        $d['judul'] = 'REGISTER PERSONIL';
        return view('register', $d);
    }

    public function add(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'pangkat' => 'required',
            'nrp' => 'required',
            'tanggal' =>'required',
            'satker' =>'required',
            'satfung' => 'required',
            'jabatan' => 'required',
            'wa' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120'

        ]);
        if ($validator->fails()) {
            return response()->json(['msg' => 'Data Anda Tidak Valid! Periksa Kembali']);
        }else{
            if(Personil::where('nrp', $request->nrp)->count() == 0){
                $image = $request->file('file');
                $imageName = time().'.'.$image->extension();

                $destinationPath = public_path('/media/personil');
                $do = $image->move($destinationPath, $imageName);

                if($do){
                    $reg = Personil::create([
                        'nama' => strtoupper($request->nama),
                        'pangkat' => $request->pangkat,
                        'nrp' => $request->nrp,
                        'tanggal_lahir' => $request->tahun.'-'.$request->bulan.'-'.$request->tanggal,
                        'satker' => $request->satker,
                        'satfung' => $request->satfung,
                        'jabatan' => $request->jabatan,
                        'wa' => $request->wa,
                        'foto' => '/media/personil/'.$imageName
                    ]);

                    if($reg){
                        return response()->json(['msg' => 'ok']);
                    }else{
                        return response()->json(['msg' => 'Data Gagal Di Kirim!']);
                    }
                }else{
                    return response()->json(['msg' => 'Gambar Gagal Diupload, Register Gagal!']);
                }
            }else{
                return response()->json(['msg' => 'Anda sudah pernah mendaftar sebelumnya!']);
            }
        }
        

        return $reg;
    }
}
