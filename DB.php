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
            $this->pdo = new PDO('mysql:dbname=northmarina;host=localhost', 'root', '');
        }catch (PDOException $e){
            print "Erreur !: ". $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getPDO(){
        return $this->pdo;
    }
}