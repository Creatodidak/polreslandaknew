<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vrsusers;
use App\Models\Personil;
use Validator;

class Vrslogin extends Controller
{
    public function login(Request $req){
        if($req->nrp != null){

            $user = Vrsusers::where(['nrp' => $req->nrp, 'password' => md5($req->password)]);

            if($user->count() != 0){
                // $otp = rand(100000,999999);
                $otp = '123456';
                $cekstatus = Vrsusers::where('nrp', $req->nrp)->get();

                foreach($cekstatus as $c){
                    if($c->status == 'active'){
                        $userdata = Personil::where('nrp', $req->nrp);

                        if($userdata->count() != 0){
                            foreach($userdata->get() as $us){
                                $updok = Vrsusers::where('nrp', $req->nrp)->update(['otp'=> $otp]);
                                if($updok){return response()->json(['msg' => 'ok', 'satker'=> $us->satker, 'satfung'=> $us->satfung, 'nrp'=>$req->nrp, 'nama'=> $us->nama, 'pangkat'=> $us->pangkat], 200);}
                            }
                        }else{
                            return response()->json(['msg' => 'NRP anda tidak terdaftar sebagai Personil Polres Landak!'], 403);
                        }
                    }else{
                        return response()->json(['msg' => 'NRP anda telah terblokir, hubungi admin!', 'kesempatan'=>'0 Kali'], 403);
                    }
                }
            }else{
                $upd = Vrsusers::where('nrp', $req->nrp);

                if($upd->count() != 0){
                    foreach($upd->get() as $u){
                        $fail = $u->failedlogin;
                    }
    
                    if($fail+1 == 3){
                        $failupd = Vrsusers::where('nrp', $req->nrp)->update(['failedlogin' => '3', 'status' => 'blocked']);
                        if($failupd){return response()->json(['msg' => 'NRP anda telah terblokir, hubungi admin!', 'kesempatan'=>'0 Kali'], 403);}
                    }else{
                        $failupd = Vrsusers::where('nrp', $req->nrp)->update(['failedlogin' => $fail+1]);
                        if($failupd){return response()->json(['msg' => 'Data login salah!', 'kesempatan' => 2-$fail.' Kali'], 403);}
                    }
                }else{
                    return response()->json(['msg' => 'NRP Tidak Terdaftar, Hubungi Admin!'], 403);
                }
            }
        }else{
            return response()->json(['msg' => 'NRP tidak boleh kosong!'], 403);
        }
    }
}
