<?php 
session_start();
if (isset($_SESSION['log'])) {
if (isset($_POST['send'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur']; 
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body >
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
            <a class="navbar-brand" href="#">data</a></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

        
            </nav>
    </header>


    <div class="container">
        <div class="row justify-content-lg-center" style="padding:20px;">
            <div class="col-md-12">
                <div class="card text-white bg-danger mb-3 align-content-center">
                    <div class="card-header">data keluarga</div><br>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>nik</th>
                                    <th>alamat</th>
                                    <th>umur</th>
                                </tr>
                                <tr>
                                    <td><?php echo $nama; ?></td>
                                    <td><?php echo $nik; ?></td>
                                    <td><?php echo $alamat; ?></td>
                                    <td><?php echo $umur; ?></td>
                                    
                                                            </tr>
                                
                                
                            </table>
                            
            
                                    <?php } ?>
                            </table>
                         
                     
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
   