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
    <title>data gaji</title>
</head>
<body>
    <header>
       
         
    </header>

    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-header">Data </div>
                         <div class="card-body">
                         <div class="container align-items-center">

    </div>
    
    <div class ="form-group">
                   <label for="">nama</label>
                     <input type="text" class="form-control" name="nama">
                 </div>
                       <div class="form-group">
                        <label for="">alamat</label>
                          <textarea name="alamat" class="form-control" rows="3"></textarea>
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
    header("location:logon.php");
} 

?>