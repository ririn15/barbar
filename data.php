<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel= "stylesheet"  href="/assets/css/bootstrap.min.css">
    <title>\!</title>
  </head>
  <body>
  <!-- header -->
  
 
  <!-- end header -->

    <!-- content -->
  

    <div class ="container">
    <div class="row" style="padding:10px">
       <div class="col-md-12">
          <div class="card">
             <center><div class="card-header">daftar</div></center>
                 <div class="card-body">
                 <div class ="container">
    <div class="row">
       <div class="col-md-12">
         <div class="card-header">Pembelian barang</div>
                 <div class="body">

<?php
   if(isset($_GET['submit'])){
	  $nama = "nama";
		$alamat = "alamat";
		$jk = "jenis kelamin";
		$tangal = "tanggal pembelian";
    $jml = "jumlah";
   }
  ?>
        
                 <form action="produk.php" method="POST">
                  <div class ="form-group">
                   <label for="">nama</label>
                     <input type="text" class="form-control" name="nama">
                 </div>
                       <div class="form-group">
                        <label for="">alamat</label>
                          <textarea name="alamat" class="form-control" rows="3"></textarea>
                     </div>

                        <div class="form-group">
                         <label>Jenis kelamin:</label>
                         <label> <input type="radio" name="jk" value="laki-laki" /> Laki-laki</label>
                         <label><input type="radio" name="jk" value="perempuan" /> Perempuan</label>
            </div>

                <div class="form-group">
                        <label for="">Tanggal Pembelian</label>
                          <input type="date" name="tanggal" class="form-control" rows="3"></input>
                     </div>


                <div class="form-group">
                        <label for="">Jumlah</label>
                          <input type="text" name="jml" class="form-control" rows="3"></input>
               

                         <div class="form-group"><br>
                           <button type="submit" class="btn btn-info" name="ya">PROSES</button>
                             <button type="reset" class="btn btn-danger" name="tidak">RESET</button><br><br>
            </div> 
                          </html>
        </body>