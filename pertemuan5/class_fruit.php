<?php
class fruit{
    public $nama;
    public $warna;

    public function __construct($nama,$warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }
    public function intro(){
        echo "<br/>Nama aku adalah {$this->nama} dan warna aku adalah {$this->warna}";
    }
}
class Strawberry extends Fruit{
    public function message(){
        echo "<br/>Aku adalah sebuah strawberry atau pisang?";
    }
}
$buah = new Strawberry("Strawberry", "Merah");
$buah->intro();
$buah->message();
?>