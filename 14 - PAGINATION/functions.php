<?php

    // Konek ke database | Simpan koneks didalam sebuah variabel $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    
// fungsi ambil data
    function query($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $Kotak = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $Kotak[] = $row;
        }
        return $Kotak;
    }

// fungsi tambah data
    function tambah ($data){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $matakuliah = htmlspecialchars($data["matakuliah"]);
    
// Upload gambar
    $foto = upload();
    if (!$foto) {
        return false;
    }


// query insert data
     $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$jurusan', '$kelas', '$matakuliah', '$foto')";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn); 
}

// fungsi upload data
    function upload(){
        
        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];


// cek apakah tidak ada gambar yang di upload
    if ($error === 4) {
        echo "
        <script>
            alert('pilih gambar terebih dahulu!');
        </script>";
        return false;
    }

// cek apakah yang diupoad adalah gambar
    $exgambarValid = ['jpg','jpeg','png'];
    $exGambar = explode('.', $namaFile);
    $exGambar = strtolower (end($exGambar));
    if (!in_array($exGambar, $exgambarValid)) {
        echo "
        <script>
            alert('Anda tidak mengupload file gambar!');
        </script>";
        return false;
    }

// cek jika ukuran gambar 
    if ($ukuranFile > 1000000) {
        echo "
        <script>
            alert('Ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

// generate nama gambar baru
    $namaFilebaru = uniqid();
    $namaFilebaru .= '.';
    $namaFilebaru .= $exGambar;

    // lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, 'img/'. $namaFile);
    return $namaFile;
}

// fungsi hapus data
    function hapus($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM mahasiswa WHERE ID = $id");

        return mysqli_affected_rows($conn);
    }

// fungsi ubah data
    function ubah($data){
        global $conn;
        $ID = $data["ID"];
        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $matakuliah = htmlspecialchars($data["matakuliah"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);
    
// cek apakaj user pilih gambar baru atau tidak
    if ($_FILES['foto']['error']===4) {
        $foto = $gambarLama;
    }else{
        $foto = upload();
    }

// query insert data
     $query = "UPDATE mahasiswa SET 
     nama = '$nama',
     nim = '$nim',
     jurusan = '$jurusan',
     kelas = '$kelas',
     matakuliah = '$matakuliah',
     foto = '$foto'
     WHERE ID = $ID
     
     ";

     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn); 

}

// Fungsi pencarian
    function cari ($keyword){
        $query = "SELECT * FROM mahasiswa 
        WHERE 
        nama LIKE '%$keyword%'OR
        nim LIKE '%$keyword%'
        ";
        return query($query);
    }
// Fungsi registrasi
    function registrasi($data){
        global $conn;

        $username = strtolower(stripslashes($data["username"]));

        $password = mysqli_real_escape_string($conn, $data["password"]);

        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
                if (mysqli_fetch_assoc($result)) {
                    echo "<script>
                        alert('username sudah terdaftar!')
                    </script>";
                    return false;
                }

        // cek konfirmasi password
        if ($password !== $password2) {
            echo "<script>
                alert('Konfirmasi password tidak sesuai!');
                </script>";
            return false;
        }
        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // tambahkan user baru ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

        return mysqli_affected_rows($conn);

    }
    

?>