<?php

namespace App\Models;

use CodeIgniter\Model;

class Mjabatanpolsek extends Model
{
    protected $table      = 'jabatan_polsek';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['id', 'jabatan', 'level'];
}