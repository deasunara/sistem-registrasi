<?php
include 'koneksi.php';
include 'cek_admin.php';
    if(isset($_GET['hapus_id'])){
        $id_pengguna = $_GET['hapus_id'];
        mysqli_query($con,"DELETE FROM pengguna WHERE id_pengguna='$id_pengguna'")or die(mysqli_error($con));
        header("location:pengguna.php?pesan=berhasil");
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $tipe = $_POST['tipe'];
        $id = (int)""; 
        $result = mysqli_query($con,"INSERT INTO pengguna VALUES('$id','$username','$password', '$tipe')") or die(mysqli_error($con));
        header("location:pengguna.php?pesan=berhasil");
      
    }

?>
