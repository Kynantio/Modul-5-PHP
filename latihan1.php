<?php
function cetak_ganjil($awal, $akhir){
  for ($i=$awal; $i < $akhir; $i++) {
    if ($i%2 == 1) {
      echo "$i, ";
    }
  }
}
$a=0;
$b=100;
echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
echo "<br>";
cetak_ganjil($a, $b);
 ?>
