<?php
include"konek.php";

$i = $_POST['user'];
$n = $_POST['pass'];
$id = $_POST['nama'];
$na = $_POST['email'];
$idk = $_POST['telp'];

mysql_query("insert into admin values('$i', '$n', '$id', '$na', '$idk')");
header("location:index.php");
?>