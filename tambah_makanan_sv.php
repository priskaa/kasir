<?php
include"konek.php";

$idpr = $_POST['id_produk'];
$nama = $_POST['nama_produk'];
$desk = $_POST['deskripsi'];
$harg = $_POST['harga'];
$stok = $_POST['stok'];

mysql_query("insert into produk value('$idpr', '$nama', '$desk', '$harg', $stok)");
header("location:makanan.php");
?>
