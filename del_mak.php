<?php
include"konek.php";

$no=$_GET['id_produk'];

mysql_query("delete from produk where id_produk=$no");
header("location:makanan.php");

?>