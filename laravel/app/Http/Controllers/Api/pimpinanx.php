<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pimpinan;
use Validator;

class pimpinanx extends Controller
{
    public function index($nrp){
        $data = Pimpinan::where(['nrp' => $nrp]);

        return response($data);
    }

    public function list($nrp){
        $data = Pimpinan::where('nrp', $nrp);

        return response($data);
    }

    public function show($id)
    {
        return response(Pimpinan::where('id', $id)->first());
    }

    public function destroys($id){
        try {
            Pimpinan::findOrFail($id)->delete();
            return response()->json(['message' => 'ok']);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'No result'
            ], Response::HTTP_FORBIDDEN);
        }

    }

    public function store(Request $req){
        $validator = Validator::make($req->all(), [
            'kegiatan' => 'required',
            'lokasi' => 'required',
            'jam_start' => 'required',
            'jam_end' => 'required',
            'rincian' => 'required',
            'nrp' => 'required',
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

            $destinationPath = public_path('/media/vrs/pimpinan');
            
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
                                $pju = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->pju))).'"]';
                                $pers = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->pers))).'"]';
                                $toga = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->toga))).'"]';
                                $tomas = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->tomas))).'"]';
                                $todat = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->todat))).'"]';
                                $forkopim = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->forkopim))).'"]';

                                $ins = Pimpinan::create([
                                    'kegiatan' => $req->kegiatan,
                                    'lokasi' => $req->lokasi,
                                    'jam_start' => $req->jam_start,
                                    'jam_end' => $req->jam_end,
                                    'pju' => $pju,
                                    'personil' => $pers,
                                    'forkopimda' => $forkopim,
                                    'tomas' => $tomas,
                                    'toga' => $toga,
                                    'todat' => $todat,
                                    'rincian' => nl2br($req->rincian),
                                    'nrp' => $req->nrp,
                                    'input' => date('Y-m-d'),
                                    'foto1' => '/media/vrs/pimpinan/'.$imgN1,
                                    'foto2' => '/media/vrs/pimpinan/'.$imgN2,
                                    'foto3' => '/media/vrs/pimpinan/'.$imgN3,
                                    'foto4' => '/media/vrs/pimpinan/'.$imgN4,
                                    'foto5' => '/media/vrs/pimpinan/'.$imgN5
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

    public function update($id, Request $req){
        
        $validator = Validator::make($req->all(), [
            'kegiatan' => 'required',
            'lokasi' => 'required',
            'jam_start' => 'required',
            'jam_end' => 'required',
            'rincian' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()]);
        }else{
            $pju = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->pju))).'"]';
            $pers = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->pers))).'"]';
            $toga = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->toga))).'"]';
            $tomas = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->tomas))).'"]';
            $todat = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->todat))).'"]';
            $forkopim = '["'.str_replace(' ,', '","',str_replace(', ', '","',str_replace(' , ', '","',$req->forkopim))).'"]';

            $ins = Pimpinan::where('id', $id)->update([
                'kegiatan' => $req->kegiatan,
                'lokasi' => $req->lokasi,
                'jam_start' => $req->jam_start,
                'jam_end' => $req->jam_end,
                'pju' => $pju,
                'personil' => $pers,
                'forkopimda' => $forkopim,
                'tomas' => $tomas,
                'toga' => $toga,
                'todat' => $todat,
                'rincian' => nl2br($req->rincian),
                'input' => date('Y-m-d'),
            ]);

            if($ins){
                return response()->json(['msg' => 'ok']);
            }else{
                return response()->json(['msg' => 'Data Gagal Diinput!']);
            }
        }
    }
}
