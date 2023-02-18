<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pimpinan extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'kegiatan', 'lokasi', 'jam_start', 'jam_end', 'pju', 'forkopimda', 'tomas', 'toga', 'todat', 'personil', 'rincian', 'input', 'nrp', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'created_at', 'updated_at'];
}
