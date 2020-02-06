<?php
  include 'koneksi.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $id = (int)"";
    $waktu = date("Y-m-d H:i:s"); 
    mysqli_query($con,"INSERT INTO peserta VALUES('$id','$nim','$nama','$jenis_kelamin','$prodi','$semester','$waktu')")or die(mysqli_error($con));
    header("location:index.php?pesan=input");
?>
