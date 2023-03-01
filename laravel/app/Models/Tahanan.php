<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahanan extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alias', 'nama_ayah', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'sp_han', 'kasus', 'status', 'tanggal_masuk', 'tanggal_keluar', 'penyidik', 'nama_penyidik', 'lokasi'];
}


