<?php
	session_start();
	if(!isset($_SESSION['login'])) {
	?>
	<html>
		<head><title>.:: Produk ::.</title>
		</head>
		<body bgcolor="#cccccc">	
		<?php include"header.php";?>
	<?php
	}
?>

 <link rel="stylesheet" href="login.css" type="text/css" />
<div id="halaman">
<table border="1">
<tr align="center" bgcolor="gray"><td>Id_produk</td><td>Kategori</td><td>Nama Menu</td><td>Deskripsi</td><td>Harga</td><td>Action</td></tr>
<?php
include"konek.php";?>
<?php
$query=mysql_query("select * from produk");
echo"<a href='tambah_makanan.php' text-align='center'>Tambah Data</a><br>";
$no=1;
while($r=mysql_fetch_array($query)){
?>
<tr align="center">
<td> <?php echo $r['id_produk']?></td>
<td> <?php echo $r['id_kategori']?></td>
<td> <?php echo $r['nama_produk']?></td>
<td>  <?php echo $r['deskripsi']?></td>
<td>  <?php echo $r['harga']?></td>
<td><a href="trans.php?id_produk=<?php echo $r['id_produk']?>"> -pilih-</a></td>
</tr>
<?php } ?>
<p>
</table>
</div>
<p>
</body>
<?php include"footer.php";?>
</html>
