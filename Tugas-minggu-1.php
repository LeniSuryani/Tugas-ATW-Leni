<?php

class Binatang
{
    public $nama, $jenis, $berkaki;
}

class Kucing extends Binatang
{
    public $bisa_terbang = "Tidak bisa terbang";

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
        return "meong";
    }
}


$momo = new kucing;
$momo->jumlah_kaki = 4;
echo "momo adalah kucing <br>";
echo "punya kaki sebanyak : " . $momo->jumlah_kaki . "<br>";
echo $momo->bisa_terbang . "<br>";
echo "suaranya : " . $momo->bersuara() . "<br>";

echo "<hr><hr>";
