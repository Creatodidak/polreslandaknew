<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Harpatrolidialogis;
use App\Models\Harstrongpoint;
use App\Models\Harpamobvit;
use App\Models\Harsambang;
use App\Models\Harforumkamtibmas;
use App\Models\Harpenyuluhan;
use Validator;

class Lapharkamtibmas extends Controller
{
    public function kategori($kategori, $nrp){

        if($kategori == 'patrolidialogis'){
            $data = Harpatrolidialogis::where(['input' => date('Y-m-d'), 'nrp' => $nrp])->get();
        }else if($kategori == 'strongpoint'){
            $data = Harstrongpoint::where(['input' => date('Y-m-d'), 'nrp' => $nrp])->get();
        }else if($kategori == 'pamobvit'){
            $data = Harpamobvit::where(['input' => date('Y-m-d'), 'nrp' => $nrp])->get();
        }else if($kategori == 'sambang'){
            $data = Harsambang::where(['input' => date('Y-m-d'), 'nrp' => $nrp])->get();
        }else if($kategori == 'forumkamtibmas'){
            $data = Harforumkamtibmas::where(['input' => date('Y-m-d'), 'nrp' => $nrp])->get();
        }else if($kategori == 'penyuluhan'){
            $data = Harpenyuluhan::where(['input' => date('Y-m-d'), 'nrp' => $nrp])->get();
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
                                        'rincian' => nl2br($req->rincian),
                                        'masukan' => nl2br($req->masukan),
                                        'respon' => nl2br($req->respon),
                                        'audiens' => $req->audiens,
                                        'konklusi' => nl2br($req->konklusi),
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
        }else if($kategori == 'strongpoint'){
            $validator = Validator::make($req->all(), [
                'nrp' => 'required',
                'jam_start' => 'required',
                'jam_end' => 'required',
                'personil' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'situasi' => 'required',
                'rincian' => 'required',
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
    
                $destinationPath = public_path('/media/vrs/harkamtibmas/strongpoint');
                
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

                                    $ins = Harstrongpoint::create([
                                        'nrp' => $req->nrp,
                                        'jam_start' => $req->jam_start,
                                        'jam_end' => $req->jam_end,
                                        'latitude' => $req->latitude,
                                        'longitude' => $req->longitude,
                                        'situasi' => $req->situasi,
                                        'personil' => $personil,
                                        'rincian' => nl2br($req->rincian),
                                        'input' => date('Y-m-d'),
                                        'foto1' => '/media/vrs/harkamtibmas/strongpoint/'.$imgN1,
                                        'foto2' => '/media/vrs/harkamtibmas/strongpoint/'.$imgN2,
                                        'foto3' => '/media/vrs/harkamtibmas/strongpoint/'.$imgN3,
                                        'foto4' => '/media/vrs/harkamtibmas/strongpoint/'.$imgN4,
                                        'foto5' => '/media/vrs/harkamtibmas/strongpoint/'.$imgN5
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
        }else if($kategori == 'pamobvit'){
            $validator = Validator::make($req->all(), [
                'nrp' => 'required',
                'jam_start' => 'required',
                'jam_end' => 'required',
                'personil' => 'required',
                'obyek' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'situasi' => 'required',
                'rincian' => 'required',
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
    
                $destinationPath = public_path('/media/vrs/harkamtibmas/pamobvit');
                
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

                                    $ins = Harpamobvit::create([
                                        'nrp' => $req->nrp,
                                        'jam_start' => $req->jam_start,
                                        'jam_end' => $req->jam_end,
                                        'latitude' => $req->latitude,
                                        'longitude' => $req->longitude,
                                        'situasi' => $req->situasi,
                                        'obyek' => $req->obyek,
                                        'personil' => $personil,
                                        'rincian' => nl2br($req->rincian),
                                        'input' => date('Y-m-d'),
                                        'foto1' => '/media/vrs/harkamtibmas/pamobvit/'.$imgN1,
                                        'foto2' => '/media/vrs/harkamtibmas/pamobvit/'.$imgN2,
                                        'foto3' => '/media/vrs/harkamtibmas/pamobvit/'.$imgN3,
                                        'foto4' => '/media/vrs/harkamtibmas/pamobvit/'.$imgN4,
                                        'foto5' => '/media/vrs/harkamtibmas/pamobvit/'.$imgN5
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
        }else if($kategori == 'sambang'){
            $validator = Validator::make($req->all(), [
                'nrp' => 'required',
                'jam_start' => 'required',
                'jam_end' => 'required',
                'personil' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'lokasi' => 'required',
                'situasi' => 'required',
                'topik' => 'required',
                'rincian' => 'required',
                'masukan' => 'required',
                'respon' => 'required',
                'audiens' => 'required',
                'nama_audiens' => 'required',
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
    
                $destinationPath = public_path('/media/vrs/harkamtibmas/sambang');
                
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
                                    $naudiens = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->nama_audiens))).'"]';

                                    $ins = Harsambang::create([
                                        'nrp' => $req->nrp,
                                        'jam_start' => $req->jam_start,
                                        'jam_end' => $req->jam_end,
                                        'latitude' => $req->latitude,
                                        'longitude' => $req->longitude,
                                        'situasi' => $req->situasi,
                                        'personil' => $personil,
                                        'rincian' => nl2br($req->rincian),
                                        'input' => date('Y-m-d'),
                                        'lokasi' => $req->lokasi,
                                        'topik' => $req->topik,
                                        'masukan' => nl2br($req->masukan),
                                        'respon' => nl2br($req->respon),
                                        'audiens' => $req->audiens,
                                        'nama_audiens' => $naudiens,
                                        'foto1' => '/media/vrs/harkamtibmas/sambang/'.$imgN1,
                                        'foto2' => '/media/vrs/harkamtibmas/sambang/'.$imgN2,
                                        'foto3' => '/media/vrs/harkamtibmas/sambang/'.$imgN3,
                                        'foto4' => '/media/vrs/harkamtibmas/sambang/'.$imgN4,
                                        'foto5' => '/media/vrs/harkamtibmas/sambang/'.$imgN5
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
        }else if($kategori == 'forumkamtibmas'){
            $validator = Validator::make($req->all(), [
                'nrp' => 'required',
                'jam_start' => 'required',
                'jam_end' => 'required',
                'personil' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'lokasi' => 'required',
                'situasi' => 'required',
                'topik' => 'required',
                'rincian' => 'required',
                'masukan' => 'required',
                'respon' => 'required',
                'audiens' => 'required',
                'nama_audiens' => 'required',
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
    
                $destinationPath = public_path('/media/vrs/harkamtibmas/forumkamtibmas');
                
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
                                    $naudiens = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->nama_audiens))).'"]';

                                    $ins = Harforumkamtibmas::create([
                                        'nrp' => $req->nrp,
                                        'jam_start' => $req->jam_start,
                                        'jam_end' => $req->jam_end,
                                        'latitude' => $req->latitude,
                                        'longitude' => $req->longitude,
                                        'situasi' => $req->situasi,
                                        'personil' => $personil,
                                        'rincian' => nl2br($req->rincian),
                                        'input' => date('Y-m-d'),
                                        'lokasi' => $req->lokasi,
                                        'topik' => $req->topik,
                                        'masukan' => nl2br($req->masukan),
                                        'respon' => nl2br($req->respon),
                                        'audiens' => $req->audiens,
                                        'nama_audiens' => $naudiens,
                                        'foto1' => '/media/vrs/harkamtibmas/forumkamtibmas/'.$imgN1,
                                        'foto2' => '/media/vrs/harkamtibmas/forumkamtibmas/'.$imgN2,
                                        'foto3' => '/media/vrs/harkamtibmas/forumkamtibmas/'.$imgN3,
                                        'foto4' => '/media/vrs/harkamtibmas/forumkamtibmas/'.$imgN4,
                                        'foto5' => '/media/vrs/harkamtibmas/forumkamtibmas/'.$imgN5
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
        }else if($kategori == 'penyuluhan'){
            $validator = Validator::make($req->all(), [
                'nrp' => 'required',
                'jam_start' => 'required',
                'jam_end' => 'required',
                'personil' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'lokasi' => 'required',
                'situasi' => 'required',
                'topik' => 'required',
                'rincian' => 'required',
                'masukan' => 'required',
                'respon' => 'required',
                'audiens' => 'required',
                'nama_audiens' => 'required',
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
    
                $destinationPath = public_path('/media/vrs/harkamtibmas/penyuluhan');
                
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
                                    $naudiens = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->nama_audiens))).'"]';

                                    $ins = Harpenyuluhan::create([
                                        'nrp' => $req->nrp,
                                        'jam_start' => $req->jam_start,
                                        'jam_end' => $req->jam_end,
                                        'latitude' => $req->latitude,
                                        'longitude' => $req->longitude,
                                        'situasi' => $req->situasi,
                                        'personil' => $personil,
                                        'rincian' => nl2br($req->rincian),
                                        'input' => date('Y-m-d'),
                                        'lokasi' => $req->lokasi,
                                        'topik' => $req->topik,
                                        'masukan' => nl2br($req->masukan),
                                        'respon' => nl2br($req->respon),
                                        'audiens' => $req->audiens,
                                        'nama_audiens' => $naudiens,
                                        'foto1' => '/media/vrs/harkamtibmas/penyuluhan/'.$imgN1,
                                        'foto2' => '/media/vrs/harkamtibmas/penyuluhan/'.$imgN2,
                                        'foto3' => '/media/vrs/harkamtibmas/penyuluhan/'.$imgN3,
                                        'foto4' => '/media/vrs/harkamtibmas/penyuluhan/'.$imgN4,
                                        'foto5' => '/media/vrs/harkamtibmas/penyuluhan/'.$imgN5
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

    public function shows($kategori, $id){
        if($kategori == 'patrolidialogis'){
            return response()->json(Harpatrolidialogis::where('id', $id)->first(), 200);
        }else if($kategori == 'strongpoint'){
            return response()->json(Harstrongpoint::where('id', $id)->first(), 200);
        }else if($kategori == 'pamobvit'){
            return response()->json(Harpamobvit::where('id', $id)->first(), 200);
        }else if($kategori == 'sambang'){
            return response()->json(Harsambang::where('id', $id)->first(), 200);
        }else if($kategori == 'forumkamtibmas'){
            return response()->json(Harforumkamtibmas::where('id', $id)->first(), 200);
        }else if($kategori == 'penyuluhan'){
            return response()->json(Harpenyuluhan::where('id', $id)->first(), 200);
        }
    }

    public function deletes($kategori, $id){
        if($kategori == 'patrolidialogis'){
            return response()->json(Harpatrolidialogis::where('id', $id)->delete(), 200);
        }else if($kategori == 'strongpoint'){
            return response()->json(Harstrongpoint::where('id', $id)->delete(), 200);
        }else if($kategori == 'pamobvit'){
            return response()->json(Harpamobvit::where('id', $id)->delete(), 200);
        }else if($kategori == 'sambang'){
            return response()->json(Harsambang::where('id', $id)->delete(), 200);
        }else if($kategori == 'forumkamtibmas'){
            return response()->json(Harforumkamtibmas::where('id', $id)->delete(), 200);
        }else if($kategori == 'penyuluhan'){
            return response()->json(Harpenyuluhan::where('id', $id)->delete(), 200);
        }
    }
}
