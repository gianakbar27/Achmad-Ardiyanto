<?php
session_start();
include '../config/config.php';

if (isset($_SESSION['nama'])){
    header("location: ../dashboard.php");
    exit();
}


if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $username = mysqli_real_escape_string($conn, $_POST['password']);


    $sql = "SELECT * FROM user WHERE username = '$username' AND password= '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num-rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $row['nama'];
        header("location: ../dashboard.php");
        exit();
    } else {
        echo "<script>alert('email atau password salah, coba lagi!')</script>";
    }
}
?>