<?php
    if (isset($_POST['dkl'])) {
        $a = $_POST['nama'];
        $b = $_POST['nik'];
        $c = $_POST['alamat'];
        $d = $_POST['umur'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data keluarga</title>
</head>
<body>
    <fieldset>
        <legend>Data keluarga</legend>
        <form action="kk2.php" method="POST">
            <table>
                <tr>
                    <td><label for="">Nama</label></td>
                    <td><input type="text" name="nama"></td>
                </tr><br>
                <tr>
                    <td><label for="">NIK</label></td>
                    <td><input type="number" name="nip"></td>
                </tr><br>
                <tr>
                    <td><label for="">Alamat</label></td>
                    <td><input type="" name="alamat"></td>
                </tr><br>
                <tr>
                    <td><label for="">umur</label></td>
                    <td><input type="number" name="jml"></td>
                </tr><br>
                <tr>
                    <td><input type="submit" name="sbm" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>