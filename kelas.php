<?php
	session_start();
	if(!isset($_SESSION['login'])) {
		include("header.php");
	}
	else {
	?>
	<html>
		<head><title>.:: Data Kelas ::.</title>
		</head>
		<body bgcolor="#cccccc"><br />	
		<?php include"header.php";?>
		</body>
	</html>
	<?php
	}
?>

 <link rel="stylesheet" href="login.css" type="text/css" />
<html>
<center>
<h2>DATA KELAS</h2>
<div id="halaman">
<table border="1">
<tr align="center" bgcolor="gray" ><th>Kode</th><th>Kelas</th><th>Pilihan</th></tr>
<?php
include"konek.php";?>
<?php
$query=mysql_query("select * from kelas");
echo"<a href='tambah_kelas.php' text-align='center'>Tambah Data</a><br>";
$no=1;
while($r=mysql_fetch_array($query)){
?>
<tr align="center" bgcolor="lightgray">
<td> <?php echo $r['kode']?></td>
<td> <?php echo $r['kelas']?></td>
<td><a href="del_kelas.php?kode=<?php echo $r['kode']?>">-delete- </a>
<a href="upd_kelas.php?kode=<?php echo $r['kode']?>"> -update-</a></td>
</tr>
<?php } ?>
<p>
</table>
</div>
<p>
</center>
</html>
<?php include"footer.php";?>