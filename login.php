<?php
    session_start();
    if (isset($_SESSION['login'])) {
        $user = $_SESSION['user'];
        $pass = $_SESSION['pass'];
        if ($user == "iin" && $pass == "1234") {
            $_SESSION['login'] = $user;
            header('location:jomb2.php');
        } else {
            die ("Username atau Password salah! Silahkan Login dengan Benar !<br>
            <a href='login.php'>Login</a>");
        }
    } else {
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
       <div class="row" style="padding:20px">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header"><center>LOGIN</center></div>
                   <div class="card-body">
                       <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="user">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="pass">
                            </div>
                            <div>
                                <button class="btn btn-primary" name="login">Login</button>
                            </div>
                        </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
</body>
</html>
    <?php } 
    ?>