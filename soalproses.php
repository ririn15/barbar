<?php
session_start();
    if (isset($_POST['byr'])) {
        $nama = $_POST['nm'];
        $alamat = $_POST['al'];
        $jk = $_POST['jk'];
        $tanggal = $_POST['tgl'];
        $jumlah = $_POST['jml'];
        $nb = $_POST['nb'];
        $kb = $_POST['kb'];
        $jenis = $_POST['jenis'];
        $hb = $_POST['hb'];
        $jb = $_POST['jb'];
        $tot = $_POST['tot'];
        $hsl = $_POST['hasil'];
        $uang = $_POST['uang'];
        $ttl = $_POST['total'];
        $kmbl =  $_POST['kmbli'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
        <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> WARUNK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="soal.php">TOKABEH<span class="sr-only">(current)</span></a>
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
                    <div class="card-header"><center>keterangan pembeli</center></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" style="align:center">
                                <tr align="center">
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th colspan="1">Jenis Kelamin</th>
                                    <th colspan="1">Jumlah</th>
                                    <th colspan="2">Tanggal Pembelian</th>
                                </tr>
                                <tr align="center">
                                    <td><?php echo $nama; ?></td>
                                    <td><?php echo $alamat; ?></td>
                                    <td><?php echo $jk; ?></td>
                                    <td><?php echo $jumlah;?></td>
                                    <td colspan="2"><?php echo $tanggal; ?></td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="10"><b>Daftar barang yang dibeli</b></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <th>kode barang</th>
                                    <th>jenis barang</th>
                                    <th>harga barang (Rp)</th>
                                    <th>Jumlah barang</th>
                                    <th>Hasil</th>
                                </tr>
                                <?php 
                                for
                                ($i=0; $i <= caount ($jb); $i++) {
                                    # code...
                                    $tot[$i] = $jb[$i]*$hb[$i];
                                 ?>
                                <tr>
                                    <td><?php echo $$i+1; ?></td>
                                    <td><?php echo $nb[$key]; ?></td>
                                    <td><?php echo $kb[$key]; ?></td>
                                    <td><?php echo $jenis[$key]; ?></td>
                                    <td><?php echo $hb[$key]; ?></td>
                                    <td><?php echo $jb[$key]; ?></td>
                                    <td><?php echo $tot[$key]; ?></td>


                                </tr>
                                <?php } ?>
                                <tr>
                                    <td align="center" colspan="6"><b>Total Pembayaran</b></td>
                                </tr>
                                <tr>
                                <td>sub total</td>
                                <td class="text-md-right">Rp. <?php echo array_sum($tot);?></td>
                                </tr>
                                <?php 
                                    if (array_sum ($tot) > 500000) {
                                        $disk = "20%";
                                        $disc = 0.2;
                                    } elseif (array_sum ($tot) > 250000) {
                                        $disk = "10%";
                                        $disc = 0.1;
                                    } elseif (array_sm($tot) > 150000) {
                                        $disk = "5%";
                                        $disc = 0.05;
                                    }
                                    
                                ?>

                
                                <tr>
                                    <th>Diskon(<?php echo $disk; ?></th>
                                    <td class="text-md-right">Rp. <?php echo (array_sum($tot)*$disc);?></td>
                                </tr>
                                <tr>
                                    <th>total pembayaran</th>
                                    <td class="text-md-right">Rp. <?php echo array_sum($tot)-(array_sum($tot)*$disc);?></td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="6"><b>Pembayaran</b></td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <form action="" method="POST">
                                            <label for="">Masukkan Pembayaran</label>
                                            <input type="number"  name="byr" min="<?php echo array_sum($tot)-(array_sum($tot)*$disc);?>" class="form-control"><br>
                                            <input type="submit" class="btn btn-block btn-success " name="bayarrr" value="Bayar">
                                            </div>
                                            <input type="hidden" name="total" value="<?php echo array_sum($tot)-(array_sum($tot)*$disc);?>">
                                        </form>
                                    </td>
                                </tr>
                                <?php 
                                    if (isset($_POST['bayarrr'])) {
                                        $uang = $_POST['byr'];
                                        if ($uang >= $ttl) {
                                            $kmbl = $uang-$ttl;
                                        } else if ($uang == $ttl){
                                            $kmbl = $uang-$ttl;
                                        } else {
                                            $kmbl = "Uang Kurang";
                                        }
                                        
                                    }
                                ?>
                                 <tr>
                                    <th>Kembalian</th>
                                    <td align="right" colspan="5"><?php echo $kmbl; ?></td>
                                </tr>
                            </table>
                        </div>
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

    <?php } ?>