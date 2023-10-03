<?php
require 'functions.php';

///ambil data url
$id = $_GET["id"];

///query data berdasarkan id
$info = query("SELECT * FROM top10as WHERE id = $id")[0];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/info.css">
    <title>Info Anime</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/logo.jpg" alt="" width="100">
        </a>
      </div>
    </nav>


    <div class="container1  text-center">
        <div class="card">
            <input type="hidden" name="id" value="<?= $info["id"]; ?>">
            <img src="img/top10as/<?= $info["gambar"]; ?>" class="card" alt="" width="170">
            <div class="card-body">
               <h2 class="card-title"><?= $info["judul"]; ?></h2>
               <td class="card-text"><?= $info["deskripsi"]; ?></td>
           </div>
        </div>







    </div>






</body>
</html>