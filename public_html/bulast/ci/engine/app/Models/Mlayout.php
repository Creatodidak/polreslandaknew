<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlayout extends Model
{
    protected $table      = 'layout';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
}