<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pimpinan;

class pimpinanx extends Controller
{
    public function index(){
        $data = Pimpinan::all();

        return response($data);
    }

    public function show($id)
    {
        return response(Pimpinan::where('id', $id)->first());
    }

}
