<?php
require 'functions.php';


 
 if( isset($_POST["Submit"]) ) {

    ///cek apakah data apakh berhasil ditambahkan
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('Daftar Berhasil Ditambahkan!');
        document.location.href = 'index.php';
        </script>
        
        ";
    } else {
        echo "
        <script>
        alert('Daftar gagal Ditambahkan!');
        document.location.href = 'index.php';
        </script>
        
        ";
    }



 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Anime</title>
    <link rel="stylesheet" href="css/tambah.css">
</head>
<body>
    <a class="back" href="index.php">
          <img src="img/back.png" alt="" width="30" />
        </a>
    <h1>Tambah Daftar Complete</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="Judul">Judul</label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
            <label for="ratting">Ratting</label>
                <input type="text" name="ratting" id="ratting" required>
            </li>
            <li>
            <label for="episode">episode</label>
                <input type="text" name="episode" id="episode" required>
            </li>
            <li>
            <label for="gambar">gambar</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="Submit" name="Submit">Tambah Data</button>
            </li>
        </ul>


    </form>



    
</body>
</html>