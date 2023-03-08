<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turlalin extends Model
{
    use HasFactory;
    protected $fillable = ['lokasi', 'latitude', 'longitude', 'personil', 'situasi', 'aruslalulintas', 'jam_start', 'jam_end', 'input', 'nrp', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
}
