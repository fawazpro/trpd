<?php
namespace App\Models;

use CodeIgniter\Model;

class Variables extends Model
{
    protected $table      = 'variable';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}