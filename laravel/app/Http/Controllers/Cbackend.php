<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Konfigurasi;
use App\Models\Navigasi;
use App\Models\Berita;
use App\Models\Personil;
use App\Models\Kategori;
use App\Models\Backend;
use Carbon\Carbon;
use Validator;
use Image;
use Illuminate\Support\Facades\File;
use Response;
use Illuminate\Support\Facades\DB;


class Cbackend extends Controller
{
    public function index(){
        return view('login');
    }

    public function getotp(Request $request){
        $validator = Validator::make($request->all(), [
            'nrp' => 'required|min:8|max:8',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/login')->with(['error' => 'NRP / PASSWORD SALAH!']);
        }else{
            if(Backend::where('nrp', $request->nrp)->count() != 0){
                if(Backend::where('nrp', $request->nrp)->where('password', md5($request->password))->count() != 0){
                    foreach(Personil::where('nrp', $request->nrp)->get() as $l){
                                                                        session(['nama' => $l->nama,
                                                                                'nrp' => $l->nrp,
                                                                                'pangkat' => $l->pangkat,
                                                                                'satker' => $l->satker,
                                                                                'satfung' => $l->satfung,
                                                                                'foto' => $l->foto]);
                    }
                    return redirect('/backend/dashboard');
                }else{
                    return redirect('/login')->with(['error' => 'PASSWORD SALAH!']);
                }
            }else{
                return redirect('/login')->with(['error' => 'NRP TIDAK DITEMUKAN!']);
            }
        }
    }

    public function cekotp(Request $request){
        $nrp = $request->session()->get('nrp');
        $otp = $request->otp;

        $lotp = Backend::select('otp')->where('nrp', $nrp)->get()['0']->otp;

        if($lotp == $otp){
            
        }else{
            return redirect('/login')->with(['error' => 'OTP SALAH!']);
        }
        
    }

    public function dashboard(Request $request){
        if($request->session()->get('satker') == null){
            return redirect('/login')->with(['error' => 'Anda Harus Login Terlebih Dahulu!']);
        }
        return view('dashboard/dashboard');
    }

    public function berita(Request $request){
        if($request->session()->get('satker') == null){
            return redirect('/login')->with(['error' => 'Anda Harus Login Terlebih Dahulu!']);
        }
        $d['list'] = Berita::where('satker', $request->session()->get('satker'))->orderby('id', 'desc')->get();
        return view('dashboard/berita', $d);
    }

    public function formberita(Request $request){
        if($request->session()->get('satker') == null){
            return redirect('/login')->with(['error' => 'Anda Harus Login Terlebih Dahulu!']);
        }
        $d['kategori'] = Kategori::All();
        return view('dashboard/formberita', $d);
    }

    public function delberita($id){
        foreach(Berita::where('id', $id)->get() as $b){
            $thumb = $b->thumb;
            $foto = $b->foto;
        }
        if (File::exists(substr($foto, 1))) {

            if(File::delete(substr($foto, 1))){
                $del = Berita::where('id', $id)->delete();
                File::delete(substr($thumb, 1));
                if($del){
                    return redirect('/backend/listberita')->with(['delmsg'=>'ok']);
                }else{
                    return abort(403);
                }
            }else{
                return 'Gagal Menghapus File'.$foto;
            }
        }else{
            return 'File '.substr($foto, 1).' Tidak Ada';
        }
    }

    public function addberita(Request $request){
        $validator = Validator::make($request->all(), [
            'judul' => 'required|min:8',
            'penulis' => 'required|min:3',
            'isi' => 'required|min:8',
            'kategori' => 'required|min:8',
            'caption' => 'required|min:8',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()){
            return response()->json(['msg' => $validator->errors()]);
        }else{
            if(Berita::where('judul', $request->judul)->count() == 0){
                $image = $request->file('file');
                $imageName = time().'.'.$image->extension();
            
                $destinationPathThumbnail = public_path('/media/berita/thumbnail');
                $img = Image::make($image->path());
                $img->resize(150, 150, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPathThumbnail.'/'.$imageName);
            
                $destinationPath = public_path('/media/berita');
                $do = $image->move($destinationPath, $imageName);

                if($do){
                    $ins = Berita::create([
                        'judul' => str_replace('*', '', strtoupper($request->judul)),
                        'link' =>  str_replace(' ', '-',strtolower(str_replace( array( '\'', '"', ',' , ';', '<', '>' ), '', $request->judul))),
                        'penulis' => $request->penulis,
                        'isi' => nl2br($request->isi),
                        'kategori' => $request->kategori,
                        'caption' => $request->caption,
                        'foto' => '/media/berita/'.$imageName,
                        'thumb' => '/media/berita/thumbnail/'.$imageName,
                        'publisher' => $request->session()->get('nrp'),
                        'satker' =>  $request->session()->get('satker'),
                        'view' => '0',
                        'create_at' => date('Y-m-d H:i:s')
                    ]);

                    if($ins){
                        // return redirect('/backend/inputberita')->with(['addok' => 'OK']);
                        return response()->json(['msg' => 'ok']);
                    }else{
                        // return redirect('/backend/inputberita')->with(['addno' => 'GAGAL INPUT BERITA DI DATABASE! HUBUNGI ADMIN!']);    
                        return response()->json(['msg' => 'GAGAL INPUT BERITA DI DATABASE, HUBUNGI ADMIN!']);
                    }
                }else{
                    // return redirect('/backend/inputberita')->with(['addno' => 'GAGAL INPUT BERITA KARENA GAMBAR TIDAK DAPAT DIUPLOAD']);
                    return response()->json(['msg' => 'GAMBAR GAGAL DI UPLOAD!']);
                }
            }else{
                // return redirect('/backend/inputberita')->with(['addno' => 'BERITA INI SUDAH ANDA UPLOAD SEBELUMNYA!']);
                return response()->json(['msg' => 'BERITA SUDAH PERNAH DIINPUT!']);
            }
        }
   
        
    }

}