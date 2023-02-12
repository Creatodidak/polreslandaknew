<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Konfigurasi;
use App\Models\Navigasi;
use App\Models\Kategori;
use App\Models\Epustaka;
use App\Models\Epustakaadmin;
use App\Models\Satfung;
use App\Models\Satker;
use App\Models\Anggaran;
use Illuminate\Support\Facades\File;

use Validator;

use Illuminate\Support\Facades\DB;

class Cepustaka extends Controller
{

    public function index(){
        $d['conf'] = Konfigurasi::all();
        $d['nav'] = Navigasi::all();
        $d['judul'] = 'E-Pustaka Polres Landak'; 
        $d['satker'] = Satker::all();
        $d['fpolres'] = Satfung::where('satker', 'polres')->get();
        $d['fpolsek'] = Satfung::where('satker', 'polsek')->get();
        $d['fpolsubsektor'] = Satfung::where('satker', 'polsubsektor')->get();
        return view('epustaka/index', $d);
    }

    public function login(){
        $d['satker'] = Satker::all();
        $d['fpolres'] = Satfung::where('satker', 'polres')->get();
        $d['fpolsek'] = Satfung::where('satker', 'polsek')->get();
        $d['fpolsubsektor'] = Satfung::where('satker', 'polsubsektor')->get();
        return view('epustaka/login', $d);
    }

    public function dashboard(){
        if(session()->get('satker') == null){return redirect('/epustaka/login')->with(['error' => 'Anda Harus Login Terlebih Dahulu!']);}else{
        $d['data'] = Epustaka::where('satker', session()->get('satker'))->where('satfung', session()->get('satfung'))->get();
        $d['judul'] = 'FREQUENTLY ASKED QUESTION';
        return view('epustaka/dashboard', $d);}
    }

    public function validasi(Request $req){
        $validator = Validator::make($req->all(), [
            'satker' => 'required',
            'satfung' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/epustaka/login')->with(['error' => 'Data Tidak Lengkap!']);
        }else{
            $cek = Epustakaadmin::where('satker', $req->satker)->where('satfung', $req->satfung)->where('password', $req->password);

            if($cek->count() != 0){
                session(['satker' => $req->satker, 'satfung' => $req->satfung]);
                return redirect('epustaka/dashboard');
            }else{
                return redirect('/epustaka/login')->with(['error' => 'Password Salah!']);
            }
        }
    }

    public function add(Request $req){
        $validator = Validator::make($req->all(), [
            'jenis' => 'required',
            'nomor' => 'required',
            'tentang' => 'required',
            'tanggal' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()]);
        }else{
            $validasi = 'https://reslandak.kalbar.polri.go.id/epustaka/val/'.md5(md5($req->nomor).md5($req->tentang));
            $qr = QrCode::size(150)->format('svg')->generate($validasi, 'media/qrcodes/'.md5(md5($req->nomor).md5($req->tentang)).'.svg'); 
            if(!$qr){
                $ins = Epustaka::create(['nomor' => $req->nomor,
                                     'type' => $req->jenis,
                                     'tentang' => $req->tentang,
                                     'satker' => session()->get('satker'),
                                     'satfung' => session()->get('satfung'),
                                     'tanggal' => $req->tanggal.' '.$req->bulan.' '.$req->tahun,
                                     'validasi' => md5(md5($req->nomor).md5($req->tentang)),
                                     'uploader' => $req->ip(),
                                     'qrfile' => '/media/qrcodes/'.md5(md5($req->nomor).md5($req->tentang)).'.svg'
                ]);

                if($ins){
                    return response()->json(['qr' => '/media/qrcodes/'.md5(md5($req->nomor).md5($req->tentang)).'.svg']);
                }else{
                    return response()->json(['msg' => 'Gagal Input Data!']);
                }
            }else{
                return response()->json(['msg' => 'Gagal membuat QR!']);
            }
        }
    }

    public function del($id = null){
        foreach(Epustaka::where('id', $id)->get() as $b){
            $file = $b->file;
            $qrfile = $b->qrfile;
        }
        if (File::exists(substr($file, 1))) {

            if(File::delete(substr($file, 1))){
                $del = Epustaka::where('id', $id)->delete();
                File::delete(substr($qrfile, 1));
                if($del){
                    return response()->json(['msg' => 'ok']);
                }else{
                    return response()->json(['msg' => 'Gagal Menghapus File QR '.substr($fileqr, 1)]);
                }
            }else{
                return response()->json(['msg' => 'Gagal Menghapus File '.substr($file, 1)]);
            }
        }else{
            return response()->json(['msg' => substr($file, 1).' Tidaks Ditemukan']);
        }
    }

    public function addfile(Request $req){
        $validator = Validator::make($req->all(), [
            'file' => 'required|mimes:pdf',
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()]);
        }else{
            $cek = Epustaka::where('qrfile', $req->id)->count();

            if($cek != 0){
                $image = $req->file('file');
                $imageName = str_replace(array('/media/qrcodes/', '.svg'), '', $req->id).'.'.$image->extension();
                $destinationPath = public_path('/media/epustaka/file');
                $do = $image->move($destinationPath, $imageName);

                if($do){
                    $upd = Epustaka::where('qrfile', $req->id)->update(['file' => '/media/epustaka/file/'.$imageName]);

                    if($upd){
                        return response()->json(['msg' => 'ok']);
                    }else{
                        return response()->json(['msg' => 'Database Gagal Diupdate!']);
                    }
                }else{
                    return response()->json(['msg' => 'File Gagal Diupload!']);
                }
            }else{
                return response()->json(['msg' => 'Data Tidak Ditemukan!']);
            }
        }
    }

    public function logout(Request $req){
        $req->session()->flush();
        return redirect('epustaka/login');
    }

    public function search(Request $req){
        return response()->json(Epustaka::where('satker', $req->satker)->where('satfung', $req->satfung)->get());
    }

    public function val($kode){
        $data['data'] = Epustaka::where('validasi', $kode)->get();
        return view('epustaka/validasi', $data);
    }
}
