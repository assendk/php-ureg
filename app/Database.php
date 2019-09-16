<?php

use PDOException;

class Database
{
    private $host	= 'localhost';
    private $dbname	= 'mytask';
    private $user	= 'mytask';
    private $pass	= '123';

    private $dbh;
    private $error;
    private $stmt;

    public function __construct(){
        // Set DSN
        $dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname;
        // Set Options
        $options = array(
            PDO::ATTR_PERSISTENT		=> true,
            PDO::ATTR_ERRMODE		=> PDO::ERRMODE_EXCEPTION
        );
        // Create new PDO
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch(PDOEception $e){
            $this->error = $e->getMessage();
        }
    }
}