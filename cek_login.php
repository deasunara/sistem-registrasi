<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if($_SESSION['login'] != TRUE){
    header("location:login.php?pesan=silahkanlogin");
}
