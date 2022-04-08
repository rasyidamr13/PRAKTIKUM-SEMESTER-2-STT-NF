<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const volumeGelas = 250;
    public $namaMinuman;

    public function isi($vol){
        return $this->volume = $vol;
    }
    public function harga($rp){
        return $this->harga = $rp;
    }
    function hasil(){
        return $this->volume - self::volumeGelas;
    }
}

$Aqua = new Dispenser();
echo "Nama Minuman ".$Aqua -> namaMinuman = 'Aqua';
echo "<hr/><br/>Volume galon nya adalah ".$Aqua -> isi(1000);
echo "<br/>Harga Segelas nya adalah ".$Aqua -> harga(3000);
echo "<br/>Andi beli air 1 gelas yang volumenya ".Dispenser::volumeGelas;
echo "<br/>Hasil volume sekarang adalah ".$Aqua -> hasil();
?>