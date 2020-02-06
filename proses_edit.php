<?php
include 'koneksi.php';
print_r($_POST);
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$id_peserta = $_POST['id_peserta'];
    mysqli_query($con, "UPDATE peserta SET nim='$nim',nama='$nama',jenis_kelamin='$jenis_kelamin',prodi='$prodi',semester='$semester' WHERE id_peserta='$id_peserta'");
    header("location:index.php?pesan=update");
?>
