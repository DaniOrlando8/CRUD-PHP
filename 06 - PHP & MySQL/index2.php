<?php 
    // Konek ke database | Simpan koneks didalam sebuah variabel $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");



    //ambil dara dari tabel mahasiswa / query data mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

    

    /*ambil data (fetch) mahasiswa dari object result 
        1. mysqli_fetch_row()       = Mengembalikan nilai Numerik
        2. mysqli_fetch_assoc()     = Mengembalikan nilai Associative
        3. mysqli_fetch_array()     = Mengembalikan nilai Numerik & Associative
        4. mysqli_fetch_object()    = Mengembalikan nilai object (tidak punya nilai Numerik dan associative) (->) 
    */
    // while ($mhs = mysqli_fetch_assoc($result)){
    //     var_dump($mhs);
    // }

    

    
    // logic jika error
    if(!$result){
        echo mysqli_error($conn);
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
    <h1>Daftar Mahasiswa</h1>

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
        <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> | <a href="">Hapus</a>
                </td>
                <td><?= $row["Nama"]; ?></td>
                <td><?= $row["Nim"]; ?></td>
                <td><?= $row["Jurusan"]; ?></td>
                <td><?= $row["Kelas"]; ?></td>
                <td><?= $row["Mata Kuliah"]; ?></td>
                <td>
                    <img src="img/<?= $row["Foto"]; ?>" width="100">
                </td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </body>
</html>