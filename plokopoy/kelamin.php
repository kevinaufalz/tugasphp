<?php 	
		$kirim=$_POST["submit"];
		$hitung=$_POST["hitung"];
		$carijml=$_POST["cari"];

	if ($kirim == "Kirim") {
		$nama=$_POST["nama"];
		$nama2=$_POST["nama2"];
		$nama3=$_POST["nama3"];
		$nama4=$_POST["nama4"];
		$kelamin=$_POST["radios"];
		$kelamin2=$_POST["radios2"];
		$kelamin3=$_POST["radios3"];
		$kelamin4=$_POST["radios4"];
		if ($kelamin == "Pria") {
			echo "<div style=background-color:skyblue; padding:10px;>$nama kelamin $kelamin<br></div>";
		}else{
			echo "<div style=background-color:pink; padding:10px;>$nama kelamin $kelamin<br></div>";
		}
		if ($kelamin2 == "Pria") {
			echo "<div style=background-color:skyblue; padding:10px;>$nama2 kelamin $kelamin2<br></div>";
		}else{
			echo "<div style=background-color:pink; padding:10px;>$nama2 kelamin $kelamin2<br></div>";
		}
		if ($kelamin3 == "Pria") {
			echo "<div style=background-color:skyblue; padding:10px;>$nama3 kelamin $kelamin3<br></div>";
		}else{
			echo "<div style=background-color:pink; padding:10px;>$nama3 kelamin $kelamin3<br></div>";
		}
		if ($kelamin4 == "Pria") {
			echo "<div style=background-color:skyblue; padding:10px;>$nama4 kelamin $kelamin4<br></div>";
		}else{
			echo "<div style=background-color:pink; padding:10px;>$nama4 kelamin $kelamin4<br></div>";
		}
	}elseif($hitung == "Hitung") {
		// PERBANDINGAN 3 NILAI
		$nilai=$_POST["nilai"];
		$nilai2=$_POST["nilai2"];
		$nilai3=$_POST["nilai3"];
		if ($nilai > $nilai2 && $nilai2 > $nilai3) {
			echo "<span style=background-color:yellow;>Terkecil Nilai 3 = $nilai3</span> <br> <span style=background-color:skyblue;>Tengah Nilai 2 = $nilai2</span>";
			echo "<h3 style=color:green;>Angka Terbesar!<h3>";
			echo "<h2 style=color:green;>$nilai<h2>";
		}elseif ($nilai2 > $nilai && $nilai > $nilai3) {
			echo "<span style=background-color:yellow;>Terkecil Nilai 3 = $nilai3</span> <br> <span style=background-color:skyblue;>Tengah Nilai1 = $nilai</span>";
			echo "<h3 style=color:green;>Angka Terbesar!<h3>";
			echo "<h2 style=color:green;>$nilai2<h2>";
		}elseif ($nilai3 > $nilai2 && $nilai2 > $nilai) {
			echo "<span style=background-color:yellow;>Terkecil Nilai 1 = $nilai </span><br> <span style=background-color:skyblue;>Tengah Nilai2 = $nilai2</span>";
			echo "<h3 style=color:green;>Angka Terbesar!<h3>";
			echo "<h2 style=color:green;>$nilai3<h2>";
		}elseif ($nilai3 > $nilai && $nilai > $nilai2) {
			echo "<span style=background-color:yellow;>Terkecil Nilai 2 = $nilai2</span> <br> <span style=background-color:skyblue;>Tengah Nilai 1 = $nilai</span>";
			echo "<h3 style=color:green;>Angka Terbesar!<h3>";
			echo "<h2 style=color:green;>$nilai3<h2>";
		}elseif ($nilai2 > $nilai3 && $nilai3 > $nilai) {
			echo "<span style=background-color:yellow;>Terkecil Nilai 1 = $nilai</span> <br> <span style=background-color:skyblue;>Tengah Nilai 3 = $nilai3</span>";
			echo "<h3 style=color:green;>Angka Terbesar!<h3>";
			echo "<h2 style=color:green;>$nilai2<h2>";
		}elseif ($nilai > $nilai3 && $nilai3 > $nilai2) {
			echo "<span style=background-color:yellow;>Terkecil Nilai 2 =  $nilai2</span> <br> <span style=background-color:skyblue;>Tengah Nilai 3 = $nilai3</span>";
			echo "<h3 style=color:green;>Angka Terbesar!<h3>";
			echo "<h2 style=color:green;>$nilai<h2>";
		}
	}elseif ($carijml == "Cari") {
		$bulan=$_POST["bulan"];
		$tahun=$_POST["tahun"];
		switch ($bulan) {
			case 1 :
				# code...
				break;
		}
	}
	 ?>	