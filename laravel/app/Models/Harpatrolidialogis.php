<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harpatrolidialogis extends Model
{
    use HasFactory;
    private $fillable = ['nrp', 'input', 'latitude', 'longitude', 'personil', 'jam_start', 'jam_end', 'situasi', 'topik', 'rincian', 'tanggapan', 'masukan', 'respon', 'audiens', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
}


