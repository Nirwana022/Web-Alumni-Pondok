<?php
//  session_start();
include 'db.php';
//  if(!isset($_SESSION['login'])){
//    header('Location: login_user.php');
//  }
$user = mysqli_query($conn,"SELECT*FROM tb_alumni_202316
INNER JOIN tb_angkatan_202316 ON tb_alumni_202316.id_angkatan = tb_angkatan_202316.id_angkatan
                                WHERE id_alumni = '".$_GET['id_alumni']."'
");
// $user = mysqli_query($conn, "SELECT * FROM tb_alumni_202316 WHERE id_alumni = '".$_GET['id_alumni']."' ");
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
    <title>PONDOK PESANTREN</title>


    <!-- Aos animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Link Style Css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Link icons boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
<!-- Navbar -->

<?php
    include 'navbar.php';
?>

<div class="container-fluid" id="content">
  <div class="container">

    <div class="row text-white text-center">
      <div class="col-lg-12 mt-5 mb-3">
          <h3>MY PROFILE</h3>
      </div>
    </div>

    <div class="row gx-2  justify-content-center">

    <div class="col-lg-6">
            <div class="card-body" data-aos="flip-left" data-aos-duration="2000">
    <div class="card" >
            <div class="card-header">
                <h3><i class="bi bi-person-dash-fill"></i> Detail <?php echo $usr['nama'] ?></h3>
            </div>
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
                           <tr>
                                <td>NO HP</td>
                                <td>:</td>
                                <td><?php echo $usr['no_handphone'] ?></td>
                           </tr>
                           <tr>
                                <td>Angkatan</td>
                                <td>:</td>
                                <td><?php echo $usr['angkatan'] ?></td>
                           </tr>
                           <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?php echo $usr['pekerjaan'] ?></td>
                           </tr>
                           <tr>
                                <td>Foto</td>
                                <td>:</td>
                                <td><img src="<?php echo $usr['foto'] ?>" alt="" width="100px" height="100px"></td>
                           </tr>
                           <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><?php echo $usr['password'] ?></td>
                           </tr>
                        </tbody>
                    </table>
                    <center><a href="ubah_profile.php?id_alumni=<?php echo $usr['id_alumni']?>" class="btn btn-primary btn-sm">UBAH DATA</a></center>
                    <br><br>
                    
                </div>
            </div>
        </div>
    </div>

    </div>
  <br><br>
</div>

<?php 
    include 'footer.php';
?>

<!-- Aos animation -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>