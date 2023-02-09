<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personil extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'pangkat', 'nrp', 'tanggal_lahir', 'foto', 'satker', 'satfung', 'jabatan', 'wa'];
}
