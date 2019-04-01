<?php
$dsn = 'mysql:dbname=php1802_shopping;host=127.0.0.1';
$username = 'root';
$password = '';
$options = [];
try{
    $connect = new PDO($dsn,$username,$password,$options);
    $connect->exec('set names utf8');
}
catch(PDOException $e){
    echo $e->getMessage();
    die('Connect fail!');
}

//update
// $sql = "UPDATE users
//         SET address = 'Quận 1'";
// $num = $connect->exec($sql);
// echo $num;

$sql = 'SELECT * FROM users';
$stmt = $connect->prepare($sql); // PDOStatement || FALSE
if($stmt){
    $check = $stmt->execute();
    if($check){
        //get data
        $data = $stmt->fetchAll();
        print_r($data);
    }
    else echo 'error execute';
}
else echo 'error prepare'



?>