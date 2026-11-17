<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "web8_php_database";
$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
} 
// echo "Koneksi berhasil"; // Uncomment ini untuk cek koneksi
?>