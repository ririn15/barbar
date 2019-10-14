<?php
session_start();
if (isset($_SESSION['log'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>data keluarga</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning sticky-top">
            <a class="navbar-brand" href="#">Jumlah keluarga</a></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                         
            </div>
        </nav>
    </header>

    
    <form action="kk.php" method="post">

                                    <div class="form-group">
                                                <label for="">Jumlah keluarga</label>
                                                <input type="number" name="jml" class="form-control" id=""><br>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Simpan" name ="send" class=" btn btn-info btn-block">
                                    </div>
                                </form>
                      </div>
                  </div>
               </div>      
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php }else {
} 
?>

