<?php
class Gaji
{
    public $nama,  $nip, $alamat, $jml, $ppn = 0.025;
    public function __construct($nama, $nip, $alamat,$jml)
    {
        $this->jml = $jml;
        $this->nama = $nama;
        $this->nip = $nip;
        $this->alamat = $alamat;
    }
    public function datadiri()
    {
        $a = $this->nama;
        $c = $this->alamat;
        return "Nama : $this->nama <br> NIP : $this->nip <br> Alamat : $this->alamat";
    }
    public function gajikotor()
    {
        $gaji_kotor = $this->jml * 75000;
        return $gaji_kotor;
    }
    public function gajibersih()
    {
        $gaji_bersih = $this->gajikotor() - ($this->gajikotor() * $this->ppn);
        return $gaji_bersih;
    }
}
if (isset ($_POST['sbm'])) {
    $a = $_POST['nama'];
    $b = $_POST['nip'];
    $c = $_POST['alamat'];
    $d = $_POST['jml'];
}
$pegawai = new Gaji($a,$b, $c, $d);
echo $pegawai->datadiri() ."<br>";
echo "Gaji Kotor : " . $pegawai->gajikotor() . "<br>";
echo "Gaji Bersih : ". $pegawai->gajibersih() . "<br>";
?>