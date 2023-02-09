<?php

namespace App\Models;

use CodeIgniter\Model;

class Mjabatanpolres extends Model
{
    protected $table      = 'jabatan_polres';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['id', 'jabatan', 'level'];
}