<?php 
    require '../functions.php';
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM mahasiswa 
    WHERE   nama LIKE '%$keyword%'OR
            nim LIKE '%$keyword%'
    ";
    $mahasiswa = query("$query");
?>
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
