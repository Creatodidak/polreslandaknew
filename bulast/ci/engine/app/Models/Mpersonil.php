<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpersonil extends Model
{
    protected $table      = 'personil';
    protected $primaryKey = 'nrp';
    protected $returnType     = 'object';
    protected $allowedFields = ['nrp', 'nama', 'pangkat', 'satker', 'satfung', 'jabatan', 'tanggal_lahir', 'foto', 'wa'];
}