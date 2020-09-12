<!-- episode 3 mengenai instance object -->

<!-- 
instance object adalah setiap object itu uniq walau pun dari parent yg sama
setiap object tidak akan ada yg sama persis

 -->

<?php

class Mobil
{
    public $merek;
}
$bmw = new Mobil;
$bmw->tipe = "320i";
$bmw2 = new Mobil;
$bmw2->tipe = "320i";

echo "$bmw2->tipe  <br>";
echo "$bmw->tipe";

if ($bmw === $bmw2) {
    echo "sama";
} else {
    echo "   tidak";
}
?>