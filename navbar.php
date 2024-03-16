<?php 
  include 'db.php';
  session_start();
?>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand text-white py-3" href="#"><h3>PONDOK PESANTREN AN-NURIYAH</h3></a>
    <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <?php if(isset($_SESSION['login'])) { ?>
          <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Tentang Kami
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="artikel.php"> Artikel</a></li>
            <li><a class="dropdown-item" href="struktur.php"> Struktur Organisasi</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="alumni.php">Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="kuisioner.php">Tracer Study</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="loker.php">Loker</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link text-white" href="#">Contact Us</a>
          </li> -->
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-dash-fill"></i> Welcome, <?php echo $_SESSION['a_global']->nama  ?> 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="profile.php?id_alumni=<?php echo $_SESSION['a_global']->id_alumni  ?>">My profile</a></li>
            <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Yakin ingin keluar?')"><i class="bi bi-box-arrow-in-left"></i> Logout</a></li>
          </ul>
        </li>
        <?php }else{ ?>
          <li class="nav-item">
          <a class="nav-link text-white" href="login_user.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

