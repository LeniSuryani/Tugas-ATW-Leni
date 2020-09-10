<!-- episode 2 mengenai class dan method -->


<!-- Product merupakan class -->
<!-- merek, tipe dll merupakan atribut, atribut di gunakan untuk inisialisasai/prepare -->
<!-- method adalah function pada php ini -->
<!-- function jika di PBO -->
<!-- jika di pbo class adalah blueprint/maket/prototype dari objek yg akan di buat

atribut adalah: sesuatu yg melekat kedalam class tersebut

function adalah: sebuah kelakukan yang bisa dilakukan oleh class tsb

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


echo "Tipe BMW mempunyai: " . $bmw->kecepatanMaksimal();
