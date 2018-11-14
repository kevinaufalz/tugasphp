<?php 
	$kev1=2;
	$kev2=1;
	$kev3=100;

	echo "kecepatan ".$kev1."/det<br>";
	for ($i=1; $i <= $kev3 ; $i++) {
		$kev4=$i*$kev1; 
		echo "detik ke-$i jarak $kev4 meter <br>";
	}
 ?>