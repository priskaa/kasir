<html><head><title>.:: Update Admin ::.</title></head>
<body>
	<?php
	include"header.php";
	include('konek.php');
	$id = $_GET['user'];
	$show = mysql_query("SELECT * FROM admin WHERE user='$id'");
	if(mysql_num_rows($show) == 0){
				echo '<script>window.history.back()</script>';
	}else{
		$data = mysql_fetch_assoc($show);
	}
	?>
    <center>
    <h2>UPDATE DATA ADMIN</h2>
	<form action="upd_admin_sv.php" method="post">
		<input type="hidden" name="user" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0">
			<tr><td>Username</td><td>:</td>
				<td><input type="text" name="user" value="<?php echo $data['user']; ?>" required></td></tr>
			<tr><td>Password</td><td>:</td>
				<td><input type="text" name="pass" size="30" value="<?php echo $data['pass']; ?>" required></td></tr>
			<tr><td>Nama Lengkap</td><td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" required></td></tr>
			<tr><td>Email</td><td>:</td>
				<td><input type="text" name="email" size="30" value="<?php echo $data['email']; ?>" required></td></tr>
			<tr><td>Telepon</td><td>:</td>
				<td><input type="text" name="telp" size="30" value="<?php echo $data['telp']; ?>" required></td></tr>
			<tr><td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
    </center>
</body>
</html>
<?php include"footer.php";?>