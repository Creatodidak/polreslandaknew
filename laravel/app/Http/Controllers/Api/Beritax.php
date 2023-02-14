<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resource\ApiController;
use App\Models\Berita;

class Beritax extends Controller
{
    public function index(){
        $data = Berita::all();

        return new ApiController(true, 'ok', $data);
    }
}
