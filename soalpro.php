<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WARUNK SAKINGHED</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">KRATJOM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="soal.php">WARUNK SAKINGHED<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="logout">Logout</button>
    </form>
  </div>
</nav>
    <!-- end Navbar -->

    <!-- content -->
    
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding:20px">
                <div class="card">
                <?php 
        if (isset($_POST['proses'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['ala'];
            $jenke = $_POST['jk'];
            $tanggal = $_POST['tgl'];
            $jumlah = $_POST['jumlah'];

            
            for ($i=1; $i <= $jumlah; $i++) { 
    ?>
                    <div class="card-body">
                        <form action="soalproses.php" method="POST">
                            
                            
                            <div class="form-group">
                                <label for="">nama barang</label>
                                <input type="text" class="form-control" name="nb[]"
                                    placeholder="nama barang" required>
                            </div>
                            <div class="form-group">
                                <label for="">kode barang</label>
                                <input type="text" class="form-control" name="kb[]" 
                                    placeholder="Kode barang" required>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Jenis barang</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="jenis[]">
                                        <option selected>jenis</option>
                                        <option value="baju">baju</option>
                                        <option value="makanan">makanan</option>
                                        <option value="elektronik">elektronik</option>
                                        <option value="peralatan sekolah">peralatan sekolah</option>
                                        <option value="sepatu">sepatu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">harga barang</label>
                                <input type="text" class="form-control" name="hb[]" 
                                    placeholder="harga barang" required>
                            </div>
                            <div class="form-group">
                                <label for="">jumlah barang</label>
                                <input type="number" class="form-control" min="1" name="jb[]"
                                    placeholder="jumlah barang" required> 
                            </div>
                         
                            
                            <hr>
                <?php } ?>
                <div class="form-group">
                                <input type="hidden" name="nm" value="<?php echo $nama; ?>">
                                <input type="hidden" name="al" value="<?php echo $alamat; ?>">
                                <input type="hidden" name="jk" value="<?php echo $jenke; ?>">
                                <input type="hidden" name="tgl" value="<?php echo $tanggal; ?>">
                                <input type="hidden" name="jml" value="<?php echo $jml; ?>">
                            </div>
                <div class="form-group">
                                <input type="submit" class="btn btn-success" name="byr" value="Bayar">
                            </div>
                        </form>
                <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->


    <!-- JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- End JS -->     
</body>
</html>