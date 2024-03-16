<?php

	include '../db.php ';

	if(isset($_GET['id_alumni'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_alumni_202316 WHERE id_alumni = '".$_GET['id_alumni']."' ");
		echo '<script>window.location="alumni.php"</script>';
	}

?>