<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vrsusers;
use App\Models\Personil;
use Validator;

use Illuminate\Support\Facades\Mail;

class Vrslogin extends Controller
{
    public function login(Request $req){
        if($req->nrp != null){

            $user = Vrsusers::where(['nrp' => $req->nrp, 'password' => md5($req->password)]);

            if($user->count() != 0){
                $otp = rand(100000,999999);
                // $otp = '123456';
                $cekstatus = Vrsusers::where('nrp', $req->nrp)->get();

                foreach($cekstatus as $c){
                    if($c->status == 'active'){
                        $userdata = Personil::where('nrp', $req->nrp);

                        if($userdata->count() != 0){
                            if(Vrsusers::where('nrp', $req->nrp)->update(['otp' => $otp, 'failedlogin' => '0'])){
                                require 'laravel/vendor/autoload.php';
                                $data = array('otp'=>$otp);
   
                                foreach($userdata->get() as $g){
                                    $nama = $g->nama;
                                };

                                $send = Mail::send('mail', $data, function($message) {
                                   $message->to($c->email, $nama)->subject
                                      ('OTP Virtual Report System');
                                   $message->from('reslandak.kalbar@polri.go.id','OTP SERVER POLRES LANDAK');
                                });

                                if($send){  
                                    return response()->json(['msg' => 'ok', 'nrp'=> $req->nrp], 200);
                                }else{  
                                    return response()->json(['msg' => 'Kode OTP gagal dikirim, ulangi proses Login!'.$mail->ErrorInfo], 403);
                                }
                            }else{
                                return response()->json(['msg' => 'Kode OTP gagal diupdate, ulangi proses Login!'], 403);
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
                        if($failupd){return response()->json(['msg' => 'Password Salah!', 'kesempatan' => 2-$fail.' Kali'], 403);}
                    }
                }else{
                    return response()->json(['msg' => 'NRP Tidak Terdaftar, Hubungi Admin!'], 403);
                }
            }
        }else{
            return response()->json(['msg' => 'NRP tidak boleh kosong!'], 403);
        } 
    }

    public function validasi(Request $req){
        $user = Vrsusers::where(['nrp' => $req->nrp, 'otp' => $req->otp]);

        if($user->count() != 0){
            if($user->first()->status == 'active'){
                $userdata = Personil::where('nrp', $req->nrp);
                foreach($userdata->get() as $us){
                    return response()->json(['msg' => 'ok', 'satker'=> $us->satker, 'satfung'=> $us->satfung, 'nrp'=>$req->nrp, 'nama'=> $us->nama, 'pangkat'=> $us->pangkat], 200);
                }
            }else{
                return response()->json(['msg' => 'NRP anda telah terblokir, hubungi admin!', 'kesempatan'=>''], 403);
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
                    if($failupd){return response()->json(['msg' => 'OTP salah!', 'kesempatan' => 2-$fail.' Kali'], 403);}
                }
            }else{
                return response()->json(['msg' => 'NRP Tidak Terdaftar, Hubungi Admin!'], 403);
            }
        }
    }
}
