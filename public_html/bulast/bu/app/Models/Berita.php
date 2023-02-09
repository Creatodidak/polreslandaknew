<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'judul', 'link', 'kategori', 'isi', 'foto', 'caption', 'publisher', 'penulis', 'satker', 'view', 'create_at', 'comment_id'];
}
