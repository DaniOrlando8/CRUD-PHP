<?php 

    /* Array adalah sebuah variabel yang dapat menampung lebih dari satu nilai. */

    // Array cara pertama (cara old)
    $hari = array("Senin", "Selasa", "Rabu");
    var_dump($hari);
    echo "<br>";

    // Array cara kedua (cara medern)
    $bulan = ["Januari", "Februari", "Maret"];
    print_r($bulan);
    echo "<br>";
    
    // Array php dapat membiliki tipe data yang berberda
    $tahun = [18, "Desember", 2021, true];
    print_r($tahun);
    echo "<br>";
    
    //Menampikan 1 element pada array
    echo $tahun[1];
    echo "<br>";
    
    //Menambahkan element pada array
    $tahun[] = "Hallo World!";
    print_r($tahun);
    
?>