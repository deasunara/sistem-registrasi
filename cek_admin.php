<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if($_SESSION['tipe'] != 'admin'){
    header("location:index.php?pesan=admin");
}
