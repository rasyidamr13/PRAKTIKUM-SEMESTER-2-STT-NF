<?php
class buah {
    public $name;
    protected $color;
    private $berat;

    public function color($c){
        return $this->color = $c;
    }
    public function berat($b){
        return $this->berat = $b;    
    }
}
$mangga = new buah();
echo $mangga -> name = 'Mangga'; 
echo "</br>"; 
echo $mangga -> color('Hijau');
echo "</br>"; 
echo $mangga -> berat('300kg');
?>