<?php



class DB {
    public $pdo;
    public function __construct () {
        $dsn = 'mysql:host=localhost;dbname=work_of_time';
        $this->pdo = new PDO($dsn, 'root', 'Dilshodjon2005');
        return $this->pdo;
    }
}

