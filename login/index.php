<?php
session_start();
if(!isset($_SESSION['success'])){ // chua login
    $_SESSION['error'] = 'Pls login first!';
    header('Location: login.php');
    return;
}
elseif($_SESSION['success'] != md5('111111admin')){
    $_SESSION['error'] = 'Invalid user info!';
    header('Location: login.php');
    return;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Home Page</h3>
</body>
</html>