<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpangkat extends Model
{
    protected $table      = 'pangkat';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['id', 'pangkat'];
}