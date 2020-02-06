<!DOCTYPE html>
<html>
<?php include "head.php"?>
<body>
    <?php include "navbar.php"?>
    <?php include "pesan.php"?>
    <?php include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($con,"SELECT * FROM peserta WHERE id_peserta=$id")or die(mysqli_error($con));
    $data = mysqli_fetch_array($query_mysql);
    ?>
    <div class="main">
    <div class="judul2">Ubah Data <?=$data['nama']?></div>
    <table id="form_regis">
        <form action="proses_edit.php" method="post">
            <tr>
                <td>Nim</td>
                <td>
                <input type="text" name="nim" id="nim" required value="<?=$data['nim']?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" id="nama" required value="<?=$data['nama']?>">
                </td>
            </tr>
            <tr>
                <td>Jenis kel.</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo($data['jenis_kelamin'] == 'L')?'checked':''?>> Laki-laki<br>
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo($data['jenis_kelamin'] == 'P')?'checked':''?>> Perempuan<br>
                </td>
            </tr>

            <tr>
                <td>Prodi</td>
                <td>
                    <select name="prodi">
                        <option value="ti" <?php echo($data['prodi'] == 'TI')?'selected':''?>>teknik informatika</option>
                        <option value="sipil" <?php echo($data['prodi'] == 'TS')?'selected':''?>>teknik sipil</option>
                        <option value="kimia" <?php echo($data['prodi'] == 'kimia')?'selected':''?>>kimia</option>
                        <option value="akutansi" <?php echo($data['prodi'] == 'akutansi')?'selected':''?>>akutansi</option>
                        <option value="hukum" <?php echo($data['prodi'] == 'hukum')?'selected':''?>>hukum</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>
                    <select name="semester">
                        <option value="1" <?php echo($data['semester'] == 1)?'selected':''?>>1</option>
                        <option value="2" <?php echo($data['semester'] == 2)?'selected':''?>>2</option>
                        <option value="3" <?php echo($data['semester'] == 3)?'selected':''?>>3</option>
                        <option value="4" <?php echo($data['semester'] == 4)?'selected':''?>>4</option>
                        <option value="5" <?php echo($data['semester'] == 5)?'selected':''?>>5</option>
                        <option value="6" <?php echo($data['semester'] == 6)?'selected':''?>>6</option>
                        <option value="7" <?php echo($data['semester'] == 7)?'selected':''?>>7</option>
                        <option value="8" <?php echo($data['semester'] == 8)?'selected':''?>>8</option>
                    </select>
                </td>
            </tr>
            <tr>
              <td>
                <input type="hidden" name="id_peserta" value="<?=$data['id_peserta']?>">
              </td>
            <tr>
                <td></td>
            <td>
              <input type="submit" value="Simpan">
            </td>
            </tr>
        </form>

        <tr>
        </tr>
    </table>
</div>
</body>
</html>
