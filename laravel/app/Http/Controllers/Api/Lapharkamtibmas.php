<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Harpatrolidialogis;

class Lapharkamtibmas extends Controller
{
    public function kategori($kategori, $nrp){

        if($kategori == 'patrolidialogis'){
            $data = Harpatrolidialogis::where(['input' => date('Y-m-d'), 'nrp' => $nrp])->get();
        }

        return response()->json($data, 200);
    }
}
