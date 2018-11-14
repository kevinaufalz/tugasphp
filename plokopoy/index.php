<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP Tugas 1</title>
	<style type="text/css">
		body{
			background:linear-gradient(to right, wheat,blanchedalmond);
			font-size: 20px;
		}
		form{
			position: absolute;
		}
		.list{
			list-style-type: square;
			float: right;
			padding-right: 500px;
			margin-top: -25px;
		}
		.akhir{
			float: right;
			padding-right: 190px;
		}
		p{
			background-color: lightgrey;
			padding:8px;
			border:2px solid darkgrey;
			width: 600px;
		}
	</style>
</head>

<body>
	<?php echo "<h3>Daftar</h3>"; 
	echo "
		<form class=daftar actionindex.php method=get>
			<table width=35% border=1 cellpadding=3 cellspacing=3>
				<tr>
					<td width=30%>Nama Lengkap</td>
					<td width=1%><input type=text name=nama></td>
				</tr>
				<tr>
					<td width=30%>Username</td>
					<td width=1%><input type=text name=username></td>
				</tr>
				<tr>
					<td width=30%>Password</td>
					<td width=1%><input type=Password name=Password></td>
				</tr>
				<tr>
					<td width=30%>Password sekali lagi</td>
					<td width=1%><input type=Password name=Password></td>
				</tr>
				<tr>
					<td width=30%></td>
					<td width=1%><input type=submit name=submit value=Submit style=padding: 5px;font-size: 15px;><button type=reset name=button style=padding: 5px;font-size: 15px;>Reset</button></td>
				</tr>
			</table>
		</form>";?>
	<?php echo "<ol class=list>
				<li>Membuat Sambungan data base</li><br>
				<li>Memilih database</li><br>
				<li>Membuat Query</li><br>
				<li>Menjalankan Query</li><br>
				<li>Mengambil hasilnya</li><br>
				<li>Memproses hasilnya</li>
				</ol>";?>
		<div class="akhir">
				Query yang di gunakan adalah :<br>
				<p>SELECT * FROM UserTable WHERE Username 'input dari user'</p>
				Query ini akna dimasukan ke dalam script menjadi : <br>
				<p>$query = SELECT * FROM UserTable WHERE Username 'login'</p>
				Dan di eksekusi dengan kode :<br>
				<p>$hasil = mysql_query($query)</p>
		</div>
	 <br>
</body>
</html>