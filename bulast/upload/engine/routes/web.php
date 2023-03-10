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


Route::get('berita/{link}', $cnt.'Cberita@index');
Route::get('berita/more/{limit}', $cnt.'Cberita@more');
Route::post('berita/komentar/{link}', $cnt.'Cberita@komentar');
Route::get('berita/kategori/{link}', $cnt.'Cberita@kategori');

Route::resource('/konfigurasi', $cnt.Chome::class);