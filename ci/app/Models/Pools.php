<?php
namespace App\Models;

use CodeIgniter\Model;

class Pools extends Model
{
    protected $table      = 'pools';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useTimestamps = false;
    protected $skipValidation     = false;
}