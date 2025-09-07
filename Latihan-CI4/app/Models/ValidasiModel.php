<?php

namespace App\Models;

use CodeIgniter\Model;

class ValidasiModel extends Model
{
    protected $table      = 'validasis';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nip', 'nama', 'gender', 'telp', 'email'];

    protected $returnType    = 'array';
}
