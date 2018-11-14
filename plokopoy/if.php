<!DOCTYPE html>
<html>
<head>
	<title>PHP IF</title>
</head>
<body>
	<?php 
		$kevin = 80;
		if ($kevin >= 60) {
			echo "Nilai Anda ".$kevin." Selamat Anda LULUS!";
		echo "<br><br>";
		}
		$kevin2 = 50;
		if ($kevin2 >= 60) {
			echo "Selamat Anda LULUS!";
		}else{
			echo "Mohon Maaf Anda GAGAL!";
		}
		echo "<br><br>";
		$nickname = "pinkerenz";
		$password = "12345";
		if ($nickname == "pinkerenz" && $password == "12345") {
			echo "Login Berhasil!";
		}else{
			echo "Login Gagal!";
		}
		echo "<br><br>";
		$nilai = "E";
		if ($nilai == "A") {
			echo "Sangat Baik";
		}elseif ($nilai == "B") {
			echo "Baik";
		}elseif ($nilai == "C") {
			echo "Cukup";
		}elseif ($nilai == "D") {
			echo "Kurang Baik";
		}elseif ($nilai == "E") {
			echo "Kebangetan!!!";
		}else{
			echo "Masukan A - E";
		}
	 ?>
</body>
</html>