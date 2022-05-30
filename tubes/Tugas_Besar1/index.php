<?php
require 'functions.php';
$complete = query("SELECT * FROM complete");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Nikinikiplay.tubes</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="container">
        <a class="navbar-logo" href="#">
          <img src="img/logo.jpg" alt="" width="100" />
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmenu" aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <img src="img/garis3.jpg" alt="" />
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarmenu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">baru rilis</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Lain </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Top10</a></li>
              <li><a class="dropdown-item" href="./index.php">Another action</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!-- end navbar -->

    <!-- header -->
    <section id="header" style="background-color: #0a0b27;">
      <div class="container">
        <div class="row text-center">
          <div class="col"light>
            <h2>Baru Tamat</h2>
          </div>
        </div>
        <div class="row">
          <?php $i = 1; foreach($complete as $comp) : ?>
          <div class="col-2">
            <div class="card">
              <img src="img/complete/<?= $comp["gambar"]; ?>" height="300">
              <div class="card-body">
                <p class="card-text"><?= $comp["judul"]; ?></p>
                <p class="card-text"><?= $comp["episode"]; ?></p>
                <p class="card-text"><?= $comp["ratting"]; ?></p>
                <a href="#" class="btn btn-primary">Ubah</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- end header -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> 
