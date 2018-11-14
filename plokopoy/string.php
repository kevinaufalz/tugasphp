<!DOCTYPE html>
<html>
<head>
	<title>String PHP</title>
</head>
<style type="text/css">
	body{
		background-color: plum;
		font-size: 20px;
	}
</style>
<body>
	<?php 
	// Mengukur Karakter (strlen)
		$kevin ="Kevin Naufal Zacky";
		$kevin2 = strlen($kevin);
		echo "Variable $kevin berisi $kevin2 karakter";
		echo "<br><br>";
	// Pilihan Bener atau Salah (strcmp)
		$pass =  "kevin@gmail.com";
		$pass1 = "kevin@gmail.com";
		$pass2 = strcmp($pass, $pass1);
		if ($pass2 == 1 ) {
			echo "Password anda benar";
		}else{
			echo "Password anda salah";
		}
		echo "<br><br>";
	// Jadi Kapital (strtoupper)
		$besar = "Jangan Berteriak!";
		$besar2 = strtoupper($besar);
		echo $besar2;
		echo "<br><br>";
	// Jadi Kecil (strtolower)
		$kecil = "Sedang Berbisik";
		$kecil2 = strtolower($kecil);
		echo $kecil2;
		echo "<br><br>";
	// Bikin Baris sesuai Enter (nl2br)
		$puisi="Aku rela ..
		Berpisah ..
		Hanya Untuk Dirimu..
		Semoga Tercapai..
		Segala keinginan mu..";
		echo nl2br($puisi);
		echo "<br><br>";
	// Memfilter Textarea atau HTML (strip_tags)
		$filter  ="Silahkan yang mau <u>coba-coba makanan </u> <i>disini.</i>";
		$filter1 = strip_tags($filter,"<u><i>");
		echo $filter1;
		echo "<br><br>";
	// Memecah String ke dalam ARRAY (explode)
		$array  = "03/Maret/1924";
		$array1 = explode("/", $array);
		echo $array1[2];
		echo "<br><br>"; 
	// Menggabungkan ARRAY ke dalam String (implode)
		$gabung = array(03,"Maret",1924);
		$gabung1 = implode(" ", $gabung);
		echo $gabung1;
		echo "<br><br>";
	 ?>
</body>
</html>