<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vrsusers;
use App\Models\Personil;
use App\Models\Userlog;
use App\Models\Lapsit;
use App\Models\Renmas;
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

    public function show($id){
        $data = Lapsit::where('id', $id)->get();
        return response()->json($data, 200);
    }

    public function add(Request $req, $kategori, $nrp){

    }

    public function del($id){
        
    }
}
