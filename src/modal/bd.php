<?php
    function getConnexion(){
        $host = 'localhost';
        $user =  'root';
        $password = '';
        $dbname = 'banquePeuple';

        $dsn = "mysql:host=$host;dbname=$dbname";
        try{
            $db = new PDO($dsn, $user, $password);
        }catch (PDOException $ex){
            die('Error : '.$ex->getMessage());
        }

        return $db;
    }
?>