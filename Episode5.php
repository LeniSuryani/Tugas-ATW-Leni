<!-- episode 5

Encapsulation, pembungkus objek

public = digunakan untuk memberikan akses kepada seluruhnya
private = sama sekali tidak bisa diakses oleh luar
protrcted = hanya dapat diakses oleh class turunan




 -->


<!-- Episode 4 membahas tentang inherintence 

Inheritence itu adalah kemampuan sebuah Class untuk menurunkan properties and method nya ke anak-anak Class nya. 
Kita sebut saja Parent and Child


bagaimana cara membuah oop pada php

-->


<?php

class Mobil
{
    private $merek, $tipe, $mesin, $max_speed;

    // pada Variabel scope harus menggunakan $this untuk memanggil variabel luar
    private function cetakTipe()
    {
        return $this->tipe;
    }

    public function kecepatanMaksimal()
    {
        return "Kecepatan maksimal dari mobil ini adalah : " . $this->max_speed;
    }
}


// inherintence di tandai dengan element extend
class BMW extends Mobil
{
}

class Tesla extends Mobil
{
    function  selfParking()
    {
        echo "Parkir sendiri";
    }
}


$bmw = new BMW;
$bmw->merek = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280km/h";

$tesla = new Tesla;
$tesla->merek = "Tesla";
$tesla->tipe = "320i";
$tesla->mesin = "2000cc";
$tesla->max_speed = "280km/h";

$tesla->selfParking();
echo "<br>";
echo $tesla->kecepatanMaksimal();


?>