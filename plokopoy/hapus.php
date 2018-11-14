<?php 
	
	require 'function.php';

	$id=$_GET["id"];

	if (hapus($id) > 0 ) {
				echo "
						<script>
							alert('Data Dihapus!');
							document.location.href='database.php'
						</script>
					";
			}else{
				 echo "
				 	<script>
				 		alert('Data Gagal Dihapus!');
				 		document.location.href='database.php'
					</script>
				";
			}
 ?>