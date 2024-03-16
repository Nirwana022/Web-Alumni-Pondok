<?php

	include '../db.php ';

	if(isset($_GET['id'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_loker_202316 WHERE id = '".$_GET['id']."' ");
		echo '<script>window.location="loker.php"</script>';
	}

?>