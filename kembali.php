<?php 
session_start();
    if (isset($_SESSION['log'])) {
    if (isset($_POST['tbyr'])) {
        $total = $_POST['total'];
        $byr = $_POST['byr'];
        
        $kembali = $byr-$total; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Kembalian</title>
</head>
<body bgcolor="pink">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
            <a class="navbar-brand" href="#">jajan online</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    </li>
                             
                </ul>
                <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
                    <button class="btn btn-info my-2 my-sm-0" type="submit" name="send">Logout</button>
                </form>
            </div>
        </nav>
    </header><br><br>

         <form action="jomb2.php" method="post">

    <div class="container align-items-center">
        <div class="jumbotron bg-info">
            <div class="card">
                <div class="card-body">
                <div class="card-header"><center><h2>Data Berhasil Di Input!!</h2></center></div>
                Uang Anda : Rp. <?php echo $byr; ?><br>
                Total Bayar : Rp. <?php echo $total; ?><br>
                Kembalian Uang : Rp. <?php echo $kembali; ?><br>
                Apakah Anda Ingin berbelanja Lagi ?
                <div class="card-footer"><center>
                
                </form>
                <form action="" method="post">
                    <div class="form-group">
                        <input   type="submit" value="Ya" name="ya" class="btn btn-primary">
                        <input type="submit" value="Tidak" name="tidak" class="btn btn-danger">
                    </div>
                    <?php 
                  if (isset($_POST['ya'])) {
                    header("location:jomb2.php");
                } if (isset($_POST['tidak'])) {
                    // echo "<center><h5>Terima Kasih</h5></center>";
                    header("location:jomb.php");
                }   
                    
                ?>
                </center></div>
                
            </div>
            </div>
        </div>
    </div>
</body>
</html>
    <?php }else {
        header("location:jomb2.php");
    }
    
    ?>