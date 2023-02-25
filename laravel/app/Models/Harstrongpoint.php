<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harstrongpoint extends Model
{
    use HasFactory;
    protected $fillable= ['nrp', 'input', 'latitude', 'longitude', 'jam_start', 'jam_end', 'situasi', 'rincian', 'personil', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
}
