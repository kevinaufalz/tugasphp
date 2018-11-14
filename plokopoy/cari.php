
<!DOCTYPE html>
<html>
<head>
	<title>Search Box</title>
</head>
<style type="text/css">
	body{
		background-color: aquamarine;
	}
	table{
		padding-top: 35px;
		padding-left: 80px;
	}
	.bar-search{
		height: 25px;
		border: solid 2px darkgrey;
		padding: 2px;
		font-size: 20px;
	}
	.tombol{
		width: 70px;
    	height: 33px;
    	font-size: 17px;
    	background-color: ghostwhite;
    	border-radius: 1px;
    	border: solid 2px grey;
    	padding:4px;
	}
	.isi{
		background-color: white;
		padding: 10px;
		width: 30%;
		margin-left:45px;
		border:solid 2px lightgrey;
	}
</style>
<body>
	<form method="post" action="">
		<table width="50%" border="0" cellspacing="0">
			<tr>
				<td width="5%"><input type="text" name="cari" autofocus autocomplete="off" placeholder="Search" class="bar-search"></td>
				<td width="25%"><input type="submit" name="search" class="tombol" value="Search"></td>
			</tr>
			<tr>
				<td width="5%"><input type="text" name="ganti" autofocus autocomplete="off" placeholder="Sebelum" class="bar-search replace"></td>
				<td width="5%"><input type="text" name="ganti2" autofocus autocomplete="off" placeholder="Sesudah" class="bar-search replace"></td>
				<td width="25%"><input type="submit" name="replace" class="tombol" value="Replace"></td>
			</tr>
		</table>
	</form>
	<br>
	<div class="isi">
		<?php 
			$lagu ="Indonesia tanah airku tanah tumpah darahku disanalah aku berdiri Jadi pandu ibuku Indonesia kebangsaanku bangsa dan tanah airku marilah kita berseru Indonesia bersatu hiduplah tanahku
				hiduplah negriku bangsaku rakyatku semuanya bangunlah jiwanya bangunlah badannya untuk Indonesia Raya Indonesia Raya Merdeka Merdeka tanahku negriku yang kucinta Indonesia Raya Merdeka Merdeka hiduplah Indonesia Raya Indonesia Raya Merdeka Merdeka tanahku negriku yang kucinta Indonesia Raya Merdeka Merdeka tiduplah Indonesia Raya";
			$cari=$_POST["cari"];
			$sblm=$_POST["ganti"];
			$ssdh=$_POST["ganti2"];
			$lagu2=explode(" ", $lagu);
			// Mencari
			for ($i=0;$i<count($lagu2); $i++) { 
				if ($lagu2[$i] == $cari) {
					echo $lagu2[$i] =" "."<span style=background-color:skyblue;><b> ".$cari." </b></span>"." ";
				}elseif($lagu2[$i] == $sblm) {
					$hasil = str_replace($sblm, $ssdh, $lagu2[$i]);
					echo $hasil." ";
				}else{
					echo $lagu2[$i]." ";
				}
				
			}

			
		 ?>
	 </div>
</body>
</html>