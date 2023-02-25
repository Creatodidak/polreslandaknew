<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harpamobvit extends Model
{
    use HasFactory;
    protected $fillable =  ['nrp', 'input', 'latitude', 'longitude', 'obyek', 'jam_start', 'jam_end', 'situasi', 'rincian', 'personil', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
}
