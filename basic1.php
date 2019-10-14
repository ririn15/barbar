<?php
class komputer
{
    public $processor = "intel core I 7";
   public function _construct()
{
    echo "construct dari komputer <br>";
    }

public function _destruct()
{
    echo "Destructor dari komputer<br>";
 }

}

    class laptop extends komputer
{
    public function _construct()
{
    parent ::_construct();
    echo "construct dari laptop<br>";
}
public function spesifikasi()
{
    echo "spesifikasi laptop :";
}

public function _destruct()
{
    echo "destruct dari laptop<br>";
    parent::_destruct();
}
}
$asus = new latop();
$asus ->spesifikasi();
echo $asus ->processor. "<br>";
?>


