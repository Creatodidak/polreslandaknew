<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ApiController;
use App\Models\Berita;

class Beritax extends Controller
{
    public function list($nrp){
        $data = Berita::where(['create_at' => date('Y-m-d')])->get();
        // 'nrp' => $nrp, 
        return response($data, 200);
    }
}
