<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'namasitus', 'deskripsi', 'gambar', 'logo', 'peta', 'alamatsitus', 'fb', 'ig', 'yt', 'tw', 'email', 'tiktok', 'banner', 'nomorpengaduan', 'youtube_embbed', 'ads1', 'ads2', 'ads3', 'favicon'];

}
