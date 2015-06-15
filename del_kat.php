<?php
include"konek.php";

$no=$_GET['id_kategori'];

mysql_query("delete from kategori_produk where id_kategori=$no");
header("location:kategori.php");

?>