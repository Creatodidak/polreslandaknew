<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengawalan extends Model
{
    use HasFactory;
    protected $fillable = ['lokasi_awal', 'lokasi_akhir', 'objekpengawalan', 'jam', 'situasi', 'personil', 'kendaraan', 'nrp', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
}
