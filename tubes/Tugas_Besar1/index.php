<?php 
$conn = mysqli_connect('localhost','root','','tugas_besar1') or die('Koneksi ke DB GAGAL!');

// Query ke tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM complete") or die(mysqli_error($conn));

// Siapkan data $mahasiswa
$rows = [];
while($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$complete = $rows;

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Daftar anime</title>
  </head>
  <body>   
    <div class="container">
      <h1>Daftar Anime Complete</h1>

      <a href="tambah.php">Tambah Daftar List Complete</a>
      <br><br>
      
      <table border="1" cellpadding="10" cellspacing="0" class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Episode</th>
            <th scope="col">Ratting</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; foreach($complete as $com) : ?>
          <tr>
            <th scope="row" class="align-middle"><?= $i++; ?></th>
            <td class="align-middle">
              <img src="img/complete/<?= $com["Gambar"]; ?>" height="80">
            </td>
            <td class="align-middle"><?= $com["Judul"]; ?></td>
            <td class="align-middle"><?= $com["Episode"]; ?></td>
            <td class="align-middle"><?= $com["Ratting"]; ?></td>
            <td class="align-middle">
              <a href="" class="btn badge bg-warning">Edit</a>
              <a href="" class="btn badge bg-danger">hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>