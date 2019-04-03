<?php
class DBConnect{
    private $options = [];

    function __construct($dbName='php1802_shopping',$username='root', $password=''){
        try{
            $connect = new PDO("mysql:dbname=$dbName;host=127.0.0.1",$username,$password,$this->options);
            $connect->exec('set names utf8');
        }
        catch(PDOException $e){
            echo $e->getMessage();
            die('Connect fail!');
        }
    }
}

?>