<?php

namespace App\Models;

use App\Db\Db;

class Model extends Db{

    protected $table;

    private $db;

    protected function query(string $sql, array $attributs = null)
    {
        
    }
}