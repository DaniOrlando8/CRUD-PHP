<?php 

session_start();

    // Cek login
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

    // Koneksi index.php ke functions.php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

    // tombol cari ditekan
    if (isset ($_POST["cari"])) {
        $mahasiswa = cari($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MySQL</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data Mahasiswa</a>
    <br>
    <form action="" method="post">
        <input type="text" name="keyword" size="25" autofocus placeholder="Masukan pencarian ..." autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Mata Kuliah</th>
            <th>Foto</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?ID=<?= $row["ID"]; ?>">Ubah</a> | <a href="hapus.php?ID=<?= $row["ID"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
                </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["kelas"]; ?></td>
                <td><?= $row["matakuliah"]; ?></td>
                <td>
                    <img src="img/<?= $row["foto"]; ?>" width="100">
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </body>
</html>