<?php
	session_start();
	if(!isset($_SESSION['login'])) {
		include("header.php");
	}
	else {
	?>
	<html>
		<head><title>.:: Data Kasir ::.</title>
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
<h2>DATA KASIR</h2>
<div id="halaman">
<table border="1">
<tr align="center" bgcolor="gray"><th>Username</th><th>Password</th><th>Nama Lengkap</th><th>Email</th>
<th>Telepon</th><th>Alamat</th><th>Pilihan</th></tr>
<?php
include"konek.php";
$query=mysql_query("select * from kasir");
echo"<a href='tambah_kasir.php' text-align='center'>Tambah Kasir</a><br>";
$no=1;
while($row=mysql_fetch_array($query)){
?>
<tr align="center" bgcolor="lightgray">
<td> <?php echo $row['username']?></td>
<td> <?php echo $row['password']?></td>
<td> <?php echo $row['nama_lengkap']?></td>
<td>  <?php echo $row['email']?></td>
<td>  <?php echo $row['telepon']?></td>
<td>  <?php echo $row['alamat']?></td>
<td><a href="del_kas.php?username=<?php echo $row['username']?>">-delete- </a>
<a href="upd_kas.php?username=<?php echo $row['username']?>"> -update-</a></td>
</tr>
<?php } ?>
<p>
</table>
</div>
<p>
</center>
</html>
<?php include"footer.php";?>