<?php
include"konek.php";

$idkategori = $_POST['id_kategori'];
$nama = $_POST['nama_kategori'];

mysql_query("insert into kategori_produk value('$idkategori', '$nama')");
header("location:kategori.php");
?>