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
?>