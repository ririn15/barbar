<?php 
    session_start();
    if (isset($_POST['send'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == "iin" && $pass == "123") {
            $_SESSION['log'] = $user;
            header("location:jomb2.php");
        }  else {
            die ("Username atau Password salah! Silahkan Login dengan Benar !<br>
            <a href='logon.php'>Login</a>");
        }
    }else {
        
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Log-In</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
            <a class="navbar-brand" href="#">jajan online</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="logon.php">daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jomb3.php">pesan<span class="sr-only">(current)</span></a>
                    </li>                
                </ul>
                <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
                    <button class="btn btn-info my-2 my-sm-0" type="submit" name="send">logout</button>
                </form>
            </div>
        </nav>
    </header>

      <div class="container align-items-center">
            <div class="card">
                <div class="card-body">
                <div class="card-header"><center><h2>SELAMAT BERBELANJA, SILAHKAN LOGIN TERLEBIH DAHULU</h2></center></div>
            </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-8">
                <img src="assets/alexander-popov-LoOC6U6gQpQ-unsplash.jpg" class="img-fluid">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="user" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="pass" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Log-in" name="send" class="btn btn-success">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php } ?>