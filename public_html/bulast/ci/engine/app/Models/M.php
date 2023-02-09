<?php

namespace App\Models;

use CodeIgniter\Model;

class M extends Model
{
    protected $table      = '';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = [];
}