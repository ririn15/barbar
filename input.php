<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <form method="post" action="data.php"> 
<link rel= "stylesheet"  href="/assets/css/bootstrap.min.css">
    <title>pusing!</title>
  </head>
  <body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      </li>
      <li class="nav-item">
      </li>

        
     
  </div>
</nav>
<?php
    // Menampilkan input dari form produk.php
    if(isset($_GET['simpan'])){
    $nama = $_GET['nama'];
		$alamat = $_GET['alamat'];
		$jk = $_GET['jk'];		
		$tangal = $_GET['tanggal'];
        $jml = $_GET['jml'];
        $nabar = $_GET['nabar'];
        $kobar = $_GET['kobar'];
        $jebar = $_GET['jebar'];
        $habar = $_GET['habar'];
        $jubar = $_GET['jubar'];
        $hsl = $_GET['hasil'];
     
	
        
    }
?>
       
        
 <!-- end isi -->
 <div class="container">
 <div class="row">

 <div class="card-body">

<div class ="col-md-12" style="background:white">
<center><h2 style="color:black">hasil</h2></center>
<div class="table-responsive">
<table class="table" style= "align center">
<tr>
<tr align ="center">
<th>nama</th>
<th>alamat</th>
<th colspan="1">jenis kelamin</th>
<th colspan="2">tanggal pembelian</th></th>
<th colspan="3">jumlah</th>
<table class="table">
<th colspan="4">nama barang</th><br>
<th colspan="5">kode barang</th>
<th colspan="6">jenis barang</th>
<th colspan="7">harga barang</th>
<th colspan="8">jumlah barang</th>
<th colspan="9">hasil</th>

<form></form>
</tr>

<tr>
<td>harga</td>
<td align="right" colspan="5"><?php echo $a; ?></td>
</tr><br>
<tr>
<td>jumlah barang</td><br>
<td align="text" colspan="6"><br>
</tr>
<tr>
<td>diskon</td><br>
<td align="text" colspan="6"><br>
</tr>
<td colspan="6">
<form action="" method="POST">
<label for="">masukan pembayaran</label><br><br>    
<input type="number" class="form-control" min="1" name="masukan">
</form></td>
<tr>
<td><?php echo $nama ?></td>
<td><?php echo $alamat ?></td>
<td><?php echo $jk ?></td>
<td><?php echo $tanggal ?></td>
<td><?php echo $jml ?></td>
<td><?php echo $nabar ?></td>
<td><?php echo $kobar ?></td>
<td><?php echo $jebar?></td>
<td><?php echo $habar ?></td>
<td><?php echo $jubar?></td>
<td><?php echo $hsl ?></td>
</tr>
</table>
</div>
</div>
</div>



<?php
$a= array_sum($habar);
if ($hsl >= 500){
    $dsk = 0.2*$a;
    $ttl = $a-$dsk;
} if ($key >= 250){
    $dsk = 0.1*$a;
} if ($key >= 150){
    $dsk = 0.05*$a;
}
?>


<!-- footer -->
<!-- end footer -->

<!-- js first, then popper,and the last bootstrap JS -->
<script src="/assets/js/jquery.min.js"></script>
<script src= "/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<!-- end js -->

                       <div class="form-group">
                       <label for="">APAKAH ANDA AKAN MELAKUKAN TRANSAKSI LAGI?</label>
</div>

                             <div class="form-group">
                  <button type="submit" class="btn btn-info" name="iya">YA</button>
                       <button type="exit" class="btn btn-danger" name="tida">TIDAK</button><br><br>
            </div> 


</body>
</div>

</html>









