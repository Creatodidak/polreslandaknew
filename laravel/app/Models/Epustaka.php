<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epustaka extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'type', 'nomor', 'tentang', 'satker', 'satfung', 'tanggal', 'validasi', 'uploader', 'file', 'qrfile', 'created_at', 'updated_at'];
}
