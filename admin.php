<?php
	session_start();
	if(!isset($_SESSION['login'])) {
	?>
	<html>
		<head><title>.:: Data Admin ::.</title>
		</head>
		<body bgcolor="#cccccc">	
		<?php include"header.php";?>
	<?php
	}
?>
<center><h2>DATA ADMIN</h2></center><p>
<link rel="stylesheet" href="login.css" type="text/css" />
<div id="halaman">
<table border="1" align="center">
<tr align="center" bgcolor="gray"><th>Username</th><th>Password</th><th>Nama Lengkap</th><th>Email</th><th>Telepon</th><th>Pilihan</th></tr>
<?php
include"konek.php";?>
<?php
$query=mysql_query("select * from admin");
echo"<p><center><a href='tambah_admin.php' text-align='center'>Tambah Data</a></center>";
$no=1;
while($r=mysql_fetch_array($query)){
?>
<tr align="center" bgcolor="lightgray">
<td> <?php echo $r['user']?></td>
<td> <?php echo $r['pass']?></td>
<td>  <?php echo $r['nama']?></td>
<td>  <?php echo $r['email']?></td>
<td>  <?php echo $r['telp']?></td>
<td><a href="del_admin.php?user=<?php echo $r['user']?>">-delete- </a>
<a href="upd_admin.php?user=<?php echo $r['user']?>"> -update-</a></td>
</tr>
<?php } ?>
<p>
</table>
</div>
<p>
</body>
<?php include"footer.php";?>
</html>

