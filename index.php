<?php
 session_start();
 include 'db.php';
 if(!isset($_SESSION['login'])){
   header('Location: login_user.php');
 }
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
      <div class="col-lg-10 offset-lg-1 mt-5 mb-5">
      <br><br><br>
        <h1 class="mt-2 mb-5">~SISTEM INFORMASI IKATAN ALUMNI PONDOK PESANTREN AN-NURIYAH~</h1>
      </div>
      <div class="col-lg-12 mb-5" data-aos="flip-left" data-aos-duration="2000">
          <div class="text-center">
                <a href="alumni.php" class="btn btn-lg btn-warning text-white mb-5">READ MORE</a>
          </div>
      </div>
    </div>

  </div>
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