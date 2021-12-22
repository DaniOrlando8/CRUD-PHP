<?php 
    // Array Associative
    $karyawan = [
        ["nik"=>"1234567890", "nama" => "Ucup", "umur" => "20", "foto" => "1.jfif"],
        ["nik"=>"0987654321", "nama" => "Panjul", "umur" => "21", "foto" => "2.jfif"],
        ["nik"=>"5432167890", "nama" => "Joko", "umur" => "23", "foto" => "3.jfif"],
        ["nik"=>"5432167740", "nama" => "Laura", "umur" => "23", "foto" => "4.jfif"],
        ["nik"=>"5432167812", "nama" => "Ucok", "umur" => "23", "foto" => "5.jfif"],
        ["nik"=>"5432161340", "nama" => "Jason", "umur" => "23", "foto" => "6.jfif"],
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
</head>
<body>
    <h1>Daftar Karyawan</h1>
    
    <?php foreach ($karyawan as $yawan) : ?>
    <ul>
        <li>NIK  :<?= $yawan["nik"]  ?></li>
        <li>NAMA :<?= $yawan["nama"] ?></li>
        <li>umur :<?= $yawan["umur"] ?></li>
        <li>
            <img src="img/<?= $yawan["foto"]; ?> ">
        </li>
    </ul>
    <?php endforeach ?>
</body>
</html>