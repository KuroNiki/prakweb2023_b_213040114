<!-- date -->

<?php
    // Date
    // untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // time
    // UNIX Timestap / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("l", time()-60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,3,15,2002));


    // strtotime
    echo date("l", strtotime("15 march 2002"));
?>

<!-- funcion -->

<?php
    function salam($waktu = "Datang", $nama = "Admin") {
        return "Selamat $waktu, $nama!";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Nanda"); ?></h1>
</body>
</html>