<?php

require_once 'DBConnect.php';

$con = new DBConnect();
// $sql = "INSERT INTO users(username,email,password) 
//         VALUES('admin1234','admin1234@gmail.com','123456')";

$sql = "UPDATE users
        SET username = 'admin1234-update'
        WHERE id=23";
$check = $con->executeQuery($sql);

if($check) echo 'Updated!';
else echo 'Error';

?>