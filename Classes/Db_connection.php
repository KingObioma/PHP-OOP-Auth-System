<?php
class Database{
    private $serverName;
    private $userName;
    private $database;
    private $password;

    public function __construct($serverName, $userName, $database, $password){
        $this->serverName = $serverName;
        $this->userName = $userName;
        $this->database = $database;
        $this->password = $password;
    }

    public function connect() {
        try{
            $dsn = "mysql:host=".$this->serverName . ";dbname=".$this->database;
            $connection = new PDO($dsn, $this->userName, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        }catch(PDOException $e){
            echo 'error connecting to ' . $this->database . ': ' . $e->getMessage();
            return null;
        }
    }
}