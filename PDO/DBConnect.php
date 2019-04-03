<?php
class DBConnect{
    private const dbName = 'php1802_shopping';
    private $dsn = 'mysql:dbname='.DBConnect::dbName.';host=127.0.0.1';
    private $username = 'root';
    private $password = '';
    private $options = [];

    function __construct(){
        try{
            $connect = new PDO($this->dsn,$this->username,$this->password,$this->options);
            $connect->exec('set names utf8');
        }
        catch(PDOException $e){
            echo $e->getMessage();
            die('Connect fail!');
        }
    }
}

?>