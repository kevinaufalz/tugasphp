<?php 
	require 'function.php';
	if ( isset($_POST["submit"]) ) {
			if (tambah($_POST) > 0 ) {
				echo "
						<script>
							alert('Data Berhasil!');
							document.location.href='database.php'
						</script>
					";
			}else{
				echo "
						<script>
							alert('Data Gagal!');
							document.location.href='database.php'
						</script>
					";
			}
		}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body style="padding-top: 20px">
	<form action="" method="post">
		<table align="center" cellspacing="0">
			<tr>
				<td><label for="id_mhs">ID Mahasiswa</label></td>
				<td><input type="text" name="id_mhs" id="id_mhs" placeholder="5511--" required></td>
			</tr>
			<tr>
				<td><label for="nama_mhs">Nama Mahasiswa</label></td>
				<td><input type="text" name="nama_mhs" id="nama_mhs" placeholder="Kevin" required></td>
			</tr>
			<tr>
				<td><label for="jenis_kelamin">Jenis Kelamin</label></td>
				<td><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" required>Laki-Laki <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td><label for="tgl_lahir">Tanggal Lahir</label></td>
				<td><input type="text" name="tgl_lahir" id="tgl_lahir" placeholder="tahun-bulan-tanggal" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center" style="color:darkgrey;"><i>*contoh : 2000-02-01</i></td>
			</tr>
			<tr>
				<td><label for="alamat">Alamat</label></td>
				<td><textarea name="alamat" id="alamat" required></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <button type="submit" name="submit"> Tambah </button></td>
			</tr>
		</table>
	</form>
</body>
</html>