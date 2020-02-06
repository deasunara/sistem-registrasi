<?php
include 'koneksi.php';
    $id_peserta = $_GET['id'];
    mysqli_query($con,"DELETE FROM peserta WHERE id_peserta='$id_peserta'")or die(mysqli_error($con));
    header("location:index.php?pesan=hapus");
?>
