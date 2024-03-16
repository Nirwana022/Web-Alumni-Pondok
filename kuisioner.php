<?php
//  session_start();
//  include 'db.php';
//  if(!isset($_SESSION['login'])){
//    header('Location: login_user.php');
//  }
// 
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

      <div class="row text-white text-center py-5">
        <div class="col-lg-12">
          <h3>ALUMNI PONDOK PESANTREN AN-NURIYAH</h3>
        </div>
      </div>

      <style>
        .title h2 {
          color: white;
          font-weight: bold;
        }
      </style>
      <center>
        <div class="back_re">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="title">
                  <h2>Kuisioner</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </center>
      <div class="contact">
        <div class="container">
          <div class="row d_flex">
            <div class="col-md-6">
              <form class="main_form" action="proseskuisioner.php" method="POST">
                <div class="row">
                  <div class="col-md-12 ">
                    <h5 style="color:#fffacd; font-family:verdana;">Integritas (etika dan moral) : </h5>
                    <INPUT TYPE="RADIO" id="p1" NAME="p1" VALUE="sangat baik" required><i style="color:#fffacd;">Sangat Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p1" VALUE="baik" required> <i style="color:#fffacd;">Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p1" VALUE="cukup" required> <i style="color:#fffacd;">Cukup</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p1" VALUE="kurang" required><i style="color:#fffacd;">Kurang</i>
                  </div>
                  <div class="col-md-12 ">
                    <h5 style="color:#fffacd; font-family:verdana;">Keahlian berdasarkan bidang ilmu (profesionalisme) : </h5>
                    <INPUT TYPE="RADIO" id="P2" NAME="p2" VALUE="sangat baik" required><i style="color:#fffacd;">Sangat Baik</i>
                    <INPUT TYPE="RADIO" id="p2" NAME="p2" VALUE="baik" required> <i style="color:#fffacd;">Baik</i>
                    <INPUT TYPE="RADIO" id="p2" NAME="p2" VALUE="cukup" required> <i style="color:#fffacd;">Cukup</i>
                    <INPUT TYPE="RADIO" id="p2" NAME="p2" VALUE="kurang" required><i style="color:#fffacd;">Kurang</i>
                  </div>
                  <div class="col-md-12 ">
                    <h5 style="color:#fffacd; font-family:verdana;">Keluasan wawasan antar disiplin ilmu : </h5>
                    <INPUT TYPE="RADIO" id="p1" NAME="p3" VALUE="sangat baik" required><i style="color:#fffacd;">Sangat Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p3" VALUE="baik" required> <i style="color:#fffacd;">Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p3" VALUE="cukup" required> <i style="color:#fffacd;">Cukup</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p3" VALUE="kurang" required><i style="color:#fffacd;">Kurang</i>
                  </div>
                  <div class="col-md-12 ">
                    <h5 style="color:#fffacd; font-family:verdana;">Kepemimpinan : </h5>
                    <INPUT TYPE="RADIO" id="p1" NAME="p4" VALUE="sangat baik" required><i style="color:#fffacd;">Sangat Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p4" VALUE="baik" required> <i style="color:#fffacd;">Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p4" VALUE="cukup" required> <i style="color:#fffacd;">Cukup</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p4" VALUE="kurang" required><i style="color:#fffacd;">Kurang</i>
                  </div>
                  <div class="col-md-12 ">
                    <h5 style="color:#fffacd; font-family:verdana;">Kerjasama dalam tim : </h5>
                    <INPUT TYPE="RADIO" id="p1" NAME="p5" VALUE="sangat baik" required><i style="color:#fffacd;">Sangat Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p5" VALUE="baik" required> <i style="color:#fffacd;">Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p5" VALUE="cukup" required> <i style="color:#fffacd;">Cukup</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p5" VALUE="kurang" required><i style="color:#fffacd;">Kurang</i>
                  </div>
                  <div class="col-md-12 ">
                    <h5 style="color:#fffacd; font-family:verdana;">Bahasa asing : </h5>
                    <INPUT TYPE="RADIO" id="p1" NAME="p6" VALUE="sangat baik" required><i style="color:#fffacd;">Sangat Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p6" VALUE="baik" required> <i style="color:#fffacd;">Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p6" VALUE="cukup" required> <i style="color:#fffacd;">Cukup</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p6" VALUE="kurang" required><i style="color:#fffacd;">Kurang</i>
                  </div>
                  <div class="col-md-12 ">
                    <h5 style="color:#fffacd; font-family:verdana;">Komunikasi : </h5>
                    <INPUT TYPE="RADIO" id="p1" NAME="p7" VALUE="sangat baik" required><i style="color:#fffacd;">Sangat Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p7" VALUE="baik" required> <i style="color:#fffacd;">Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p7" VALUE="cukup" required> <i style="color:#fffacd;">Cukup</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p7" VALUE="kurang" required><i style="color:#fffacd;">Kurang</i>
                  </div>
                  <div class="col-md-12 ">
                    <h5 style="color:#fffacd; font-family:verdana;">Penggunaan teknologi informasi : </h5>
                    <<INPUT TYPE="RADIO" id="p1" NAME="p8" VALUE="sangat baik" required><i style="color:#fffacd;">Sangat Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p8" VALUE="baik" required> <i style="color:#fffacd;">Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p8" VALUE="cukup" required> <i style="color:#fffacd;">Cukup</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p8" VALUE="kurang" required><i style="color:#fffacd;">Kurang</i>
                  </div>
                  <div class="col-md-12 ">
                    <h5 style="color:#fffacd; font-family:verdana;">Pengembangan diri : </h5>
                    <INPUT TYPE="RADIO" id="p1" NAME="p9" VALUE="sangat baik" required><i style="color:#fffacd;">Sangat Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p9" VALUE="baik" required> <i style="color:#fffacd;">Baik</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p9" VALUE="cukup" required> <i style="color:#fffacd;">Cukup</i>
                    <INPUT TYPE="RADIO" id="p1" NAME="p9" VALUE="kurang" required><i style="color:#fffacd;">Kurang</i>
                  </div>

                  <div class="col-md-12 ">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                  <div class="col-md-6 col-sm-6">

                  </div>
                </div>
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