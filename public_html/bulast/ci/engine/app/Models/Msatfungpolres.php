<?php

namespace App\Models;

use CodeIgniter\Model;

class Msatfungpolres extends Model
{
    protected $table      = 'satfung_polres';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['id', 'satker'];
}