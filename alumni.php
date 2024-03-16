<?php
//  session_start();
//  include 'db.php';
//  if(!isset($_SESSION['login'])){
//    header('Location: login_user.php');
//  }
// ?>
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

    <div class="row text-white text-center py-5">
      <div class="col-lg-12">
          <h3>ALUMNI PONDOK PESANTREN AN-NURIYAH</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 offset-lg-3 mb-3">
          <form action="" method="get">
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Name..." name="name" autofocus>
          <button class="btn btn-outline-success" type="submit" id="button-addon2">Search</button>
        </div>
          </form>
      </div>
    </div>

    <div class="row gx-2">
    <?php 
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            $alumni = mysqli_query($conn, "SELECT  nama, nis, angkatan, foto FROM tb_alumni_202316
            INNER JOIN tb_angkatan_202316 ON tb_alumni_202316.id_angkatan = tb_angkatan_202316.id_angkatan
            WHERE nama LIKE '%$name%'");
        }else{
            $alumni = mysqli_query($conn, "SELECT * FROM tb_alumni_202316
            INNER JOIN tb_angkatan_202316 ON tb_alumni_202316.id_angkatan = tb_angkatan_202316.id_angkatan");
        }
        
        if(mysqli_num_rows($alumni) > 0){
            while($row = mysqli_fetch_array($alumni)){
    ?>
    <div class="col-lg-4 mb-2">
        <div class="card" data-aos="flip-left" data-aos-duration="2000">
            <div class="card-body">
              <center><img src="<?php echo $row['foto']; ?>" alt="Alumni Photo" class="img-fluid mb-2" width="100px" height="100px"></center>
                
                <div class="table-responsive">
                    <small>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?php echo $row['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>NIS</td>
                                    <td>:</td>
                                    <td><?php echo $row['nis'] ?></td>
                                </tr>
                                <tr>
                                    <td>Angkatan</td>
                                    <td>:</td>
                                    <td><?php echo $row['angkatan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>:</td>
                                    <td><?php echo $row['pekerjaan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <?php 
        }
    } else { 
    ?>
    <center><h3 class="text-danger">Tidak ada data alumni dengan nama <strong style="font-style: italic;">"<?php echo $_GET['name'] ?>"</strong></h3></center>
    <br><br><br><br><br>
    <?php 
        } 
    ?>
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