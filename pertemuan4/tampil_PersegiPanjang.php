<?php
require_once 'class_PersegiPanjang.php';

$PersegiPanjang1 = new PersegiPanjang(90,20);

echo "Luas dari Persegi Panjang 1 adalah : " .$PersegiPanjang1->getLuas();
echo "</br> Keliling dari Persegi Panjang 1 adalah : "  .$PersegiPanjang1->getKeliling();
?>