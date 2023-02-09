<?php

namespace App\Models;

use CodeIgniter\Model;

class Muser extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['id', 'nrp', 'wa', 'last_access', 'otp'];
}