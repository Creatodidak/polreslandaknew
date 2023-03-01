<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapsit extends Model
{
    use HasFactory;
    protected $fillable = ['input', 'nrp', 'bidang', 'lokasi', 'judul', 'fakta', 'rekomendasi', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'status'];
}
