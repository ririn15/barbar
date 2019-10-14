<?php
                          if (isset($_POST['byr'])){
                          $a = $_POST ['a'];
                          $b = $_POST ['b'];
                          $jk = $_POST ['jk'];
                          $c = $_POST ['c'];
                          $d = $_POST ['d'];
                          $e = $_POST ['e'];
                          $f = $_POST ['f'];
                          $g = $_POST ['g'];
                          $h = $_POST ['h'];
                          $i = $_POST ['i'];
           
                          }
           ?>
     
     
     
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hasil</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    </head>
    </body>
    <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">assalaam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="form2.php">tokobuku <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="latihan 2">latihan 2</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      <th scope="col">nama</th>
      <th scope="col">alamat</th>
      <th scope="col">jenis kelamin</th>
      <th scope="col">tanggal pembelian</th>
      <th scope="col">jumlah buku</th>
      <th scope="col">judul</th>
      <th scope="col">kode</th>
      <th scope="col">pengarang</th>
      <th scope="col">jenis</th>
      <th scope="col">harga</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>     
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>hasil</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">assalaam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="book">toko buku <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="latihan 2"></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       
</body>


pembayaran = uang yg dimasukin - total pembayaran








<?php  ?>
<tr>
<td align="center" colspan="6"><b>total pembayaran</b></td>
</tr>


<?php  ?>
<tr>
<td align="center" colspan="6"><b>total pembayaran</b></td>
</tr>
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
<tr>
<td>harga</td>
<td align="right" colspan="5"><?php echo $a; ?></td>
</tr>
<tr>
<td>total</td>
<td align="center" colspan="6"><b>pembayaran</b>
</tr>
<td colspan="6">
<form action="" method="POST">
<label for="">masukan pembayaran</label>
<input type="number" class="form-control" min="1" name="masukan">
<input type="button" class="btn btn-success form-control">
</form></td>
<!-- footer -->
<!-- end footer -->