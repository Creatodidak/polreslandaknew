<?php

use Illuminate\Support\Facades\Route;
$cnt = 'App\Http\Controllers\\';

Route::get('/', $cnt.'Chome@index');
Route::get('/login', $cnt.'Cbackend@index');
Route::post('/backend/getotp', $cnt.'Cbackend@getotp');
Route::post('/backend/cekotp', $cnt.'Cbackend@cekotp');
Route::get('/backend/dashboard', $cnt.'Cbackend@dashboard');
Route::get('/backend/listberita', $cnt.'Cbackend@berita');
Route::get('/backend/inputberita', $cnt.'Cbackend@formberita');
Route::get('/backend/berita/delete/{id}', $cnt.'Cbackend@delberita');
Route::post('/backend/berita/addberita', $cnt.'Cbackend@addberita');
Route::get('/register', $cnt.'Cregister@index');
Route::post('/register/add', $cnt.'Cregister@add');
Route::get('/anggaran', $cnt.'Canggaran@index');
Route::get('/spkt', $cnt.'Cinformasi@spkt');
Route::get('/sim', $cnt.'Cinformasi@sim');
Route::get('/skck', $cnt.'Cinformasi@skck');
Route::get('/identifikasi', $cnt.'Cinformasi@identifikasi');
Route::get('/zonaintegritas', $cnt.'Czonaintegritas@index');
Route::get('/faq', $cnt.'Cfaq@index');
Route::get('/faqadmin', $cnt.'Cfaq@admin');
Route::get('/faqadminval/{nrp}/{pelayanan}', $cnt.'Cfaq@validasi');
Route::get('/faqdata/{pelayanan}', $cnt.'Cfaq@data');
Route::post('/faqadd', $cnt.'Cfaq@add');
Route::get('/faqdel/{id}', $cnt.'Cfaq@del');
Route::get('/epustaka/dashboard', $cnt.'Cepustaka@dashboard');
Route::post('/epustaka/add', $cnt.'Cepustaka@add');
Route::post('/epustaka/addfile', $cnt.'Cepustaka@addfile');
Route::post('/epustaka/qr', $cnt.'Cepustaka@dqr');
Route::get('/epustaka/login', $cnt.'Cepustaka@login');
Route::post('/epustaka/validasi', $cnt.'Cepustaka@validasi');
Route::get('/epustaka/logout', $cnt.'Cepustaka@logout');
Route::get('/epustaka/del/{id}', $cnt.'Cepustaka@del');
Route::get('/epustaka', $cnt.'Cepustaka@index');
Route::post('/epustaka/search', $cnt.'Cepustaka@search');
Route::get('/epustaka/val/{kode}', $cnt.'Cepustaka@val');

Route::get('berita/{link}', $cnt.'Cberita@index');
Route::get('berita/more/{limit}', $cnt.'Cberita@more');
Route::post('berita/komentar/{link}', $cnt.'Cberita@komentar');
Route::get('berita/kategori/{link}', $cnt.'Cberita@kategori');

Route::resource('/konfigurasi', $cnt.Chome::class);