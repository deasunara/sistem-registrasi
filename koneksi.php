<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "regis_seminar";

$con = mysqli_connect($servername,$username,$password,$db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    }
?>