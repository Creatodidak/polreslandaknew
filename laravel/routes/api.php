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

Route::post('/vrslogin', $cnt.'Vrslogin@login');
Route::post('/vrslogin/validasi', $cnt.'Vrslogin@validasi');

Route::apiResource('/pimpinan', $cnt.pimpinanx::class);
Route::get('/pimpinan/get/{nrp}', $cnt.'pimpinanx@list');
Route::get('/pimpinan/del/{id}', $cnt.'pimpinanx@destroys');
Route::post('/pimpinan/upd/{id}', $cnt.'pimpinanx@update');
Route::post('/pimpinan/upd/{id}', $cnt.'pimpinanx@update');

Route::apiResource('/harkamtibmas', $cnt.Lapharkamtibmas::class);
Route::get('/harkamtibmas/{kategori}/{nrp}', $cnt.'Lapharkamtibmas@kategori');
Route::post('/harkamtibmas/{kategori}', $cnt.'Lapharkamtibmas@store');
Route::get('/harkamtibmas/{kategori}/show/{id}', $cnt.'Lapharkamtibmas@shows');
Route::get('/harkamtibmas/{kategori}/del/{id}', $cnt.'Lapharkamtibmas@deletes');

Route::get('/berita/list/{nrp}', $cnt.'Beritax@list');
Route::get('/berita/listeksternal/{nrp}', $cnt.'Beritax@listeksternal');
Route::post('/berita/addberita', $cnt.'Beritax@addberita');
Route::post('/berita/addberitawartawan', $cnt.'Beritax@addberitawartawan');
Route::get('/berita/del/{id}', $cnt.'Beritax@delberita');

Route::post('/lapsit/accesslog', $cnt.'Lapsitpolres@accesslog');
Route::get('/lapsit/list/{kategori}', $cnt.'Lapsitpolres@list');
Route::get('/lapsit/rincian/{id}', $cnt.'Lapsitpolres@show');
Route::post('/lapsit/add', $cnt.'Lapsitpolres@add');
Route::get('/lapsit/rlist', $cnt.'Lapsitpolres@rlist');
Route::post('/lapsit/radd', $cnt.'Lapsitpolres@radd');
Route::get('/lapsit/del/{id}', $cnt.'Lapsitpolres@del');
Route::get('/lapsit/rdel/{id}', $cnt.'Lapsitpolres@rdel');
Route::get('/tahanan', $cnt.'Lapsitpolres@tahanan');
Route::post('/tahanan/edit', $cnt.'Lapsitpolres@edittahanan');

Route::get('/lantas/list/{cat}', $cnt.'Lantas@list');