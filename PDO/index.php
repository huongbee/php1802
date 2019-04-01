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

// $sql = 'SELECT * FROM users';
$sql = 'SELECT * FROM users WHERE id = ? OR username = ?';

$stmt = $connect->prepare($sql); // PDOStatement || FALSE
if($stmt){
    $check = $stmt->execute([2,'huonghuong02']);
    if($check){
        // get data
        // $data = $stmt->fetchAll(PDO::FETCH_BOTH);
        // $data = $stmt->fetchAll(PDO::FETCH_NUM);
        // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        // echo $data[0]->username;
        // $data = $stmt->fetch(PDO::FETCH_OBJ);
        // echo $data->username;
        print_r($data);
    }
    else echo 'error execute';
}
else echo 'error prepare';

// define('PI',3.34);
// class A{
//     const PI = 3.14;
//     var $name = 'Admin';
// }
// echo A::PI;
// echo (new A)->name;

// $a['username'];
// $a->username;

?>