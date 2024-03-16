<?php
session_start();
include 'db.php';

//Jika sudah Login
if(isset($_SESSION['login'])){
    echo '<script>window.location="index.php"</script>';
}

 // Prose login User
 if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $cek = mysqli_query($conn, "SELECT * FROM tb_alumni_202316 WHERE email = '".$email."' AND password = '".$password."'");
    if(mysqli_num_rows($cek) > 0){
        $d = mysqli_fetch_object($cek);
        $_SESSION['login'] = true;
        $_SESSION['a_global'] = $d;	
        echo '<script>window.location="index.php"</script>';
    }else{
        echo '<script>alert("Username atau password Anda salah!")</script>';
    }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PONDOK PESANTREN</title>

    <style>
        #card {
            box-shadow: 0px 3px 33px rgba(0, 0, 0, 0.8);
        }
    </style>

    <!-- Link icons boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body class="bg-light">
<!-- Navbar -->

<div class="container-fluid">
      <div class="container">

      <div class="row text-center">
            <div class="col-lg-12 mt-5">
            <h3 class="mt-5">FORM LOGIN USER</h3>
            </div>
      </div>

      <div class="row mt-3">
          <div class="col-lg-4 offset-lg-4 mb-5">
            <div class="card p-5" id="card">
                <!-- Form Login Admin -->
                <form action="" method="post">
                <div class="mb-1">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email...">
                </div>
                <div class="mb-3">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password...">
                </div>
                <div>
                    <button class="btn btn-warning w-100" type="submit" name="submit">LOGIN</button>
                </div>
                </form>
                <!-- End Form -->
                <div class="text-center mt-5">
                <small><p>Belom punya akun? <a href="registrasi.php" class="text-decoration-none">Registrasi</a></p></small>
                </div>
                <div class="text-center">
                <small><p>Login Admin <a href="login_admin.php" class="text-decoration-none">Login Admin</a></p></small>
                </div>
            </div>
          </div>
      </div>

      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>