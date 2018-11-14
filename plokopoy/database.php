<?php 
	require 'function.php';
	$mahasiswa = query("SELECT * FROM tbl_mhs");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabel Mahasiswa</title>
</head>
<body>
	<h2>Daftar Mahasiswa</h2>
	<a href="tambahdata.php">Tambah</a>
	<br>
	<table width="70%" border="1" cellpadding="5" cellspacing="0">
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $isidata) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $isidata["id_mhs"]; ?></td>
			<td><?php echo $isidata["nama_mhs"]; ?></td>
			<td><?php echo $isidata["jenis_kelamin"]; ?></td>
			<td><?php echo $isidata["tgl_lahir"]; ?></td>
			<td><?php echo $isidata["alamat"]; ?></td>
			<td><a href="">Ubah</a>| <a href="hapus.php?id=<?php echo $isidata["id_mhs"]; ?>" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>
</html>