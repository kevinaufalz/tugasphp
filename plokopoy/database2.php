<?php 
	// koneksi ke database
	$data = mysqli_connect("localhost","root","","mahasiswa");
	// Ambil database
	$result =mysqli_query($data,"SELECT * FROM tbl_mhs");
	// ambil data (fetch) dari table database
	// mysqli_fetch_row() = mengembalikan hasil numerik / angka
	// mysqli_fetch_assoc() = mengembalikan array asosiatif / string
	// mysqli_fetch_array() = mengembalikan keduanya
	// mysqli_fetch_object()

	// while ( $isi = mysqli_fetch_assoc($result) ){
	// var_dump( $isi ); 
	//  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabel Mahasiswa</title>
</head>
<body>
	<h2>Daftar Mahasiswa</h2>
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
		<?php while ( $isidata = mysqli_fetch_assoc($result) ) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $isidata["id_mhs"]; ?></td>
			<td><?php echo $isidata["nama_mhs"]; ?></td>
			<td><?php echo $isidata["jenis_kelamin"]; ?></td>
			<td><?php echo $isidata["tgl_lahir"]; ?></td>
			<td><?php echo $isidata["alamat"]; ?></td>
			<td><a href="">Ubah</a>| <a href="">Hapus</a></td>
		</tr>
		<?php $i++; ?>
		<?php endwhile; ?>
	</table>
</body>
</html>