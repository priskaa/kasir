<?php
include"konek.php";

$q = $_POST['username'];
$w = $_POST['password'];
$e = $_POST['nama_lengkap'];
$r = $_POST['email'];
$t = $_POST['telepon'];
$y = $_POST['alamat'];

mysql_query("insert into kasir value('$q', '$w', '$e', '$r', '$t', '$y')");
header("location:kasir.php");
?>