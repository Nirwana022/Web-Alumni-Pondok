<?php

	include '../db.php ';

	if(isset($_GET['id_hobi'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_hobi_202316 WHERE id_hobi = '".$_GET['id_hobi']."' ");
		echo '<script>window.location="hobi.php"</script>';
	}

?>