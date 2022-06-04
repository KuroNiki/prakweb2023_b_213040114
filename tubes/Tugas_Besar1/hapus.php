<?php
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
    echo "
    <script>
        alert('Daftar Berhasil Dihapus!');
        document.location.href = 'index.php'
        </script>
    ";

} else {
    echo "
    <script>
        alert('Daftar Gagal Dihapus!');
        document.location.href = 'index.php'
        </script>
        ";
}

?>