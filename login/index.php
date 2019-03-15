<?php
session_start();
if(!isset($_SESSION['success'])){ // ko co session
    // kiem tra cookie
    if(!isset($_COOKIE['user'])){ //ko co cookie
        $_SESSION['error'] = 'Pls login first!';
        header('Location: login.php');
        return;
    }
    elseif($_COOKIE['user'] != md5('111111admin')){
        $_SESSION['error'] = 'error cookie!';
        header('Location: login.php');
        return;
    }
    else{
        setcookie('user',$userId, time()+120);
        // $_SESSION['success'] = $_COOKIE['user'];
    }
}
elseif($_SESSION['success'] != md5('111111admin')){
    $_SESSION['error'] = 'error session!';
    header('Location: login.php');
    return;
}
//ton tai session || ton tai cookie

// 53 -> 55
// 54 -> 56
// 

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