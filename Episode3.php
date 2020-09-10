<!-- episode 3 mengenai instance object -->

<!-- 
instance object adalah setiap object itu uniq walau pun dari parent yg sama
setiap object tidak akan ada yg sama persis

 -->

<?php

class Mobil
{
    public $merek, $tipe, $mesin, $max_speed;

    // pada Variabel scope harus menggunakan $this untuk memanggil variabel luar
    public function cetakTipe()
    {
        return $this->tipe;
    }

    function kecepatanMaksimal()
    {
        return "Kecepatan maksimal dari mobil ini adalah : " . $this->max_speed;
    }
}

$bmw = new Mobil;
$bmw->merek = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280km/h";

$bmw2 = new Mobil;
$bmw2->merek = "BMW";
$bmw2->tipe = "320i";
$bmw2->mesin = "2000cc";
$bmw2->max_speed = "280km/h";


echo "$bmw2->tipe";
echo "<br>";
echo "$bmw->tipe";

// untuk membuktikan bahwa setiap object itu berbeda walau pun mempunyai isi yg sama
// dapat di buktikan dengan berikut

if ($bmw === $bmw2) {
    echo "sama";
} else {
    echo "   tidak";
}
