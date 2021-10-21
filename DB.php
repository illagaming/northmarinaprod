<?php

class DB
{
    public static $con;
    private $pdo;

    public static function getInstance(){
        if (!isset(self::$con)){
            self::$con = new DB;
        }
        return self::$con;
    }

    private function __construct(){
        try{
            $dbname = "northmarina"; // Nom de la base de donnée
            $host = "localhost";
            $user_name = "root";
            $password = "";

            $this->pdo = new PDO('mysql:dbname='.$dbname.';host='.$host.'', ''.$user_name.'', ''.$password.'');
        }catch (PDOException $e){
            print "Erreur !: ". $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getPDO(){
        return $this->pdo;
    }
}