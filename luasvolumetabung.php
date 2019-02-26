<?php
$two = 2;
$p = 3.14;
$jari = 10;
$tinggi = 8;
$volumetabung = $p * $jari * $jari * $tinggi;
$luastutuptabung = $p * $jari * $jari;
$luasalastabung = $p * $jari * $jari;
$luasselimuttabung = $two * $p * $jari * $tinggi;
$luaskeseluruhan = $luasalastabung + $luastutuptabung + $luasselimuttabung;
echo "Diketahui sebuah tabung memiliki jari jari 10 cm dan tinggi 8 cm. Tentukan Luas dan Volume tabung!";
echo "<hr>";
echo "Volume tabung adalah : ";
echo $volumetabung;

echo "<hr>";

echo "Luas tutup tabung adalah : ";
echo $luastutuptabung;

echo "<hr>";

echo "Luas alas tabung adalah : ";
echo $luasalastabung;

echo "<hr>";

echo "Luas selimut tabung adalah : ";
echo $luasselimuttabung;

echo "<hr>";

echo "Luas keseluruhan tabung adalah : ";
echo $luaskeseluruhan;
 ?>
