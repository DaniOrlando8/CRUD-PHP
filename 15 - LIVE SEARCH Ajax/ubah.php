<?php 
session_start();

// Cek login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["ID"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE ID = $id")[0];

    // cek apakah tombol submit sudah ditekan atau belum
    if (isset ($_POST["submit"])) {

        // cek apakah data sudah diubah atau tidak
       if (ubah($_POST) > 0 ) {
            echo "
            <script> 
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
            ";
       } else {
            echo "
            <script> 
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
            </script>
            ";
       }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="ID" value="<?= $mhs["ID"] ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["foto"] ?>">
    <ul>
        <li>
            <label for="nama"> Nama: </label>
            <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
        </li>
        <li>
            <label for="nim"> Nim: </label>
            <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"] ?>">
        </li>
        <li>
            <label for="jurusan"> Jurusan: </label>
            <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
        </li>
        <li>
            <label for="kelas"> Kelas: </label>
            <input type="text" name="kelas" id="kelas" required value="<?= $mhs["kelas"] ?>">
        </li>
        <li>
            <label for="matakuliah"> Mata Kuliah: </label>
            <input type="text" name="matakuliah" id="matakuliah" required value="<?= $mhs["matakuliah"] ?>">
        </li>
        <li>
            <label for="foto"> Foto: </label> <br>
            <img src="img/<?= $mhs["foto"] ?>" width="100"> <br>
            <input type="file" name="foto" id="foto" >
        </li>
        
            <button type="submit" name="submit">Ubah Data!</button>
        
            <button> <a href="index.php"> Kembali </a> </button>
    </ul>

    </form>
</body>
</html>