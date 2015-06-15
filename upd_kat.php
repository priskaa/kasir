<html><head><title>.:: Update Kategori :..</title></head>
<?php
include'konek.php';
$no=$_GET['id_kategori'];
$qn=mysql_query("SELECT * FROM kategori_produk where id_kategori=$no");
$p=mysql_fetch_array($qn);
?>
<body>
<form method="post" action="upd_kat_sv.php">
id  :<input type="text" name="id_kategori" value="<?php echo $no?>"/><br>
nama:<input type="text" name="nama_kategori" value="<?php echo $p['nama_kategori']; ?>"/><br>
<input type="submit" name="simpan" value="simpan"/>
<a href="index.php">Batal</a>
</form>
</body>
<html>