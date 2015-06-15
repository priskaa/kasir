<?php
include"konek.php";

$a = $_POST['kode'];
$b = $_POST['kelas'];

mysql_query("insert into kelas value('$a', '$b')");
header("location:kelas.php");
?>
