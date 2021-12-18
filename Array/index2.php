<?php 
    $mahasiswa = [
        ["Ucup", 16210009, "Teknik Informatika", "ucup@gamil.com"],
        ["Agus", 16210001, "Teknik Informatika", "aguss@gamil.com"],
        ["Sinta", 16210101, "Teknik Informatika", "sinta@gamil.com"],
        ["Jojo", 16210102, "Teknik Informatika", "Jojo@gamil.com"],
        ["gako", 16210103, "Teknik Informatika", "gako@gamil.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <ul>
                    <li> NAMA    :<?= $mhs[0]; ?> </li>
                    <li> NIM     :<?= $mhs[1]; ?> </li>
                    <li> JURUSAN :<?= $mhs[2]; ?> </li>
                    <li> EMAIL   :<?= $mhs[3]; ?> </li>
            </ul>
        <?php endforeach; ?>
</body>
</html>