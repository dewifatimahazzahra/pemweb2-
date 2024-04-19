<?php

require_once "class_persegipanjang.php";

$persegipanjang1 = new Persegi_Panjang(5, 10);
$persegipanjang2 = new Persegi_Panjang(7, 15);

echo "Luas Persegi Panjang : " . $persegipanjang1->getLuas();
echo "<br>keliling Persegi Panjang : " . $persegipanjang2->getKeliling();