<!DOCTYPE html>
<html>
<head>
	<title>Login here</title>
</head>
<body>
	<form method="post" name="input" action="hasil.php">
		Sahabat - Sahabatku<br>
		<input type="text" name="nama1" style="background-color: azure; padding: 3px; border-radius: 5px;"><br>
		<input type="text" name="nama2" style="background-color: azure; padding: 3px; border-radius: 5px;"><br>
		<input type="text" name="nama3" style="background-color: azure; padding: 3px; border-radius: 5px;"><br>
		<input type="text" name="nama4" style="background-color: azure; padding: 3px; border-radius: 5px;"><br>
		<input type="text" name="nama5" style="background-color: azure; padding: 3px; border-radius: 5px;"><br>
		<input type="submit" name="input" value="Masukan">
	</form>
	<hr>
	<form action="hasil.php" method="post" name="input">
		<h2>Login here!</h2>
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="login" value="Login">
		<input type="reset" name="reset" value="Reset">
	</form>
	<hr>
	<form action="hasil.php" method="post" name="pilih">
		<input type="radio" name="jurusan" value="TI" checked>Tekhnik Informatika <br>
		<input type="radio" name="jurusan" value="SI">Sistem Informasi <br>
		<input type="radio" name="jurusan" value="SK">Sistem Komputer <br>
		<input type="radio" name="jurusan" value="KA">Komputerisasi Akutansi <br>
		<input type="submit" name="pilih" value="Pilih">
	</form>
	<hr>
	<form action="hasil.php" method="post" name="band">
		<input type="checkbox" name="band1" value="Padi">Padi <br>
		<input type="checkbox" name="band2" value="Sheila On 7">Sheila On 7 <br>
		<input type="checkbox" name="band3" value="Dewa 19">Dewa 19 <br>
		<input type="checkbox" name="band4" value="Ungu">Ungu <br>
		<input type="submit" name="band" value="Pilih">
	</form>
	<hr>
	<form action="hasil.php" name="pilihan" method="post">
		<h2>Pilih Fiml Kartun Favorit Anda : </h2>
		<select name="kartun">
			<option value="Sponge Bob"> Sponge Bob</option>
			<option value="Sinchan"> Sinchan</option>
			<option value="Conan"> Conan</option>
			<option value="Doraemon"> Doraemon</option>
			<option value="Dragon Ball"> Dragon Ball</option>
			<option value="Naruto"> Naruto</option>
		</select>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>