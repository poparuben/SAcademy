<?php

class DB{

    function connect(){

        try{
            $pdo= new PDO("mysql:host=localhost;port=3307; dbname=piata_online","root" ,"");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $e) {
            echo "Connection to the database failed: " . $e->getMessage();
            die();
        }
    }

}