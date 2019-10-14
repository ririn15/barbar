<?php
class aritmatika
{

    public $bil1;
    public $bil2;
    public function construct($bil1,$bil2)
    {
        $this->$bil1 = $bil1;
        $this ->$bil2 = $bil2;
    }
    public function tambah()
    {
        $tambah = $this->$bil1 + $this->$bil2;
        return "hasil pertambahan : $tambah";
    }
    public function kurang()
    {
        $kurang = $this->$bil1 - $this->$bil2;
        return "hasil pengurangan : $kurang";
    }
        public function kali()
{
        $kali = $this->$bil1 * $this->$bil2;
        return "hasil perkalian : $kali";
    }
    public function bagi ()
    {
        $bagi = $this->$bil1 / $this->$bil2;
        return "hasil pembagian : $bagi";
    }
}
if  (isset ($_POST['sbm'])){
    $a = $_POST['bil1'];
    $b = $_POST['bil2'];
}
echo "<center>hasil perhitungan </center><br>";
$hasil = new aritmatika($a,$b);
echo $hasil-> tambah();
echo $hasil-> kurang();
echo $hasil-> kali();
echo $hasil-> bagi();
?>


