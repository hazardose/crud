<?php
class Database {
    //specify your own database credentials
    private $host = "locahost";
    private $db_name = "crud_db";
    private $username = "";
    private $password = "";
    public $conn;

    public function getConnection(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:")
        }
    }


}

?>