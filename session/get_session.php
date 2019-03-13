<?php

session_start();


// print_r($_SESSION);
if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}
else{
    echo "Not exits session username!";
}

// username : admin 
// password : 111111
// remember me? 

// if log in success => go to home page
// else redirect to login page and with message error

// home : logout


// form login 
// xu ly login
// home



?>