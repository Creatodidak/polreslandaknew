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
}
