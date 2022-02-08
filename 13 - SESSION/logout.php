<?php 

// Jalankan sessionnya
session_start();

// Array kosong supaya yakin session kosong
$_SESSION = [];

// Agar lebih yakin sessionnya hilang
session_unset();

// Hancurkan sessionnya
session_destroy();

// Tendang/lempar user kembali ke halaman login
header("Location: login.php");
exit;

?>