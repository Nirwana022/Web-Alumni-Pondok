<?php
// cek jika belom login
session_start();
include '../db.php';
if (!isset($_SESSION['login'])) {
  header("Location: ../login_admin.php");
  exit;
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

        <div class="row">
          <div class="col-lg-12">
            <h3>Data Kuisioner</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <!-- Table data alumni -->
            <div class="table-responsive">
              <table class="table table-sm table-striped table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>P1</th>
                    <th>P2</th>
                    <th>P3</th>
                    <th>P4</th>
                    <th>P5</th>
                    <th>P6</th>
                    <th>P7</th>
                    <th>P8</th>
                    <th>P9</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $alumni = mysqli_query($conn, "SELECT * FROM tb_kuisioner_202316");
                  if (mysqli_num_rows($alumni) > 0) {
                    while ($row = mysqli_fetch_array($alumni)) {
                  ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['p1'] ?></td>
                        <td><?php echo $row['p2'] ?></td>
                        <td><?php echo $row['p3'] ?></td>
                        <td><?php echo $row['p4'] ?></td>
                        <td><?php echo $row['p5'] ?></td>
                        <td><?php echo $row['p6'] ?></td>
                        <td><?php echo $row['p7'] ?></td>
                        <td><?php echo $row['p8'] ?></td>
                        <td><?php echo $row['p9'] ?></td>
                        <td>
                          <a href="cetak.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                        </td>
                      </tr>
                    <?php }
                  } else { ?>
                    <tr>
                      <td colspan="10">Tidak ada data</td>
                    </tr>

                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- End table -->
          </div>
        </div>

    </div>
    </main>
  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>