<?php

use Illuminate\Support\Facades\Route;
$cnt = 'App\Http\Controllers\\';

Route::get('/', $cnt.'Chome@index');
Route::get('berita/{link}', $cnt.'Cberita@index');
Route::get('berita/more/{limit}', $cnt.'Cberita@more');
Route::post('berita/komentar/{link}', $cnt.'Cberita@komentar');
Route::get('berita/kategori/{link}', $cnt.'Cberita@kategori');

Route::resource('/konfigurasi', $cnt.Chome::class);