<?php 
// cek jika belom login
session_start();
include '../db.php';
if(!isset($_SESSION['login']))
{
    header("Location: ../login_admin.php");
    exit;
}

$user = mysqli_query($conn, "SELECT * FROM tb_user_202316 WHERE id_user = '".$_GET['id_user']."' ");
if(mysqli_num_rows($user) == 0){
    echo '<script>window.location="user.php"</script>';
}
$usr = mysqli_fetch_array($user);

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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

    <div class="row mt-5">
        <div class="col-lg-6">
        
        <div class="card">
            <div class="card-header">
                <h3><i class="bi bi-person-dash-fill"></i> Detail <?php echo $usr['nama'] ?></h3>
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table table-striped">
                        <tbody>
                           <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?php echo $usr['nama'] ?></td>
                           </tr>
                           <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo $usr['alamat'] ?></td>
                           </tr>
                           <tr>
                                <td>Tanggal lahir</td>
                                <td>:</td>
                                <td><?php echo $usr['tanggal_lahir'] ?></td>
                           </tr>
                           <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $usr['email'] ?></td>
                           </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>
    </div>

    


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
