<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penertibanll extends Model
{
    use HasFactory;
    protected $fillable = ['lokasi', 'latitude', 'longitude', 'jam_start', 'jam_end', 'personil', 'sasaran', 'pelanggaran', 'rincian', 'teguran', 'tilang', 'situasi', 'aruslalin', 'input', 'nrp', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
}


