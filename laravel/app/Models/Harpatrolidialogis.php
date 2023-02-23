<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harpatrolidialogis extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nrp', 'input', 'latitude', 'longitude', 'personil', 'jam_start', 'jam_end', 'situasi', 'topik', 'rincian', 'tanggapan', 'masukan', 'respon', 'audiens', 'konklusi', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
}


