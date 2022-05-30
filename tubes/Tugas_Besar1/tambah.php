<?php
$conn = mysqli_connect('localhost', 'root', '', 'tugas_besar1') or die('Koneksi ke DB GAGAL!');
 
 if( isset($_POST["Submit"]) ) {

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Anime</title>
</head>
<body>
    <h1>Tambah Daftar Complete</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="Judul">Judul</label>
                <input type="text" name="Judul" id="Judul">
            </li>
            <li>
            <label for="Episode">Episode</label>
                <input type="text" name="Episode" id="Episode">
            </li>
            <li>
            <label for="Ratting">Ratting</label>
                <input type="text" name="Ratting" id="Ratting">
            </li>
            <li>
            <label for="Gambar">Gambar</label>
                <input type="text" name="Gambar" id="Gambar">
            </li>
            <li>
                <button type="Submit" name="Submit">Tambah Data</button>
            </li>
        </ul>


    </form>



    
</body>
</html>