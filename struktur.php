<?php
//  session_start();
include 'db.php';
//  if(!isset($_SESSION['login'])){
//    header('Location: login_user.php');
//  }

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
  <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            margin-bottom: 5px;
        }
    </style>
  <body>
<!-- Navbar -->

<?php
    include 'navbar.php';
?>

<div class="container-fluid" id="content">
  <div class="container">

    <div class="row text-white text-center">
      <div class="col-lg-12 mt-5 mb-3">
          <h3>Susunan Pengurus Ikatan Alumni Pondok Pesantren An-Nuriyah Bontocini</h3>
          <h2>Tahun 2021-2021</h2>
      </div>
    </div>

    <div class="row gx-2 justify-content-center">

    <div class="col-lg-8">
            <div class="card-body" data-aos="flip-left" data-aos-duration="2000">
    <div class="card p-5 text-center">
           
    <h3>Ketua Umum:</h3>
    <p>Satriana Ningsih, S.Sos</p>

    <h3>Wakil Ketua:</h3>
    <p>Ibnu Mundzir, S.Pd</p>

    <h3>Sekretaris Umum:</h3>
    <p>Rahmat Ridwan, S.Pd</p>

    <h3>Wakil Sekretaris:</h3>
    <p>Mawahda Warahma, S.Sos</p>

    <h3>Bendahara Umum:</h3>
    <p>Sulhijrah Bola S, S.Pd</p>

    <h3>Wakil Bendahara:</h3>
    <p>Nurhaerati, S.Si</p>

    <h3>Departemen Pengembangan Organisasi:</h3>
    <p>Kepala Departemen: Abdul Salam, ST</p>
    <ul>
        <li list-style-type: none;>Fajriani Islamiyah, S.Pd</li>
        <li>Nurhwahyuni, S.Pd</li>
        <li>Rani R</li>
        <li>Annisa Mutiara Burhani</li>
        <li>Rahmat</li>
        <li>Muhammad Azhar Anwar</li>
        <li>Azizah Mutmainnah Sereang</li>
    </ul>

    <h3>Departemen Pemberdayaan Perempuan:</h3>
    <p>Kepala Departemen: Suriyanti S.Ag</p>
    <ul>
        <li>Nurfadilah, S.Pd</li>
        <li>Fitriana</li>
        <li>Mawadda Warahma</li>
        <li>Istiqomatul Fajriah</li>
        <li>Rinianti</li>
        <li>Suriani</li>
    </ul>

    <h3>Departemen Humas dan Dakwah:</h3>
    <p>Kepala Departemen: Mutakdir, S.Ag., M.Ag</p>
    <ul>
        <li>Riska Aulia, S.S</li>
        <li>Syuhrilaeni, S.Hum</li>
        <li>Muhammad Ardi Rahman</li>
        <li>Khaerul Anwar, S.Pd</li>
        <li>Ahmad Basiruddin Lomba</li>
        <li>Nurasia</li>
    </ul>

    <h3>Departemen Ekonomi dan Wakaf:</h3>
    <p>Kepala Departemen: Sulaeman Nun, S.Ag</p>
    <ul>
        <li>Ramlah, S.P</li>
        <li>Dewi Syinta Taufik, S.Hum</li>
        <li>Astriana, A.Md., Pjk</li>
        <li>Dewi Rahayu Utami</li>
        <li>Ummu Khair Raming, SH</li>
        <li>Muh. Akmal Al-Hasbi</li>
        <li>Nurwahdawiyyah</li>
    </ul>

    <h3>Departemen Ilmu Pengetahuan dan Teknologi:</h3>
    <p>Kepala Departemen: Akbar Nur</p>
    <ul>
        <li>Muhammad Rahmat Khaidir</li>
        <li>Lintang Dyah Ayu Pangukir</li>
        <li>Latifatul Isyarah</li>
        <li>Siti Fatmawati</li>
        <li>Maisyarah</li>
        <li>Putri Erni Endrawati Rahman</li>
    </ul>
    </div>
    </div>

    </div>
  <br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>
<br><br>

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