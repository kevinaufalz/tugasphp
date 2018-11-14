<?php 
	// koneksi ke database
	$connect = mysqli_connect("localhost","root","","mahasiswa");

	function query ($query) {
		global $connect;
		$result = mysqli_query($connect, $query);
		$baris = [];
		while ( $isidata = mysqli_fetch_assoc($result)) {
			$baris[] = $isidata;
		}
		return $baris;
	}

	function tambah($data){
		global $connect;
		$id_mhs = htmlspecialchars($data["id_mhs"]);
		$nama_mhs = htmlspecialchars($data["nama_mhs"]);
		$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
		$tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
		$alamat = htmlspecialchars($data["alamat"]);

		$insert = "INSERT INTO tbl_mhs VALUES ('$id_mhs','$nama_mhs','$jenis_kelamin','tgl_lahir','alamat')";
		mysqli_query($connect,$insert); 
		return mysqli_affected_rows($connect);
	}

	function hapus($id){
		global $connect;
		mysqli_query($connect,"DELETE FROM tbl_mhs WHERE id_mhs = $id");
		return mysqli_affected_rows($connect);
	}
 ?>