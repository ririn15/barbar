<?php
class warnet
{
    public $processor = "warnet go";
   public function __construct()
{
    echo "masuk pintu warnet<br>";
    }

public function __destruct()
{
    echo "keluar dari pintu warnet<br>";
 }

}

    class nomorpc extends warnet
{
    public function __construct()
{
    parent ::__construct();
    echo "main di nomor pc<br>";
}
public function op()
{
    echo "tempat per pc :";
}

public function __destruct()
{
    echo "keluar abis billing<br>";
    parent::__destruct();
}
}
$oppo = new nomorpc();
$oppo ->spesifikasi();
echo $oppo ->processor. "<br>";
?>


