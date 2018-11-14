<?php 
		$var1 =$_POST["angka1"];
		$var2 =$_POST["angka2"]; 

		if ($var1 > $var2) {
			echo "$var1 > $var2 <br>";
			echo "<b>TRUE</b>";
		}else{
			echo "$var1 > $var2 <br>";
			echo "FALSE";
		}
	 ?>