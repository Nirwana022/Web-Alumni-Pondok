<?php

	include '../db.php ';

	if(isset($_GET['id_angkatan'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_angkatan_202316 WHERE id_angkatan = '".$_GET['id_angkatan']."' ");
		echo '<script>window.location="angkatan.php"</script>';
	}

?>