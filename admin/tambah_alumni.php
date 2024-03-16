<?php 
// cek jika belom login
session_start();
include '../db.php';
if(!isset($_SESSION['login']))
{
    header("Location: ../login_admin.php");
    exit;
}

if(isset($_POST['submit'])){

        $nama 	= $_POST['nama'];
        $nis 	= $_POST['nis'];
        $alamat 	= $_POST['alamat'];
        $tanggal_lahir 	= $_POST['tanggal_lahir'];
        $no_handphone 	= $_POST['no_handphone'];
        $email 	= $_POST['email'];
        $id_angkatan 	= $_POST['id_angkatan'];
        $pekerjaan 	= $_POST['pekerjaan'];
        $foto = $_FILES['foto']['name'];
        $tmpFoto = $_FILES['foto']['tmp_name'];
        $folderTujuan = "uploads/";
        $pathGambar = $folderTujuan . $foto;
        move_uploaded_file($tmpFoto, $pathGambar);
        $insert = mysqli_query($conn, "INSERT INTO tb_alumni_202316 VALUES('', '$nama', '$nis', '$alamat', '$tanggal_lahir', '$no_handphone', '$email', '$id_angkatan', '$pekerjaan','$pathGambar','')");

        if($insert){
            echo '<script>alert("Tambah data berhasil")</script>';
            echo '<script>window.location="alumni.php"</script>';
        }else{
            echo 'Gagal'.mysqli_error($conn);
        }

    }


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>PONDOK PESANTREN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<?php
    include 'header.php';
?>

<div class="container-fluid">
  <div class="row">
    
  <?php
    include 'sidebar.php';
  ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, <?php echo $_SESSION['a_global']->nama ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
           <h3>Form tambah data alumni</h3>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6">
            <!-- Form tambah data -->
        <form action="" method="post">
        

        <div class="mb-3">
            <input type="text" class="form-control" name="nama" placeholder="Nama" autofocus id="nama">
        </div>

        <div class="mb-3">
            <input type="number" class="form-control" name="nis" placeholder="Nis" autofocus id="nis">
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" autofocus id="alamat">
        </div>

        <div class="mb-3">
            <input type="date" class="form-control" name="tanggal_lahir" autofocus id="tanggal_lahir">
        </div>

        <div class="mb-3">
            <input type="number" class="form-control" name="no_handphone" placeholder="No. Handphone" autofocus id="no_handphone">
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" name="email" placeholder="Email" autofocus id="email">
        </div>


        <div class="mb-3">
        <select class="form-select" name="id_angkatan">
            <option selected>Pilih angkatan</option>
        <?php 
			    $angkatan = mysqli_query($conn, "SELECT * FROM tb_angkatan_202316");
			    if(mysqli_num_rows($angkatan) > 0){
				while($row = mysqli_fetch_array($angkatan)){
		?>
				<option value="<?php echo $row['id_angkatan'] ?>"><?php echo $row['angkatan'] ?></option>
				<?php }}else{ ?>
                            <p>Tidak ada angkatan</p>
				<?php } ?>
        </select>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" autofocus id="pekerjaan">
        </div>
        <div class="mb-3">
        <input type="file" class="form-control" id="foto" name="foto">
        </div>
        
        <div class="mb-3">
            <button type="submit" class="btn btn-warning w-50" id="registrasi" name="submit">SUBMIT</button>
            <button type="reset" class="btn btn-danger" id="reset" name="reset">RESET</button>
        </div>

    </form>
            <!-- End form -->
        </div>
    </div>

      </div>
    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="js/dashboard.js"></script>
  </body>
</html>
