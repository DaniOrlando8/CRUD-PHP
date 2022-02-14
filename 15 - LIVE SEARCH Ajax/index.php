<?php 

session_start();

    // Cek login
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

    // Koneksi index.php ke functions.php
    require 'functions.php';

    // Konfigurasi Pagination
    $jumlahDataPerHalaman = 2;
    $jumlahData = count(query("SELECT * FROM mahasiswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif ) - $halamanAktif;

    // Ambil data dari tabel mahasiswa / query data mahasiswa
    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

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
        <input type="text" name="keyword" size="25" autofocus placeholder="Masukan pencarian ..." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
    </form>

    <!-- Navigasi -->
    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for ($i=1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>"style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

    <br>
    <div id="container">
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
    </div>
        <script src="js/script.js"></script>
    </body>
</html>