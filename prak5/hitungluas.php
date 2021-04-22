<?php
$Diameter = $_GET['d'];
$Tinggi = $_GET['t'];
$Nama = $_GET['n'];

$Jari2 = $Diameter/2;
$phi = 3.14;
$luas = 2*$phi*$Jari2*($Jari2+$Tinggi);

echo "Luas tabung $Nama dengan diameter $Diameter dan tinggi $Tinggi adalah $luas satuan luas";
?>