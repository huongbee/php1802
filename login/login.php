<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <br><br><br>
                <h3 class="text-center">User Login</h3>
                <form action="xuly.php" method="POST">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                        <?php

                        if(isset($_SESSION['error_username'])){
                            echo "<div class='text-danger'>
                            $_SESSION[error_username] </div>";
                        }
                        
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <?php

                        if(isset($_SESSION['error_password'])){
                            echo "<div class='text-danger'>
                            $_SESSION[error_password] </div>";
                        }
                        
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="rememberid">
                            <input id="rememberid" type="checkbox" name="remember" >
                            Remember me?
                        </label>
                    </div>
                    <div class="form-group">
                        <input style="width:100%" type="submit" class="btn btn-primary" name="btnLogin" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>