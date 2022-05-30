<?php 
// Koneksi Ke DB
$conn = mysqli_connect('localhost','root','','pw2022_d_213040114') or die('Koneksi ke DB GAGAL!');

// Query ke tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa") or die(mysqli_error($conn));

// Siapkan data $mahasiswa
$rows = [];
while($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$mahasiswa = $rows;

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Daftar Mahasiswa</title>
  </head>
  <body>   
    <div class="container">
      <h1>Daftar Mahasiswa</h1>
      
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">NPM</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; foreach($mahasiswa as $mhs) : ?>
          <tr>
            <th scope="row" class="align-middle"><?= $i++; ?></th>
            <td class="align-middle">
              <img src="img/<?= $mhs["gambar"]; ?>" height="50" class="rounded-circle">
            </td>
            <td class="align-middle"><?= $mhs["nama"]; ?></td>
            <td class="align-middle"><?= $mhs["npm"]; ?></td>
            <td class="align-middle"><?= $mhs["email"]; ?></td>
            <td class="align-middle"><?= $mhs["jurusan"]; ?></td>
            <td class="align-middle">
              <a href="" class="btn badge bg-warning">edit</a>
              <a href="" class="btn badge bg-danger">delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>