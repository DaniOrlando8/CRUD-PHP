<?php 
require 'functions.php';
    // cek apakah tombol submit sudah ditekan atau belum
    if (isset ($_POST["submit"])) {

        // cek apakah data sudah ditambahkan atau tidak
       if (tambah($_POST) > 0 ) {
            echo "
            <script> 
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
       } else {
            echo "
            <script> 
                alert('Data gagal ditambahkan!');
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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="nama"> Nama: </label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="nim"> Nim: </label>
            <input type="text" name="nim" id="nim" required>
        </li>
        <li>
            <label for="jurusan"> Jurusan: </label>
            <input type="text" name="jurusan" id="jurusan" required>
        </li>
        <li>
            <label for="kelas"> Kelas: </label>
            <input type="text" name="kelas" id="kelas" required>
        </li>
        <li>
            <label for="matakuliah"> Mata Kuliah: </label>
            <input type="text" name="matakuliah" id="matakuliah" required>
        </li>
        <li>
            <label for="foto"> Foto: </label>
            <input type="file" name="foto" id="foto" required>
        </li>
        
            <button type="submit" name="submit">Kirim Data!</button>
        
            <button> <a href="index.php"> Kembali </a> </button>
    </ul>

    </form>
</body>
</html>