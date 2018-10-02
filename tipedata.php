<!DOCTYPE html>
<html>
<head>
	<title>Tipe data</title>
</head>
<body>
	<?php 
		$nim ="081806797921";
		$nama ="Komenk Alamacay";
		$umur = 25;
		$nilai = 92.89;
		$status = TRUE;

		echo "NIM = ",$nim;
		echo "<br>";
		echo "Nama = $nama<br>";
		print"Umur: ".$umur;print"<br>";
		printf("Nilai = %.2f<br>",$nilai);
		if ($status) {
			echo "Status : aktif";
		}
		else{
			echo "Status : tidak aktif";
		}
	 ?>
</body>
</html>