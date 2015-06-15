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
<center>
<h2>DATA PRODUK</h2>
<div id="halaman">
<table border="1">
<tr align="center" bgcolor="gray"><th>Id Produk</th><th>Nama Produk</th><th>Deskripsi</th><th>Harga</th><th>Stok</th><th>Pilihan</th></tr>
<?php
include"konek.php";?>
<?php
$query=mysql_query("select * from produk");
echo"<a href='tambah_makanan.php' text-align='center'>Tambah Data</a><br>";
$no=1;
while($r=mysql_fetch_array($query)){
?>
<tr align="center" bgcolor="lightgray">
<td> <?php echo $r['id_produk']?></td>
<td> <?php echo $r['nama_produk']?></td>
<td>  <?php echo $r['deskripsi']?></td>
<td>  <?php echo $r['harga']?></td>
<td>  <?php echo $r['stok']?></td>
<td><a href="del_mak.php?id_produk=<?php echo $r['id_produk']?>">-delete- </a>
<a href="upd_mak.php?id_produk=<?php echo $r['id_produk']?>"> -update-</a></td>
</tr>
<?php } ?>
<p>
</table>
</div>
</center>
<p>
</body>
<?php include"footer.php";?>
</html>
