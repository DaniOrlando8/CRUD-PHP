<?php
    // Konek ke database | Simpan koneks didalam sebuah variabel $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    

    function query($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $Kotak = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $Kotak[] = $row;
        }
        return $Kotak;
    }

function tambah ($data){
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $matakuliah = htmlspecialchars($data["matakuliah"]);
    $foto = htmlspecialchars($data["foto"]);

     // query insert data
     $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$jurusan', '$kelas', '$matakuliah', '$foto')";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn); 
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE ID = $id");

    return mysqli_affected_rows($conn);
}

?>