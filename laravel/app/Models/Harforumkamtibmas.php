<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harforumkamtibmas extends Model
{
    use HasFactory;
    protected $fillable = ['nrp', 'input', 'latitude', 'longitude', 'lokasi', 'jam_start', 'jam_end', 'situasi', 'rincian', 'topik', 'masukan', 'respon', 'audiens', 'personil', 'nama_audiens', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
}
