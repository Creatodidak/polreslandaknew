<?php

namespace App\Models;

use CodeIgniter\Model;

class Mtraffic extends Model
{
    protected $table      = 'traffic';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['id', 'ip', 'access'];
}