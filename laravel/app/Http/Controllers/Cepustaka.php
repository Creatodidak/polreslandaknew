<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cepustaka extends Controller
{
    public function index(){
        return view('epustaka/dashboard');
    }
}
