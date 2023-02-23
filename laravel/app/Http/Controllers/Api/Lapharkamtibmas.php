<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Harpatrolidialogis;
use Validator;

class Lapharkamtibmas extends Controller
{
    public function kategori($kategori, $nrp){

        if($kategori == 'patrolidialogis'){
            $data = Harpatrolidialogis::where(['input' => date('Y-m-d'), 'nrp' => $nrp])->get();
        }

        return response()->json($data, 200);
    }

    public function store($kategori, Request $req){
        if($kategori == 'patrolidialogis'){
            $validator = Validator::make($req->all(), [
                'nrp' => 'required',
                'jam_start' => 'required',
                'jam_end' => 'required',
                'personil' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'situasi' => 'required',
                'topik' => 'required',
                'rincian' => 'required',
                'tanggapan' => 'required',
                'masukan' => 'required',
                'respon' => 'required',
                'audiens' => 'required',
                'konklusi' => 'required',
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
    
                $destinationPath = public_path('/media/vrs/harkamtibmas/patrolidialogis');
                
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
                                    $personil = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->personil))).'"]';

                                    $ins = Harpatrolidialogis::create([
                                        'nrp' => $req->nrp,
                                        'jam_start' => $req->jam_start,
                                        'jam_end' => $req->jam_end,
                                        'latitude' => $req->latitude,
                                        'longitude' => $req->longitude,
                                        'situasi' => $req->situasi,
                                        'topik' => $req->topik,
                                        'personil' => $personil,
                                        'rincian' => $req->rincian,
                                        'tanggapan' => $req->tanggapan,
                                        'masukan' => $req->masukan,
                                        'respon' => $req->respon,
                                        'audiens' => $req->audiens,
                                        'konklusi' => $req->konklusi,
                                        'input' => date('Y-m-d'),
                                        'foto1' => '/media/vrs/harkamtibmas/patrolidialogis/'.$imgN1,
                                        'foto2' => '/media/vrs/harkamtibmas/patrolidialogis/'.$imgN2,
                                        'foto3' => '/media/vrs/harkamtibmas/patrolidialogis/'.$imgN3,
                                        'foto4' => '/media/vrs/harkamtibmas/patrolidialogis/'.$imgN4,
                                        'foto5' => '/media/vrs/harkamtibmas/patrolidialogis/'.$imgN5
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
    }
}
