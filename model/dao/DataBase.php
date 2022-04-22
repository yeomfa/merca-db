<?php

class DataBase{
    private $conn;

    public function __construct(){

        try{
            $this->conn = new PDO("mysql:host=localhost;dbname=merca_db", "root", "");
        }catch(PDOException $e){
            echo "Connection failed: ".$e->getMessage();
        }

    }

    public function runQuery($sql = "", $values = array()){

        if($sql != ""){

            $query = $this->conn->prepare($sql);

            $query->execute($values);

            $table = $query->fetchAll(PDO::FETCH_ASSOC);

            $this->conn = null;

            return $table;

        }else{

            return 0;

        }

    }

    public function runUpdate($sql = "", $values = array()){

        if ($sql != "") {
            $query = $this->conn->prepare($sql);

            $query->execute($values);

            $nRow = $query->rowCount();

            return $this->conn->lastInsertId();
            $this->conn=null;
        }else {
            return 0;
        }

    }
}

?>
