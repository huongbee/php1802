<?php
session_start();

if(isset($_POST['btnLogin'])){
    if($_POST['username'] != 'admin'){ 
        $_SESSION['error_username'] = 'Invalid username';
        header('Location: login.php');
    }
    else{
        if($_POST['password'] != '111111'){
            $_SESSION['error_password'] = 'Invalid password';
            header('Location: http://localhost/php1802/login/login.php');
        }
        else{
            //thanh cong
            $userId = md5('111111admin'); 
            if(isset($_POST['remember']) && $_POST['remember']==1){
                setcookie('user',$userId, time()+120);
            }
            $_SESSION['success'] = $userId;
            header('Location: index.php');

        }
    }

}



?>