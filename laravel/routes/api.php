<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
$cnt = 'App\Http\Controllers\Api\\';

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/berita', $cnt.Beritax::class);
Route::apiResource('/pimpinan', $cnt.pimpinanx::class);
Route::get('/pimpinan/get/{nrp}', $cnt.'pimpinanx@list');
Route::get('/pimpinan/del/{id}', $cnt.'pimpinanx@destroys');
Route::post('/pimpinan/upd/{id}', $cnt.'pimpinanx@update');
Route::post('/pimpinan/upd/{id}', $cnt.'pimpinanx@update');
Route::apiResource('/harkamtibmas', $cnt.Lapharkamtibmas::class);
Route::get('/harkamtibmas/{kategori}/{nrp}', $cnt.'Lapharkamtibmas@kategori');
