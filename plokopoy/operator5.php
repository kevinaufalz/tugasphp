
<!DOCTYPE html>
<html>
<head>
	<title>Operator 5</title>
</head>
<style type="text/css">
	body{
		background-color: aquamarine;
		font-size: 20px;
	}
	.pilih1,.pilih2,.pilih3,.kirim{
		width: 120px;
		padding: 10px;
		font-weight: bold;
	}
</style>
<body>
	<h3>Logica</h3>
	<form method="post" action="OPlogika.php">
		<table width="60%" border="1">
			<tr>
				<td width="15%" style="padding: 10px; text-align: center;">Operan Kiri</td>
				<td width="15%" style="text-align: center;">Operator</td>
				<td width="15%" style="text-align: center;">Operan Kanan</td>
				<td width="15%"></td>
			</tr>
			<tr>
				<td><select name="kiri" class="pilih1">
					<option value="pilih">Pilih</option>
					<option value="True">True</option>
					<option value="False">False</option>
				</select></td>
				<td><select name="operator" class="pilih2">
					<option value="pilih">pilih</option>
					<option value="and">AND</option>
					<option value="or">OR</option>
					<option value="xor">XOR</option>
					<option value="!">NOT</option>
				</select></td>
				<td><select name="kanan" class="pilih3">
					<option value="pilih">Pilih</option>
					<option value="True">True</option>
					<option value="False">False</option>
				</select></td>
				<td><input type="submit" name="submit" class="kirim"></td>
			</tr>
		</table>
	</form>
</body>
</html>