<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renmas extends Model
{
    use HasFactory;
    protected $fillable = ['input', 'nrp', 'rengiat', 'lokasi', 'situasi', 'guantibmas', 'jam_start', 'jam_end'];
}
