<?php

namespace App\Models;

use CodeIgniter\Model;

class Msatfungpolsek extends Model
{
    protected $table      = 'satfung_polsek';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['id', 'satker'];
}