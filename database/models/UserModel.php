
<?php
// require_once "{$_SERVER['DOCUMENT_ROOT']}/web1_g1_test/database/DBConnection.php";
require_once "{$_SERVER['DOCUMENT_ROOT']}/database/DBConnection.php";
class UserModel{
    private $db = NULL;
    public function __construct()
    {
        //creo el objeto de conexión
        $dbConnection = new DBConnection();
        // obtengo la conexión
        $this->db = $dbConnection->connect();
    }
    public function insert(){

        $sql = "INSERT INTO users (email, password, name) VALUES('donjuan@gmail.com','123456', 'juan')";
        $this->db->query($sql);

    }
    public function getUser(){

    }

    public function getUsers(){

    }
}