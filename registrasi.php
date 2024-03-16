<?php
if (isset($_POST['submit'])) {
  include 'db.php';
  $nama   = $_POST['nama'];
  $nis   = $_POST['nis'];
  $alamat   = $_POST['alamat'];
  $tanggal_lahir   = $_POST['tanggal_lahir'];
  $no_handphone   = $_POST['no_handphone'];
  $email   = $_POST['email'];
  $id_angkatan   = $_POST['id_angkatan'];
  $pekerjaan   = $_POST['pekerjaan'];
  $foto = $_FILES['foto']['name'];
  $tmpFoto = $_FILES['foto']['tmp_name'];
  $folderTujuan = "img/";
  $pathGambar = $folderTujuan . $foto;
  move_uploaded_file($tmpFoto, $pathGambar);
  $password = $_POST['password'];
  $insert = mysqli_query($conn, "INSERT INTO tb_alumni_202316 VALUES('', '$nama', '$nis', '$alamat', '$tanggal_lahir', '$no_handphone', '$email', '$id_angkatan', '$pekerjaan','$pathGambar', '$password')");
  if ($insert) {
    echo '<script>alert("Tambah data berhasil")</script>';
    echo '<script>window.location="login_user.php"</script>';
  } else {
    echo 'Gagal' . mysqli_error($conn);
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-light">

  <div class="container-fluid">
    <div class="container">

      <div class="row text-center">
        <div class="col-lg-12 mt-5">
          <h3>FORM REGISTRASI USER</h3>
        </div>
      </div>


      <div class="col-lg-6 offset-lg-3 mb-5 mt-3">
        <div class="card p-5" id="card">
          <!-- Form Login Admin -->
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-1">
              <input type="text" id="nama" name="nama" placeholder="Masukan Nama" required class="form-control">
            </div>
            <div class="mb-1">
              <input type="text" id="nama" name="nis" placeholder="Masukan NIS" required class="form-control">
            </div>
            <div class="mb-1">
              <input type="text" id="alamat" name="alamat" placeholder="Masukan Alamat" required class="form-control">
            </div>

            <div class="mb-1">
              <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal lahir" required class="form-control">
            </div>

            <div class="mb-1">
              <input type="email" id="email" name="email" placeholder="Masukan Email" required class="form-control">
            </div>
            <div class="mb-1">
              <input type="number" id="email" name="no_handphone" placeholder="Masukan Nomor Hp" required class="form-control">
            </div>
            <div class="mb-3">
              <select class="form-select" name="id_angkatan">
                <option selected>Pilih angkatan</option>
                <?php
                include 'db.php';
                $angkatan = mysqli_query($conn, "SELECT * FROM tb_angkatan_202316");
                if (mysqli_num_rows($angkatan) > 0) {
                  while ($row = mysqli_fetch_array($angkatan)) {
                ?>
                    <option value="<?php echo $row['id_angkatan'] ?>"><?php echo $row['angkatan'] ?></option>
                  <?php }
                } else { ?>
                  <p>Tidak ada angkatan</p>
                <?php } ?>
              </select>
            </div>
            <div class="mb-1">
              <input type="text" id="email" name="pekerjaan" placeholder="Masukan Pekerjaan" required class="form-control">
            </div>
            <div class="mb-3">
              <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <div class="mb-3">
              <input type="password" id="password" name="password" placeholder="Buat Password" required class="form-control">
            </div>

            <div>
              <button class="btn btn-warning w-100" type="submit" name="submit">REGISTRASI</button>
            </div>

          </form>
          <!-- End Form -->
          <div class="text-center mt-5">
            <small>
              <p>Sudah punya akun? <a href="login_user.php" class="text-decoration-none">Login</a></p>
            </small>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>