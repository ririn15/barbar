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
    <form method="post" action="form3.php"> 

    <div class ="container">
    <div class="row" style="padding:10px">
       <div class="col-md-12">
          <div class="card">
             <center><div class="card-header">Assalaam Book Store</div></center>
                 <div class="card-body">
                 <div class ="container">
    <div class="row">
       <div class="col-md-12">
         <div class="card-header">Pembelian buku</div>
                 <div class="body">


                 <form action="" method="POST">
                  <div class ="form-group">
                   <label for="">nama</label>
                     <input type="text" class="form-control" name="a">
                 </div>
                       <div class="form-group">
                        <label for="">alamat</label>
                          <textarea name="b" class="form-control" rows="3"></textarea>
                     </div>

                        <div class="form-group">
                         <label>Jenis kelamin:</label>
                         <label> <input type="radio" name="jk" value="laki-laki" /> Laki-laki</label>
                         <label><input type="radio" name="jk" value="perempuan" /> Perempuan</label>
            </div>

                <div class="form-group">
                        <label for="">Tanggal Pembelian</label>
                          <input type="date" name="c" class="form-control" rows="3"></input>
                     </div>


                <div class="form-group">
                        <label for="">Jumlah Buku</label>
                          <input type="text" name="d" class="form-control" rows="3"></input>
                     </div>
            
                     
                          </html>
        </body>
        
        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel= "stylesheet"  href="/assets/css/bootstrap.min.css">
    <title>pusing!</title>
  </head>
  <body>
  <!-- header -->
  

  <!-- end header -->

    <!-- content -->
  

    
                 <!-- isi  di sini jow -->
                 <form action="" method="POST">
                  <div class ="form-group">
                   <th><td><label for="">judul buku :</label>
                     <input type="text" class="form-control" name="a"></th></td>
                 </div>
                       <div class="form-group">
                        <label for="">kode buku :</label>
                          <input type="text" name="b" class="form-control" rows="3"></input>
                   
                          <div class="form-group">
                        <label for="">pengarang :</label>
                          <input type="text" name="c" class="form-control" rows="3">
                          <div class="form-group">
                       </div>
                        
                       <label for="">jenis buku :</label>
                        <select  name=”jb”>
                             <option>pilihan</option>
                              <option>horror</option>
                              <option>love</option> 
                              <option>action</option> 
                              <option>fiksi</option> 
                              <option>non fiksi</option> 
                    </select >
              <div class="form-group">
                        <label for="">harga :</label>
                          <input type="text" name="c" class="form-control" rows="3">
            </div>
                    


       
                         <div class="form-group">
                           <button type="submit" class="btn btn-info" name="simpan">simpan</button>
                             <button type="reset" class="btn btn-danger" name="reset">reset</button><br><br>
            </div> 
                    </form>
















                    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <form method="post" action="pertama.php"> 
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

       <tr>
           <th>nama</th>
           <th>alamat</th>
           <th>jenis kelamin</th>
           <th>asal sekolah</th>
           <th>b indo</th>
           <th>matematika</th>
           <th>ipa</th>
           <th>inggris</th>
           <th>rata rata</th>
           <th>keterangan</th>
           </tr>
           <tr>
            <td><?php echo $a ?></td>
            <td><?php echo $b ?></td>
            <td><?php echo $c ?></td>
            <td><?php echo $d ?></td>
            <td><?php echo $e ?></td>
            <td><?php echo $f ?></td>
            <td><?php echo $g ?></td>
            <td><?php echo $h ?></td>
            <td><?php echo $rt ?></td>
            <td><?php echo $ket ?></td>
            </tr>
            </table>
             </div>
          </div>
        </div>  
     
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
 <div class="row">
<div class ="col-md-12" style="background:white">
<center><h2 style="color:black">hasil</h2></center>
<div class="table-responsive">
<table class="table">
<tr>
<th>nama</th>
<th>alamat</th>
<th>jenis kelamin</th>
<th>tanggal pembelian</th></th>
<th>jumlah</th>
<table class="table">
<th>nama barang</th><br>
<th>kode barang</th>
<th>jenis barang</th>
<th>harga barang</th>
<th>jumlah barang</th>
<th>hasil</th>

</tr>
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
                        <form name ="ya" method="post" action="data.php"></form>
                           <form name="tidak"method="post" action="pertama.php"></form>
                     

                         <div class="form-group">
                           <button type="submit" class="btn btn-info" name="ya">YA</button>
                             <button type="reset" class="btn btn-danger" name="tidak">TIDAK</button><br><br>
            </div> 


</div>

</body>
</form>
</html>









