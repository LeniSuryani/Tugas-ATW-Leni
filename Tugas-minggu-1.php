<?php

// Class
class Hewan
{
    // Property
    public  $jumlahKaki,
        $bisa_terbang = "Tidak Bisa Terbang",
        $bersuara;
}

// inherintance class child
class Kucing extends Hewan
{

    // method
    function jumlahKaki()
    {
        return $this->jumlahKaki;
    }
    function terbang()
    {
        return $this->bisa_terbang;
    }
    function bersuara()
    {
        return "meong";
    }
}

// inherintance Class Child
class Anjing extends Hewan
{

    // method
    function jumlahKaki()
    {
        return $this->jumlahKaki;
    }
    public function terbang()
    {
        return $this->bisa_terbang;
    }
    public function bersuara()
    {
        return "Guk Guk";
    }
}

// inherintance Class Child
class Elang extends Hewan
{
    // Property
    public $bisa_terbang = "Bisa Terbang";

    // method
    function jumlahKaki()
    {
        return $this->jumlahKaki;
    }
    public function terbang()
    {
        return $this->bisa_terbang;
    }
    public function bersuara()
    {
        return "Miiip";
    }
}

// inherintance Class Child
class Angsa extends Hewan
{
    // Property
    public $bisa_terbang = "Bisa Terbang";

    // method
    function jumlahKaki()
    {
        return $this->jumlahKaki;
    }
    public function terbang()
    {
        return $this->bisa_terbang;
    }
    public function bersuara()
    {
        return "Kwaaak";
    }
}





echo "<hr><hr><hr>";
$momo = new kucing;
$momo->jumlah_kaki = 4;
echo "momo adalah kucing <br>";
echo "Mempunya kaki sebanyak : " . $momo->jumlah_kaki . "<br>";
echo $momo->bisa_terbang . "<br>";
echo "suaranya : " . $momo->bersuara() . "<br>";

echo "<hr>";


$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo adalah Anjing <br>";
echo "Mempunya kaki sebanyak : " . $doggo->jumlah_kaki . "<br>";
echo $doggo->bisa_terbang . "<br>";
echo "suaranya : " . $doggo->bersuara() . "<br>";

echo "<hr>";


$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya adalah Elang <br>";
echo "Mempunya kaki sebanyak : " . $zya->jumlah_kaki . "<br>";
echo $zya->bisa_terbang . "<br>";
echo "suaranya : " . $zya->bersuara() . "<br>";

echo "<hr>";


$masha = new Angsa;
$masha->jumlah_kaki = 2;
echo "Masha adalah Angsa <br>";
echo "Mempunya kaki sebanyak : " . $masha->jumlah_kaki . "<br>";
echo $masha->bisa_terbang . "<br>";
echo "suaranya : " . $masha->bersuara() . "<br>";

echo "<hr><hr><hr>";
