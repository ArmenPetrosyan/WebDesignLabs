<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 14.02.15
 * Time: 23:10
 */
//error_reporting(~E_WARNING);
class DBEngine{
    var $dbName = '';
    var $dbUser = '';
    var $dbPassword = '';
    var $dbServer = '';
    var $conn = '';

    function __construct($dbname='1210213',$serv='localhost',$usr='root',$pasw=''){
        $this->conn = new mysqli($serv,$usr,$pasw,$dbname);
    }

    function getAllData($table){
        return $this->conn->query("SELECT * FROM $table");
    }

    function addEntity($table,$fname,$patro,$sname,$email,$tel,$city,$country){
        return $this->conn->query("INSERT INTO $table VALUES( '$fname','$patro','$sname','$email','$tel','$city','$country')");
    }

    function deleteEntity($table,$entity){
        return $this->conn->query("DELETE FROM $table WHERE lastname=$entity");
    }

    function __destruct(){
        $this->conn->close();
    }
}

$dbe = new DBEngine();
