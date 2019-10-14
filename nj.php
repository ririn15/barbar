<?php 
session_start();
    if (isset($_SESSION['log'])) {

     } else {
            die ("Silahkan Login terlebih dahulu !<br>
            <a href='logon.php'>Login</a>");
        } 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Log-In</title>
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
   
        </nav>
    </header>
<br><br><br><br>
    <div class="container align-items-center">
        <div class="jumbotron bg-warning">
            <div class="card">
                <div class="card-body">
                <div class="card-header"><center><h2>SELAMAT BERBELANJA JANGAN LUPA LOGIN !!</h2></h2></center></div>
            </div>
            </div>
        </div>
        <div class="form-group">
                                        <input type="submit" value="login" name ="send" class=" btn btn-info btn-block">
                                    </div>
    </div>
    
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>