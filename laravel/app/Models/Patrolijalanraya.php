<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrolijalanraya extends Model
{
    use HasFactory;
    protected $fillable = ['lokasi', 'latitude', 'longitude', 'jam', 'situasi', 'aruslalin', 'personil', 'jenis', 'nrp', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
}
