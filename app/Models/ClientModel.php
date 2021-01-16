<?php namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $DBGroup         = 'default';
    protected $table         = 'client';
    protected $returnType         = 'array';
    protected $allowedFields = [
        'name', 'email', 'token'
    ];
}

?>