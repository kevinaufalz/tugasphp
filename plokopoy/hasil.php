<?php 
	if (isset($_POST['input'])) {
		$nama1=$_POST['nama1'];
		$nama2=$_POST['nama2'];
		$nama3=$_POST['nama3'];
		$nama4=$_POST['nama4'];
		$nama5=$_POST['nama5'];

		echo "Nama Sahabat ku:";
		echo $nama1.'<br>';
		echo $nama2.'<br>';
		echo $nama3.'<br>';
		echo $nama4.'<br>';
		echo $nama5.'<br>';
	}	 
?>
<!-- Login -->
<?php 
	if (isset($_POST['login'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];

		if ($user == "username" && $pass == "123") {
			echo "<h2>Login Berhasil!</h2>";
		}else{
			echo "<h2>Login Gagal :( </h2>";
		}
	}
 ?>
 <!-- Checkbox -->
 <?php 
 	if (isset($_POST['pilih'])) {
 		$jurusan = $_POST['jurusan'];
 		echo "Jurusan anda adalah <b><font color='red'>$jurusan</font></b>";		
 	}
  ?>
  <!-- Radio -->
  <?php 
  		if (isset($_POST['band'])) {
  			echo "Band Favorit Anda adalah : <br>";
  			if (isset($_POST['band1'])) { echo "+".$_POST['band1']."<br>";}
  			if (isset($_POST['band2'])) { echo "+".$_POST['band2']."<br>";}
  			if (isset($_POST['band3'])) { echo "+".$_POST['band3']."<br>";}
  			if (isset($_POST['band4'])) { echo "+".$_POST['band4']."<br>";}
  		}
   ?>