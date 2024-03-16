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
          <h3>LOKER YANG TERSEDIA SAAT INI</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 offset-lg-2 mb-3">
          <form action="" method="get">
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Silahkan cari loker..." name="title" autofocus>
          <button class="btn btn-outline-success" type="submit" id="button-addon2">Serach</button>
        </div>
          </form>
      </div>
    </div>

    <div class="row gx-2">
    <?php 
							
              if(isset($_GET['title'])){
                  $title = $_GET['title'];
                  $loker = mysqli_query($conn, "SELECT * FROM tb_loker_202316
                                                  WHERE title LIKE '%$title%'
                  ");
              }else{
                $loker = mysqli_query($conn, "SELECT * FROM tb_loker_202316
               ");
              }
							if(mysqli_num_rows($loker) > 0){
							while($row = mysqli_fetch_array($loker)){
						?>
						
            <div class="col-lg-8 offset-lg-2 mb-2">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title'] ?></h5>
                    <p class="card-text">Provinsi : <?php echo $row['provinsi'] ?></p>
                    <p class="card-text">Syarat : <?php echo $row['syarat'] ?></p>
                    <p class="card-text">Type : <?php echo $row['tipe'] ?></p>
                    <p class="card-text">Mulai pendaftran : <?php echo $row['mulai'] ?></p>
                    <p class="card-text">Akhir pendaftaran : <?php echo $row['akhir'] ?></p>
                    <a href=" <?php echo $row['link'] ?>" class="btn btn-primary">Daftar</a>
                </div>
                </div>
            </div>
					
						<?php }}else{ ?>
							
              <center><h3 class="text-danger">Tidak ada data loker <strong style="font-style: italic;">"<?php echo $_GET['name'] ?>"</strong></h3></center>
              <br><br><br><br><br>

						<?php } ?>
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