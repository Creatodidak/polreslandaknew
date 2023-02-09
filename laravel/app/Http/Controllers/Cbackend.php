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
        ]);

        if ($validator->fails()) {
            return redirect('/login')->with(['error' => 'NRP SALAH!']);
        }else{
            $login = Backend::where('nrp', $request->nrp);
            $otp = rand(123456, 999999);
            if($login->count() != 0){
               $upd =  $login->update(['expires_at' => Carbon::now()->addMinutes(60), 'otp' => $otp]);

               if($upd){
                foreach(Personil::where('nrp', $request->nrp)->get() as $p){
                    $wa = $p->wa;
                }
                $data = [
                    'api_key' => '9u5OizNhKkJCr37qLH6VoKmxqu00wR',
                    'sender' => '628115664145',
                    'number' => $wa,
                    'message' => '-
                    *POLRES LANDAK PRESISI*
                    
                    KODE OTP ANDA ADALAH [ *'.$otp.'* ]
                    
                    KODE INI HANYA BERLAKU SELAMA 60 MENIT, *TETAP SEMANGAT!*'
                ];
                $curl = curl_init();
                
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'https://server.wa-bisnis.com/send-message',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => json_encode($data),
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                  ),
                ));
                
                $response = curl_exec($curl);
                
                curl_close($curl);
                
                session(['otp' => $otp, 'nrp' => $request->nrp, 'wa' => $wa]);

                if($response){
                    return view('validasi');
                }
               }else{
                return redirect('/login')->with(['error' => 'GAGAL LOGIN, COBA LAGI!']);
               }
            }else{
                return redirect('/login')->with(['error' => 'NRP SALAH!']);
            }
            
        }
    }

    public function cekotp(Request $request){
        $nrp = $request->session()->get('nrp');
        $otp = $request->otp;

        $lotp = Backend::select('otp')->where('nrp', $nrp)->get()['0']->otp;

        if($lotp == $otp){
            foreach(Personil::where('nrp', $nrp)->get() as $l){
                    session(['nama' => $l->nama,
                             'nrp' => $l->nrp,
                             'pangkat' => $l->pangkat,
                             'satker' => $l->satker,
                             'satfung' => $l->satfung,
                             'foto' => $l->foto
            ]);
                }
            return redirect('/backend/dashboard');
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
            'penulis' => 'required|min:8',
            'isi' => 'required|min:8',
            'kategori' => 'required|min:8',
            'caption' => 'required|min:8',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()){
            return redirect('/backend/inputberita')->with(['addno' => 'GAGAL INPUT BERITA, PERIKSA ISI BERITA ANDA!']);
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
                        'isi' => $request->isi,
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
                        return redirect('/backend/inputberita')->with(['addok' => 'OK']);
                    }else{
                        return redirect('/backend/inputberita')->with(['addno' => 'GAGAL INPUT BERITA DI DATABASE! HUBUNGI ADMIN!']);    
                    }
                }else{
                    return redirect('/backend/inputberita')->with(['addno' => 'GAGAL INPUT BERITA KARENA GAMBAR TIDAK DAPAT DIUPLOAD']);
                }
            }else{
                return redirect('/backend/inputberita')->with(['addno' => 'BERITA INI SUDAH ANDA UPLOAD SEBELUMNYA!']);
            }
        }
   
        
    }

}