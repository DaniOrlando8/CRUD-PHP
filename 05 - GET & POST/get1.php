<?php
    if (!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["jurusan"]) || !isset($_GET["foto"])) {
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tampilan Profile Mahasiswa </title>
</head>
<body>
    <ul>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><img src="img/<?= $_GET["foto"];?>"></li>
    </ul>
    <a href="index.php"> Kembali ke beranda</a>
</body>
</html>