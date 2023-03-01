<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ApiController;
use App\Models\Berita;
use App\Models\Eksternal;
use Carbon\Carbon;
use Validator;
use Image;
use Illuminate\Support\Facades\File;

class Beritax extends Controller
{
    public function list($nrp){
        $data = Berita::where(['create_at' => date('Y-m-d')])->get();
        // 'nrp' => $nrp, 
        return response($data, 200);
    }

    public function addberita(Request $request){
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'penulis' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'caption' => 'required',
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
                        'judul' => str_replace(array( '\'', '"', ',' , '.' , ';', '<', '>' ), '', strtoupper($request->judul)),
                        'link' =>  str_replace(' ', '-',strtolower(str_replace( array( '\'', '"', ',' , '.' , ';', '<', '>' ), '', $request->judul))),
                        'penulis' => $request->penulis,
                        'isi' => nl2br($request->isi),
                        'kategori' => $request->kategori,
                        'caption' => $request->caption,
                        'foto' => '/media/berita/'.$imageName,
                        'thumb' => '/media/berita/thumbnail/'.$imageName,
                        'publisher' => $request->nrp,
                        'satker' =>  $request->satker,
                        'view' => '0',
                        'create_at' => date('Y-m-d')
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

    public function addberitawartawan(Request $req){
        $validator = Validator::make($req->all(), [
            'data' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json(['msg' => $validator->errors()]);
        }else{
            $data = explode(PHP_EOL, $req->data);

            foreach($data as $d){
                Eksternal::create(['link' => $d,
                                          'nrp'=> $req->nrp,
                                          'satker' => $req->satker,
                                          'input' => date('Y-m-d')
                                        ]);
            }
        }
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
                    return response()->json(['msg' => 'ok'], 200);
                }else{
                    return response()->json(['msg' => 'Data Gagal Dihapus'], 200);
                }
            }else{
                return response()->json(['msg' => 'Foto Gagal Dihapus'], 200);
            }
        }else{
            return response()->json(['msg' => 'Foto Tidak Ditemukan'], 200);
        }
    }
}
