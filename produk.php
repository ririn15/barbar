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
    <form method="post" action="input.php"> 
    <div class ="container" for="1 =< jumlah">
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

</div>

<div class="form-group">
   <label for="">nama barang</label>
     <input type="text" name="nabar" class="form-control" rowspan="3"></input>
</div>

<div class="form-group">
   <label for="">kode barang</label>
     <input type="text" name="kobar" class="form-control" rowspan="3"></input>
</div>


<label for="">jenis barang :</label>
   <select  name=”jebar”>
        <option>pilihan</option>
         <option>makanan</option>
         <option>minuman</option> 
         <option>pakaian</option> 
         <option>buku</option> 
         <option>gadget</option> 
</select >

<div class="form-group">
   <label for="">harga barang</label>
     <input type="text" name="habar" class="form-control" rows="3"></input>
</div>

<div class="form-group">
   <label for="1  <= jumlah barang">Jumlah barang</label>
     <input type="text" name="jubar" class="form-control" rows="3"></input>
     </div>

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


                         <div class="form-group">
                           <button type="submit" class="btn btn-info" name="ya">YA</button>
                             <button type="reset" class="btn btn-danger" name="tidak">TIDAK</button><br><br>
            </div> 
