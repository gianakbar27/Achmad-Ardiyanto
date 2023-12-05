<?php 
include '../config/config.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE from siswa WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('loccation: ../siswa.php');
    } else {
        die("data gagal dihapus");
    }
} else {
    die("akses hapus dilarang");
}
?>