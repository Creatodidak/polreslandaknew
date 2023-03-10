<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'pertanyaan', 'jawaban', 'pelayanan', 'created_at', 'updated_at'];
}
