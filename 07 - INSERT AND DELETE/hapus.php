<?php 
require 'functions.php';

    $ID = $_GET["ID"];

    if (hapus($ID) > 0) {
        echo "
            <script> 
                alert('Data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
            ";
       } else {
            echo "
            <script> 
                alert('Data gagal dihapus!');
                document.location.href = 'index.php';
            </script>
            ";
    }
?>