<!DOCTYPE html>
<html>
<?php include "head.php"?>
<body>
    <!-- fungsi untuk mengecek versi php -->
    <!-- pastikan versi php dibawah versi 5.5 -->
    <?php //phpinfo()?> 
    <?php include "navbar.php"?>
    <?php
        include "koneksi.php";
        $query = "SELECT * FROM peserta";
        $query_mysql = mysqli_query($con, $query)or die(mysqli_error($con));
        $halaman = 5;
        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
        $total = mysqli_num_rows($query_mysql);
        $pages = ceil($total/$halaman);
        $query = mysqli_query($con,"SELECT * FROM peserta LIMIT $mulai, $halaman")or die(mysqli_error($con));
        $nomor = $mulai+1;
    ?>
    <div class="main">
    <?php include "pesan.php"?>
    <div class="judul2">Daftar Peserta Seminar</div>
    <table id="tabel-data">
        <tr class="blue-row">
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>L/P</th>
            <th>Prodi</th>
            <th>Waktu Daftar</th>
            <th>Semester</th>
            <th>Action</th>
        </tr>
        <?php 
          while ($data = mysqli_fetch_array($query)):
        ?>

        <tr>
            <td>
                <?=$nomor++?>
            </td>
            <td>
                <?=$data['nim']?>
          </td>
            <td>
                <?=$data['nama']?>
            </td>
            <td>
                <?=$data['jenis_kelamin']?>
            </td>
            <td>
                <?=$data['prodi']?>
            </td>
            <td>
                <?=$data['waktu']?>
            </td>
            <td>
                <?=$data['semester']?>
          </td>
          <td>
                <a class="action-button" href="edit_peserta.php?id=<?=$data['id_peserta']?>">Edit</a>
                <a class="action-button" href="proses_hapus.php?id=<?=$data['id_peserta']?>" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
                
            </td>
        </tr>
        <?php endwhile?>
    </table>
        <div align="center">
        <h5>Halaman</h5>
            <?php for ($i=1; $i<=$pages ; $i++): ?>
            <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endfor ?>
        </div>
    </div>
    </body>
</html>