<?php 
    $mahasiswa =[
        ["nama" => "Ucup", "nim" => "16210008", "jurusan" => "Teknik Informatika", "foto" => "1.jfif"],
        ["nama" => "Sari", "nim" => "16210009", "jurusan" => "Teknik Informatika", "foto" => "2.jfif"],
        ["nama" => "Joko", "nim" => "16210010", "jurusan" => "Teknik Informatika", "foto" => "3.jfif"],
    ];
   
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan get and post</title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li> <a href="index1.php?nama=<?=$mhs["nama"] ?>&nim=<?= $mhs["nim"] ?>&jurusan=<?= $mhs["jurusan"] ?>&foto=<?= $mhs["foto"] ?>"><?= $mhs["nama"]; ?></a></li>
        <?php endforeach ?>
    </ul>
</body>
</html>