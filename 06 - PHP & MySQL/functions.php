<?php
    // Konek ke database | Simpan koneks didalam sebuah variabel $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $Kotak = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $Kotak[] = $row;
        }
        return $Kotak;
    }
?>