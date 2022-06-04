<?php
///konek ke db
$conn = mysqli_connect('localhost','root','','tugas_besar1') or die('Koneksi ke DB GAGAL!');

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


///function tambah
function tambah($data) {
    global $conn;
    $judul = htmlspecialchars($data ["judul"]);
    $ratting = htmlspecialchars($data ["ratting"]);
    $episode = htmlspecialchars($data ["episode"]);
 
    ///upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

    $query = "INSERT INTO complete VALUES('', '$judul', '$ratting', '$episode', '$gambar')
    ";
    mysqli_query($conn, "$query");

    return mysqli_affected_rows($conn);

}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    ///cek apakah ada gambar di upload
    if( $error === 4 ) {
        echo "<script>
        alert('Pilih Gambar Dulu!!');
        </script>";
        return false;
    }

    ///cek apakah yg di upload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower (end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
        alert('Yang Anda Upload Bukan Gambar!!');
        </script>";
        return false;
    }

    ///cek ukuran file/gambar
    if( $ukuranFile > 2500000 ) {
        echo "<script>
        alert('Ukuran Gambar Tetlalu Besar!!');
        </script>";
        return false;

    }

    ///generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    ///lolos pengecekan
    move_uploaded_file($tmpName, 'img/complete/' . $namaFileBaru);
    return $namaFileBaru;


}

///fanction hapus
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM complete WHERE id= $id");

    return mysqli_affected_rows($conn);
}

///function ubah
function ubah($data) {
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data ["judul"]);
    $ratting = htmlspecialchars($data ["ratting"]);
    $episode = htmlspecialchars($data ["episode"]);
    $gambarLama = ($data["gambarLama"]);

    ///cek apakah gambar di ganti atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE complete SET
                judul = '$judul',
                ratting = '$ratting',
                episode = '$episode',
                gambar = '$gambar'
              WHERE id = $id
             ";
    mysqli_query($conn, "$query");

    return mysqli_affected_rows($conn);
}



function cari($keyword) {
    $query = "SELECT * FROM complete
                      WHERE
                   judul LIKE '%$keyword%'
                   ";
    return query($query);
}


?>