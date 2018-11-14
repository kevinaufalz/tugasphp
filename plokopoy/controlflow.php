<!DOCTYPE html>
<html>
<head>
	<title>Control Flow</title>
</head>
<body>
	<form method="post" action="kelamin.php">
		<table width="60%" border="0" cellspacing="1">
			<tr>
				<td width="5%">Nama</td>
				<td width="10%"><input type="text" name="nama" autofocus autocomplete="off"></td>
				<td width="10%">Jenis Kelamin </td>
				<td width="15%"><input type="radio" name="radios" value="Pria">Pria<input type="radio" name="radios" value="Wanita">Wanita</td>
			</tr>
			<tr>
				<td width="5%">Nama</td>
				<td width="10%"><input type="text" name="nama2"></td>
				<td width="10%">Jenis Kelamin </td>
				<td width="15%"><input type="radio" name="radios2" value="Pria">Pria<input type="radio" name="radios2" value="Wanita">Wanita</td>
			</tr>
			<tr>
				<td width="5%">Nama</td>
				<td width="10%"><input type="text" name="nama3"></td>
				<td width="10%">Jenis Kelamin </td>
				<td width="15%"><input type="radio" name="radios3" value="Pria">Pria<input type="radio" name="radios3" value="Wanita">Wanita</td>
			</tr>
			<tr>
				<td width="5%">Nama</td>
				<td width="10%"><input type="text" name="nama4"></td>
				<td width="10%">Jenis Kelamin </td>
				<td width="15%"><input type="radio" name="radios4" value="Pria">Pria<input type="radio" name="radios4" value="Wanita">Wanita</td>
			</tr>
			<tr>
				<td colspan="4" align="center"><input type="Submit" name="submit" value="Kirim"></td>
			</tr>
			<!-- PERBANDINGAN 3 NILAI -->
			<tr>
				<td><input type="text" name="nilai" autocomplete="off" autofocus placeholder="Nilai 1"></td>
				<td><input type="text" name="nilai2" autocomplete="off" autofocus placeholder="Nilai 2"></td>
				<td><input type="text" name="nilai3" autocomplete="off" autofocus placeholder="Nilai 3"></td>
			</tr>
			<tr>
				<td><td colspan="3" align="center"><input type="Submit" name="hitung" value="Hitung"></td></td>
			</tr>
			<tr>
				<td>Bulan :</td>
				<td><input type="text" name="bulan"></td>
				<td>Tahun :</td>
				<td><input type="text" name="tahun"></td>
			</tr>
			<tr>
				<td><td colspan="2" align="center"><input type="Submit" name="cari" value="Cari"></td></td>
			</tr>
		</table>
	</form>
</body>
</html>