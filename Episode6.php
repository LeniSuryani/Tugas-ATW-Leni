<!-- episode 6

polymorphism : kemampuan untuk menimpa fungsi parent nya

-->


<?php

class Mobil
{
    public $merek, $tipe, $mesin, $max_speed;

    // pada Variabel scope harus menggunakan $this untuk memanggil variabel luar
    public
    function cetakTipe()
    {
        return $this->tipe;
    }

    public function kecepatanMaksimal()
    {
        return "Kecepatan maksimal dari mobil ini adalah : " . $this->max_speed;
    }

    function injekGas()
    {
        return "mengalirkan bensin ke ruang bakar, rpm naik, roda berputar";
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

    // konsep polymorphism
    function injekGas()
    {
        return "mengalirkan listrik ke dinamo, rpm naik, roda berputar";
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


// run
echo "BMW :  " . $bmw->injekGas();
echo "<br>";
echo "Tesla : " . $tesla->injekGas();


?>