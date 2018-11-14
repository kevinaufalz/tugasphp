<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Masukan tanggal lahir</h2>
	<select name="tanggal">
		<?php 
			$tgl=1;
			while ($tgl <= 31) {
				echo "<option value=tahun>$tgl</option>";
				$tgl++;
			}
			?>
	</select>
	<select name="tahun">
		<?php 
			$x=1945;
			while ($x <= 2000) {
			echo "<option value=tahun>$x</option>";
			$x++;
			}
		 ?>
	</select>	
	<select name="bulan">
		<?php 
			$mon = array("1" => "Januari",
						 "2" => "Febuari",
						 "3" => "Maret",
						 "4" => "April",
						 "5" => "Mei",
						 "6" => "Juni",
						 "7" => "Juli",
						 "8" => "Agustus",
						 "9" => "September",
						 "10" => "Oktober",
						 "11" => "November",
						 "12" => "Desember");
			$i=1;
			while ( $i <= 12) {
				echo '<option value="'.$mon[$x].'">'.$mon[$x].'</option>';
				$x=$x+1;
			}
					 ?>
	</select>
</body>
</html>