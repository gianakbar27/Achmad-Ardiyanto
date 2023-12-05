<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "new_biodata";
$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("koneksi database Gagal: " . mysqli_connect_error());
}
?>