<?php
if (isset($_GET['pesan']))
{
    $pesan = $_GET['pesan'];
    if ($pesan == "input") {
        echo "<div class='pesan'>Data berhasil di input.</div>";
    } else if ($pesan == "update") {
        echo "<div class='pesan'>Data berhasil di update.</div>";
    } else if ($pesan == "hapus") {
        echo "<div class='pesan'>Data berhasil di hapus.</div>";
    } else if ($pesan == "silahkanlogin") {
      echo "<div class='pesan'>Silahkan login Terlebih Dahulu</div>";
    }
} 
?>
