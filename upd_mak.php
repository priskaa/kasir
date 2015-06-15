<html><head><title>.:: Update Produk :..</title></head>
<?php
include"header.php";?>
<?php
include"konek.php";
$no=$_GET['id_produk'];
$q=mysql_query("select * from produk where id_produk=$no");
$r=mysql_fetch_array($q);
?>
<body>
<center>
<h2>UPDATE DATA PRODUK</h2>
<form action="upd_mak_sv.php" method="post">
<table>
<tr><td>ID Produk   </td><td><input type="text" name="id_produk" value="<?php echo $no ?>"/><br>
<tr><td>Nama Produk </td><td><input type="text" name="nama_produk" value="<?php echo $r['nama_produk']; ?>"/><br>
<tr><td>Deskripsi   </td><td><input type="text" name="deskripsi" value="<?php echo $r['deskripsi']; ?>"/><br>
<tr><td>Harga      </td><td><input type="text" name="harga" value="<?php echo $r['harga']; ?>"/><br>
<tr><td>Stok       </td><td><input type="text" name="stok" value="<?php echo $r['stok']; ?>"/><br>
<tr><td><input type="submit" name="simpan" value="simpan"/></td>
<td><a href="makanan.php">Batal</a></td></tr>
</table>
</form>
</center>
</body>
<html>
<?php include"footer.php";?>
