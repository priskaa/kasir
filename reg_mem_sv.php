<?php
include"konek.php";

$a = $_POST['kode'];
$b = $_POST['nama'];
$c = $_POST['alamat'];
$d = $_POST['telp'];
$e = $_POST['kelas'];
$f = $_POST['harga'];

mysql_query("insert into member value('$a', '$b', '$c', '$d', '$e', '$f')");
header("location:reg_mem.php");
?>
