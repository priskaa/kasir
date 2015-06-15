<?php
include"konek.php";

$idp=$_POST['id_produk'];
$n=$_POST['nama_produk'];
$d=$_POST['deskripsi'];
$h=$_POST['harga'];
$s=$_POST['stok'];

mysql_query("update produk set id_produk='$idp', nama_produk='$n', deskripsi='$d', harga='$h' , stok='$s' where id_produk=$idp ");
$idk=$_POST['id_kategori'];
$n=$_POST['nama_produk'];
$d=$_POST['deskripsi'];
$h=$_POST['harga'];

mysql_query("update produk set id_produk='$idp', id_kategori='$idk', nama_produk='$n', deskripsi='$d', harga='$h' where id_produk=$idp ");
header("location:makanan.php");
?>