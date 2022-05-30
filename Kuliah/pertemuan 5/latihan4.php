<?php 
    // LATIHAN 1
    // PERTEMUAN 5 - array 
    // Array adalah variabel yang dapat menyimpa banyak nilai sekaligus 

    $hari1 = "senin";
    $hari2 = "selasa";

    $bulan1 = "januari";
    $bulan2 = "februari";


    // membuat array
    $hari = ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"]; //versi baru
    $bulan = array ("januari", "februaru", "maret", "april", "mei",); // versi lama


    // mencetak array
    // menggunakan index, dimulai dari 0  
    echo $hari [0];
    echo "<br>";
    echo $bulan [2];
    echo "<br>";


    // menggunakan var_dump() atau print_r()
    // hanya untuk debugging

    var_dump($hari); // lengkap
    echo "<br>";
    print_r($bulan); // simple
    echo "<hr>";

    // mencetak untuk user
    // menggunakan looping
    for ($i = 0; $i < count($hari); $i++) {
        echo $hari [$i];
        echo "<br>";
    }
    echo "<hr>" ;

    // menggunakan foreach
    // pengulangan khusus array
    foreach($bulan as $b) {
        echo "$b";
        echo "<br>";

    }
    echo "<hr>";

    
    // memanipulasi array
    // menambah 1 elemen di akhir
    $hari[] = "sabtu";
    $hari[] = "minggu";
    print_r($hari);   
    echo "<br>";
    $bulan[] = "april";
    $bulan[] = "mei";
    print_r($bulan);



?>


<?php 
// latihan2
// ARRAY MULTIDIMENSI
// Array didalam array

    $array1 = [10, "sandhika", true, [1,[2],3]];
    print_r($array1);
    echo "<hr>";
// MENCETAK ANGKA 2
    echo $array1[3][1][0];
    echo "<hr>";

// MATRIKS
    /* 
    1 2 3
    4 5 6 
    7 8 9
    */
    $matriks = [
        [1,2,3], 
        [4,5,6], 
        [7,8,9]
    ];
    foreach($matriks as $baris){
        foreach($baris as $kolom){
            echo $kolom;
        }
    }
    echo "<br>";



?>