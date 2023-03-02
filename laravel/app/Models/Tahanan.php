<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahanan extends Model
{
    use HasFactory;
    protected $fillable = ['total', 'tahananrumah', 'rutanpolsek', 'tahananpropam', 'rutanlandak', 'titipanlantas', 'titipannarkoba'];
}


