<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table width="25%" cellspacing="0">
		<tr>
			<td width="10%" style="color: white;background-color: green;">Nomor</td>
			<td width="15%" style="color: white;background-color: green; ">Keterangan</td>
		</tr>
		<tr>
			<td width="10%" style="color: white;"><?php 
				for ($i=1; $i < 11; $i++) { 
					echo "<div style=background-color:green;>$i<br></div>";
				}?></td>
			<td width="15%"><?php
				for ($i=1; $i < 6; $i++) { 
			 		echo "<div style=background-color:lightblue;>Laki-laki<br></div>";
			 		for ($x=0; $x < 1; $x++) { 
			 			echo "<div style=background-color:skyblue;>Perempuan<br></div>";
			 		}
			 } ?></td>
		</tr>
	</table>
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
		<select name="tanggal">
			<?php 
				$tgl=1;
				while ($tgl <= 31) {
					echo "<option value=tahun>$tgl</option>";
					$tgl++;
				}
			 ?>
		</select>
</body>
</html>