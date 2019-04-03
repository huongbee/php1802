<?php

require_once 'DBConnect.php';

$con = new DBConnect();
// $sql = "INSERT INTO users(username,email,password) 
//         VALUES('admin1234','admin1234@gmail.com','123456')";

// $sql = "UPDATE users
//         SET username = 'admin1234'
//         WHERE id=23";
// $check = $con->executeQuery($sql);
// if($check) echo 'Updated!';
// else echo 'Error';



// $sql = 'SELECT * FROM users WHERE id = 1';
// $data = $con->getOneRow($sql);


// $sql = 'SELECT * FROM users WHERE id <= ?';
// $data = $con->getMoreRow($sql,[4]);
// print_r($data);


$sql = 'DROP database php1802';
$check = $con->executeQuery($sql);
if($check) echo 'Deleted!';
else echo 'Error';
?>