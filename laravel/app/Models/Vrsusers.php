<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vrsusers extends Model
{
    use HasFactory;
    private $fillable = ['id', 'nrp', 'password', 'email', 'otp', 'failedlogin', 'level', 'status'];
}


