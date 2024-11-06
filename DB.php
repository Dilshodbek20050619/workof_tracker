<?php


class DB
{
    public $pdo;

    public function __construct()
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=work_of_time';
        $this->pdo = new PDO($dsn, 'root', 'Dilshodjon2005');
        return $this->pdo;
    }
}

