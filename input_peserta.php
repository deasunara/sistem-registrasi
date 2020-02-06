<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php include "head.php"?>
<body>
    <?php 
        include "autentikasi.php";
        include "cek_admin.php";
        include "navbar.php";
    ?>
    <div class="main">
        <?php 
        include "pesan.php";
        ?>
        <div class="judul2">Registrasi Peserta Seminar</div>
        <table id="form_regis">
        <form action="proses_input.php" method="post">
            <tr>
                <td>Nim</td>
                <td>
                    <input type="text" name="nim" id="nim" required>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" id="nama" required>
                </td>
            </tr>
            <tr>
                <td>Jenis kel.</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L">Laki-Laki<br>
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan<br>
                </td>
            </tr>

            <tr>
                <td>Prodi</td>
                <td>
                    <select name="prodi">
                        <option value="ti">T. Informatika</option>
                        <option value="sipil">T. Sipil</option>
                        <option value="kimia">T. Kimia</option>
                        <option value="akutansi">Akutansi</option>
                        <option value="hukum">Hukum</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>
                    <select name="semester">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="1">5</option>
                        <option value="2">6</option>
                        <option value="3">7</option>
                        <option value="4">8</option>
                    </select>
            </td>
            </tr>
            <tr>
                <td></td>
            <td>
              <input type="submit" value="Simpan">
            </td>
            </tr>
        </form>
    </table>
</div>
</body>
</html>
