<?php
require 'functions.php';

///ambil data url
$id = $_GET["id"];

///query data berdasarkan id
$ubh = query("SELECT * FROM complete WHERE id = $id")[0];


 //apakah tombol submit sudah ditekan atau belum
 if( isset($_POST["Submit"]) ) {

    ///cek apakah data apakh berhasil diubah
    if( ubah($_POST) > 0 ) {
        echo "
        <script>
        alert('Daftar Berhasil Diubah!');
        document.location.href = 'index.php';
        </script>
        
        ";
    } else {
        echo "
        <script>
        alert('Daftar Gagal Diubah!');
        document.location.href = 'index.php';
        </script>
        
        ";
    }



 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Anime</title>
    <link rel="stylesheet" href="css/tambah.css">
</head>
<body>
    <a class="back" href="index.php">
          <img src="img/back.png" alt="" width="30" />
        </a>
    <h1>Ubah Daftar Complete</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $ubh["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $ubh["gambar"]; ?>">
        <ul>
            <li>
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" required value="<?= $ubh["judul"]; ?>">
            </li>
            <li>
            <label for="ratting">Ratting</label>
                <input type="text" name="ratting" id="ratting" required value="<?= $ubh["ratting"]; ?>">
            </li>
            <li>
            <label for="episode">episode</label>
                <input type="text" name="episode" id="episode" required value="<?= $ubh["episode"]; ?>">
            </li>
            <li>
            <label for="gambar">gambar</label> <br>
            <img src="img/complete/<?= $ubh["gambar"]; ?>" width="90"> <br>
            <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="Submit" name="Submit">Ubah Data</button>
            </li>
        </ul>


    </form>



    
</body>
</html>