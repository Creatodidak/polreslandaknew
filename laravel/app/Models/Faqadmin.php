<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqadmin extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nrp', 'pelayanan', 'created_at', 'updated_at'];

}
