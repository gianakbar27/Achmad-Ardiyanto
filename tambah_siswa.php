<?php 
include '../config/config.php';

if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tplahir = $_POST['tplahir'];
    $tglalhir = $_POST['tglahir'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $jmsaudara = $_POST['jmsaudara'];

    $sql = "INSERT INTO siswa(id, nama,ttplahir, tglahir, alamat, hobi, cita_cita, jmsaudara) value ('$id', '$nama', '$tplahir', '$tglahir, '$alamat', 'hobi', 'cita_cita', 'jmsaudara')";
    $query = mysqli_query($conn, $sql);

    if ($query){
        header('location: ../siswa.php?status=sukses');
    } else {
        headedr('location: ../siswa.php?status=gagal');
    }
}
?>