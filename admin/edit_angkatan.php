<?php 
// cek jika belom login
session_start();
include '../db.php';
if(!isset($_SESSION['login']))
{
    header("Location: ../login_admin.php");
    exit;
}

$angkatan = mysqli_query($conn, "SELECT * FROM tb_angkatan_202316 WHERE id_angkatan = '".$_GET['id_angkatan']."' ");
if(mysqli_num_rows($angkatan) == 0){
    echo '<script>window.location="angkatan.php"</script>';
}
$ang = mysqli_fetch_object($angkatan);


if(isset($_POST['submit'])){

    // data inputan dari form
    $angkatan 	= $_POST['angkatan'];
   

    // query update data angkatan
    $update = mysqli_query($conn, "UPDATE tb_angkatan_202316 SET 
                            angkatan = '".$angkatan."'
                            WHERE id_angkatan = '".$ang->id_angkatan."' ");

    if($update){
        echo '<script>alert("Ubah data berhasil")</script>';
        echo '<script>window.location="angkatan.php"</script>';
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
           <h3>Form edit data angkatan</h3>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6">
            <!-- Form edit data -->
            <form action="" method="post">
        

        <div class="mb-3">
            <input type="number" class="form-control" name="angkatan" placeholder="Angkatan" autofocus id="angkatan" value="<?php echo $ang->angkatan ?>">
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
