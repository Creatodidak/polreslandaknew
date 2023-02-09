<?php

namespace App\Models;

use CodeIgniter\Model;

class Mberita extends Model
{
    protected $table      = 'berita';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['id','judul', 'link', 'isi', 'kategori', 'foto', 'caption', 'publisher', 'penulis', 'satker', 'create_at', 'view', 'comment_id'];
}