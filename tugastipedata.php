<!DOCTYPE html>
<html>
<head>
	<title>Tipe Data</title>
</head>
<body>
	<?php
		$a= 10;
		$b= 5;
		$c=$a + $b - 2.5;
		echo "10 ~ 5 ~ 2,5 = ";
		printf("%.1f<br>",$c);
		$d=10;
		$e=6;
		$f=$d + $e -12.5;
		echo "10 ~ 6 ~ 12.5 = ";
		printf("%.1f<br>",$f);
		$g=$d * $e + 3.5 - 13.5;
		echo "10 ~ 6 ~ 3.5 ~ 13.5 = ";
		printf("%.0f<br>",$g);
		$h=11;
		$i=$h * 10 - 4;
		echo "11 ~ 6 ~ 6.5 =",$i;
		echo "<br>";
		$j=$h + $e -6.5;
		echo "11 ~ 6 = -",$j;
		echo "<br>";
		$k=13 - 6.5;
		echo "13 ~ 4 = -",$k;
		echo "<br>";
		$l= 13 - 4 -3.44;
		echo "13 ~ 4 = -",$l;
		echo "<br>";
		echo "12 ~ 3 = -",$l;
		echo "<br>";
		$m=11 - 4 - 1;
		echo "11 ~ 4 ~ -5.5 = ",$m;
 	?>
</body>
</html>