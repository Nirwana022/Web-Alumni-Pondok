<?php

		$host="localhost";
        $user="root";
        $pass="";
        $database="db_alumni";
        $mysqli= new mysqli ($host,$user,$pass,$database);
        //Object Oriented Style $mysqli -> new mysqli(host, username, password, dbname, port, socket)

                //check connection
                if ($mysqli -> connect_errno) {
                    trigger_error("Failed to connect to MYSQL: " . $mysqli, E_USER_NOTICE);
                    //trigger_error(message, type)
                }

        $filename = "data-kuisioner(".date('d-m-Y').").xls";

        header("content-disposition: attachment; filename=$filename");
        header("content-type: application/vdn.ms-excel");

?>

<h2> Data Kuisioner </h2>

<table border="1">
	<tr>
		<th>No</th>
		<th>Integritas (etika dan moral)</th>
		<th>Keahlian berdasarkan bidang ilmu(profesionalisme)</th>
		<th>Keluasan wawasan antar disiplin ilmu</th>
		<th>Kepemimpinan</th>
		<th>Kerjasama dalam tim</th>
		<th>Bahasa asing</th>
		<th>Komunikasi</th>
		<th>Penggunaan teknologi informasi</th>
		<th>Pengembangan diri</th>
	</tr>

	<?php
		$mahasiswa = $mysqli->query("SELECT * FROM tb_kuisioner_202316 ");
		$no = 0;
		while( $m = $mahasiswa->fetch_assoc()){
		$no++;
	?>

	<tr>
        <th scope="row"><?= $no; ?></th>
		<td><?= $m["p1"]; ?></td>
		<td><?= $m["p2"]; ?></td>
		<td><?= $m["p3"]; ?></td>
		<td><?= $m["p4"]; ?></td>
		<td><?= $m["p5"]; ?></td>
		<td><?= $m["p6"]; ?></td>
		<td><?= $m["p7"]; ?></td>
		<td><?= $m["p8"]; ?></td>
		<td><?= $m["p9"]; ?></td>
										  
		<?php } ?>
        </tr>
</table>