<?php

namespace App\Models;

use CodeIgniter\Model;

class Mkonfigurasi extends Model
{
    protected $table      = 'konfigurasi';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['id', 'namasitus', 'deskripsi', 'gambar', 'logo', 'peta', 'alamatsitus', 'fb', 'ig', 'yt', 'tw', 'email', 'tiktok', 'banner', 'nomorpengaduan', 'youtube_embbed', 'ads1', 'ads2', 'ads3', 'favicon'];
}