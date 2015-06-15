<?php
include"konek.php";

$idk=$_POST['id_kategori'];
$n=$_POST['nama_kategori'];

mysql_query("update kategori_produk set id_kategori='$idk', nama_kategori='$n' where id_kategori=$idk ");
header("location:kategori.php");
?>