<?php

class DBConnection{

    private $host = "172.31.17.100";
    private $username = "root";
    private $password = "root";
    private $database = "taskapp";
    private $port = 3306;

    public function connect(){
        $dbConnection = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);
        return $dbConnection;
    }
}