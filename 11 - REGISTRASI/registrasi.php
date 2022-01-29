<?php 
    require 'functions.php';

    if (isset($_POST["register"])) {
        
        if(registrasi ($_POST) > 0){
            var_dump(registrasi($_POST));
            echo "<script>
                    alert('user baru baerhasil ditambahkan!');
                </script>";
        }else{
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="POST"></form>
    <ul>
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">Konfimasi Password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <button type="submit" name="register"> Daftar</button>
    </ul>
</body>
</html>