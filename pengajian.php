<?php
    if (isset($_POST['sbm'])) {
        $a = $_POST['nama'];
        $b = $_POST['nip'];
        $c = $_POST['alamat'];
        $d = $_POST['jml'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
</head>
<body>
    <fieldset>
        <legend>Data Diri Pegawai</legend>
        <form action="pengajian2.php" method="POST">
            <table>
                <tr>
                    <td><label for="">Nama</label></td>
                    <td><input type="text" name="nama"></td>
                </tr><br>
                <tr>
                    <td><label for="">NIP</label></td>
                    <td><input type="number" name="nip"></td>
                </tr><br>
                <tr>
                    <td><label for="">Alamat</label></td>
                    <td><input type="" name="alamat"></td>
                </tr><br>
                <tr>
                    <td><label for="">Hari Bekerja</label></td>
                    <td><input type="" name="jml"></td>
                </tr><br>
                <tr>
                    <td><input type="submit" name="sbm" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>