<?php
$kev1 = 1000000;
$kev2 = 20000;
$kev3 = 1;

while ($kev3<=10)
{

  echo "<br> Pada Bulan ke " , $kev3;
  if($kev3 == 1){
  echo " ";
  }
else
{
  echo " Bunga " , $kev2;
}
echo " Saldo " , $kev1;

  $kev2 = 0.02 * $kev1;
  $kev1 = $kev1 + $kev2;
  $kev3++;

}
 ?>
