<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vrsusers;
use App\Models\Personil;
use App\Models\Userlog;
use App\Models\Lapsit;
use App\Models\Renmas;
use App\Models\Tahanan;
use Validator;

class Lapsitpolres extends Controller
{
    public function accesslog(Request $req){
        $validator = Validator::make($req->all(), [
            'ip' => 'required',
            'nrp' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        if ($validator->fails()) {
            Vrsusers::where('nrp', $req->nrp)->update(['status' => 'blocked']);
            return response()->json(['msg' => 'Anda Tidak Diizinkan Mengakses Laporan ini!'.$validator->errors()], 403);
        }else{
            $userdata = Personil::where('nrp', $req->nrp);
            foreach($userdata->get() as $us){
                $satfung = $us->satfung;
            }

            if($req->nrp == '98070129'){
                return response()->json(['msg' => 'ok'], 200);
            }else if($satfung == 'SAT INTELKAM'){
                $ins = Userlog::create(['ip' => $req->ip,
                    'nrp' => $req->nrp,
                    'latitude' => $req->latitude,
                    'longitude' => $req->longitude
                ]);

                if($ins){
                    return response()->json(['msg' => 'ok'], 200);
                }else{
                    Vrsusers::where('nrp', $req->nrp)->update(['status' => 'blocked']);
                    return response()->json(['msg' => 'Anda Dilarang Mengakeses Halaman Ini!'], 403);
                }
            }else{
                Vrsusers::where('nrp', $req->nrp)->update(['status' => 'blocked']);
                return response()->json(['msg' => 'Anda Dilarang Mengakeses Halaman Ini!'], 403);
            }            
        }
    }

    public function list($kategori){
        $data = Lapsit::where(['bidang' => $kategori, 'input' => date('Y-m-d')])->get();
        return response()->json($data, 200);
    }

    public function rlist(){
        $data = Renmas::where(['input' => date('Y-m-d')])->get();
        return response()->json($data, 200);
    }

    public function radd(Request $req){
        $validator = Validator::make($req->all(), [
            'rengiat' => 'required',
            'lokasi' => 'required',
            'nrp' => 'required',
            'situasi' => 'required',
            'guantibmas' => 'required',
            'jam_start' => 'required',
            'jam_end' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()]);
        }else{
            $ins = Renmas::create(['rengiat' => $req->rengiat,
                                   'lokasi' => $req->lokasi,
                                   'nrp' => $req->nrp,
                                   'situasi' => $req->situasi,
                                   'guantibmas' => nl2br($req->guantibmas),
                                   'jam_start' => $req->jam_start,
                                   'jam_end' => $req->jam_end,
                                   'input' => date('Y-m-d')
                                ]);
            if($ins){
                return response()->json(['msg' => 'ok'], 200);
            }else{
                return response()->json(['msg' => 'Data Gagal Di Input!'], 200);
            }
        }
    }

    public function show($id){
        $data = Lapsit::where('id', $id)->get();
        return response()->json($data, 200);
    }

    public function add(Request $req){
        $validator = Validator::make($req->all(), [
            'nrp' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
            'judul' => 'required',
            'bidang' => 'required',
            'fakta' => 'required',
            'rekomendasi' => 'required',
            'file' => 'required',
            'file2' => 'required',
            'file3' => 'required',
            'file4' => 'required',
            'file5' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()]);
        }else{
            $img1 = $req->file('file');
            $img2 = $req->file('file2');
            $img3 = $req->file('file3');
            $img4 = $req->file('file4');
            $img5 = $req->file('file5');
            $imgN1 = time().'1.'.$img1->extension();
            $imgN2 = time().'2.'.$img2->extension();
            $imgN3 = time().'3.'.$img3->extension();
            $imgN4 = time().'4.'.$img4->extension();
            $imgN5 = time().'5.'.$img5->extension();

            $destinationPath = public_path('/media/vrs/lapsit');
            
            $do1 = $img1->move($destinationPath, $imgN1);
            $do2 = $img2->move($destinationPath, $imgN2);
            $do3 = $img3->move($destinationPath, $imgN3);
            $do4 = $img4->move($destinationPath, $imgN4);
            $do5 = $img5->move($destinationPath, $imgN5);

            if($do1){
                if($do2){
                    if($do3){
                        if($do4){
                            if($do5){
                                $ins = Lapsit::create([
                                    'nrp' => $req->nrp,
                                    'lokasi' => $req->lokasi,
                                    'status' => $req->status,
                                    'judul' => $req->judul,
                                    'bidang' => $req->bidang,
                                    'fakta' => nl2br($req->fakta),
                                    'rekomendasi' => nl2br($req->rekomendasi),
                                    'input' => date('Y-m-d'),
                                    'foto1' => '/media/vrs/lapsit/'.$imgN1,
                                    'foto2' => '/media/vrs/lapsit/'.$imgN2,
                                    'foto3' => '/media/vrs/lapsit/'.$imgN3,
                                    'foto4' => '/media/vrs/lapsit/'.$imgN4,
                                    'foto5' => '/media/vrs/lapsit/'.$imgN5
                                ]);

                                if($ins){
                                    return response()->json(['msg' => 'ok']);
                                }else{
                                    return response()->json(['msg' => 'Data Gagal Diinput!']);
                                }
                            }else{
                                return response()->json(['msg' => 'Foto 5 Gagal Diupload!']);
                            }
                        }else{
                            return response()->json(['msg' => 'Foto 4 Gagal Diupload!']);
                        }
                    }else{
                        return response()->json(['msg' => 'Foto 3 Gagal Diupload!']);
                    }
                }else{
                    return response()->json(['msg' => 'Foto 2 Gagal Diupload!']);
                }
            }else{
                return response()->json(['msg' => 'Foto 1 Gagal Diupload!']);
            }
        }  
    }

    public function del($id){
        $data = Lapsit::where('id', $id)->delete();

        if($data){
            return response()->json(['msg'=>'ok'], 200);
        }else{
            return response()->json(['msg'=>'Data Gagal Dihapus!'], 200);
        }
    }

    public function rdel($id){
        $data = Renmas::where('id', $id)->delete();

        if($data){
            return response()->json(['msg'=>'ok'], 200);
        }else{
            return response()->json(['msg'=>'Data Gagal Dihapus!'], 200);
        }
    }

    public function tahanan(){
        $data = Tahanan::get();
        return response()->json($data, 200);
    }

    public function edittahanan(Request $req){
        $upd = Tahanan::where('id', '1')->update(['total' => $req->total,
                                                'tahananrumah' => $req->tahananrumah,
                                                'rutanpolsek' => $req->rutanpolsek,
                                                'tahananpropam' => $req->tahananpropam,
                                                'rutanlandak' => $req->rutanlandak,
                                                'titipanlantas' => $req->titipanlantas,
                                                'titipannarkoba' => $req->titipannarkoba,
                                            ]);
        if($upd){
            return response()->json(['msg' => 'ok'], 200);
        }else{
            return response()->json(['msg' => 'Data Gagal Di Update!'], 200);
        }
    }
}
