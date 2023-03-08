<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Patrolijalanraya;
use App\Models\Penertibanll;
use App\Models\Pengawalan;
use App\Models\Turlalin;

class Lantas extends Controller
{
    public function list($cat){
        if($cat == 'pengaturan'){
            $data = Turlalin::where('input', date('Y-m-d'))->get();
            return response()->json($data, 200);
        }else if($cat == 'pengawalan'){
            $data = Pengawalan::where('input', date('Y-m-d'))->get();
            return response()->json($data, 200);
        }else if($cat == 'patroli'){
            $data = Patrolijalanraya::where('input', date('Y-m-d'))->get();
            return response()->json($data, 200);
        }else if($cat == 'penertiban'){
            $data = Penertibanll::where('input', date('Y-m-d'))->get();
            return response()->json($data, 200);
        }
    }

    public function add(Request $req, $cat){
        if($cat == 'pengaturan'){
            $validator = Validator::make($req->all(), [
                'lokasi' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'personil' => 'required',
                'situasi' => 'required',
                'aruslalulintas' => 'required',
                'jam_start' => 'required',
                'jam_end' => 'required',
                'nrp' => 'required',
                'file' => 'required',
                'file2' => 'required',
                'file3' => 'required',
                'file4' => 'required',
                'file5' => 'required'
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
    
                $destinationPath = public_path('/media/vrs/lantas/'.$cat);
                
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

                                    $ins = Pengaturan::create([
                                        'lokasi' => $req->lokasi,
                                        'latitude' => $req->latitude,
                                        'longitude' => $req->longitude,
                                        'personil' => $personil,
                                        'situasi' => $req->situasi,
                                        'aruslalulintas' => $req->aruslalulintas,
                                        'jam_start' => $req->jam_start,
                                        'jam_end' => $req->jam_end,
                                        'nrp' => $req->nrp,
                                        'input' => date('Y-m-d'),
                                        'foto1' => '/media/vrs/lantas/'.$cat.'/'.$imgN1,
                                        'foto2' => '/media/vrs/lantas/'.$cat.'/'.$imgN2,
                                        'foto3' => '/media/vrs/lantas/'.$cat.'/'.$imgN3,
                                        'foto4' => '/media/vrs/lantas/'.$cat.'/'.$imgN4,
                                        'foto5' => '/media/vrs/lantas/'.$cat.'/'.$imgN5
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
        }else if($cat == 'pengawalan'){
            $validator = Validator::make($req->all(), [
                'lokasi_awal' => 'required',
                'lokasi_akhir' => 'required',
                'objekpengawalan' => 'required',
                'jam' => 'required',
                'situasi' => 'required',
                'personil' => 'required',
                'kendaraan' => 'required',
                'nrp' => 'required',
                'file' => 'required',
                'file2' => 'required',
                'file3' => 'required',
                'file4' => 'required',
                'file5' => 'required'
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
    
                $destinationPath = public_path('/media/vrs/lantas/'.$cat);
                
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

                                    $ins = Pengawalan::create([
                                        'lokasi_awal' => $req->lokasi_awal,
                                        'lokasi_akhir' => $req->lokasi_akhir,
                                        'objekpengawalan' => $req->objekpengawalan,
                                        'jam' => $req->jam,
                                        'situasi' => $req->situasi,
                                        'personil' => $personil,
                                        'kendaraan' => $req->kendaraan,
                                        'nrp' => $req->nrp,
                                        'foto1' => '/media/vrs/lantas/'.$cat.'/'.$imgN1,
                                        'foto2' => '/media/vrs/lantas/'.$cat.'/'.$imgN2,
                                        'foto3' => '/media/vrs/lantas/'.$cat.'/'.$imgN3,
                                        'foto4' => '/media/vrs/lantas/'.$cat.'/'.$imgN4,
                                        'foto5' => '/media/vrs/lantas/'.$cat.'/'.$imgN5
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
        }else if($cat == 'patroli'){
            $validator = Validator::make($req->all(), [
                'lokasi' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'jam' => 'required',
                'situasi' => 'required',
                'aruslalin' => 'required',
                'personil' => 'required',
                'jenis' => 'required',
                'nrp' => 'required',
                'file' => 'required',
                'file2' => 'required',
                'file3' => 'required',
                'file4' => 'required',
                'file5' => 'required'
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
    
                $destinationPath = public_path('/media/vrs/lantas/'.$cat);
                
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

                                    $ins = Patrolijalanraya::create([
                                        'lokasi' => $req->lokasi,
                                        'latitude' => $req->latitude,
                                        'longitude' => $req->longitude,
                                        'jam' => $req->jam,
                                        'situasi' => $req->situasi,
                                        'aruslalin' => $req->aruslalin,
                                        'personil' => $personil,
                                        'jenis' => $req->jenis,
                                        'nrp' => $req->nrp,
                                        'foto1' => '/media/vrs/lantas/'.$cat.'/'.$imgN1,
                                        'foto2' => '/media/vrs/lantas/'.$cat.'/'.$imgN2,
                                        'foto3' => '/media/vrs/lantas/'.$cat.'/'.$imgN3,
                                        'foto4' => '/media/vrs/lantas/'.$cat.'/'.$imgN4,
                                        'foto5' => '/media/vrs/lantas/'.$cat.'/'.$imgN5
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
        }else if($cat == 'penertiban'){
            $validator = Validator::make($req->all(), [
                'lokasi' =>'required',
                'latitude' =>'required',
                'longitude' =>'required',
                'jam_start' =>'required',
                'jam_end' =>'required',
                'personil' =>'required',
                'sasaran' =>'required',
                'pelanggaran' =>'required',
                'rincian' =>'required',
                'teguran' =>'required',
                'tilang' =>'required',
                'situasi' =>'required',
                'aruslalin' =>'required',
                'nrp' =>'required',
                'file' => 'required',
                'file2' => 'required',
                'file3' => 'required',
                'file4' => 'required',
                'file5' => 'required'
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
    
                $destinationPath = public_path('/media/vrs/lantas/'.$cat);
                
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

                                    $ins = Penertibanll::create([
                                        'lokasi' => $req->lokasi,
                                        'latitude' => $req->latitude,
                                        'longitude' => $req->longitude,
                                        'jam_start' => $req->jam_start,
                                        'jam_end' => $req->jam_end,
                                        'personil' => $personil,
                                        'sasaran' => $sasaran,
                                        'pelanggaran' => $req->pelanggaran,
                                        'rincian' => nl2br($req->rincian),
                                        'teguran' => $req->teguran,
                                        'tilang' => $req->tilang,
                                        'situasi' => $req->situasi,
                                        'aruslalin' => $req->aruslalin,
                                        'nrp' => $req->nrp,
                                        'input' => date('Y-m-d'),
                                        'foto1' => '/media/vrs/lantas/'.$cat.'/'.$imgN1,
                                        'foto2' => '/media/vrs/lantas/'.$cat.'/'.$imgN2,
                                        'foto3' => '/media/vrs/lantas/'.$cat.'/'.$imgN3,
                                        'foto4' => '/media/vrs/lantas/'.$cat.'/'.$imgN4,
                                        'foto5' => '/media/vrs/lantas/'.$cat.'/'.$imgN5
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
