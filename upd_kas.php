<html><head><title>.:: Update Kasir :..</title></head>
<body>
	<?php
	include"header.php";
	include('konek.php');
	$id = $_GET['username'];
	$show = mysql_query("SELECT * FROM kasir WHERE username='$id'");
	if(mysql_num_rows($show) == 0){
				echo '<script>window.history.back()</script>';
	}else{
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	}
	?>
    <center>
    <h2>UPDATE DATA KASIR</h2>
	<form action="upd_kas_sv.php" method="post">
		<input type="hidden" name="username" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
			<td>Username</td><td>:</td>
				<td><input type="text" name="username" value="<?php echo $data['username']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
			<td>Password</td><td>:</td>
				<td><input type="text" name="password" size="30" value="<?php echo $data['password']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
			<tr>
			<td>Nama Lengkap</td><td>:</td>
				<td><input type="text" name="nama_lengkap" size="30" value="<?php echo $data['nama_lengkap']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
			<td>Email</td><td>:</td>
				<td><input type="text" name="email" size="30" value="<?php echo $data['email']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>				
			<td>Telepon</td><td>:</td>
				<td><input type="text" name="telepon" size="30" value="<?php echo $data['telepon']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
			<td>Alamat</td><td>:</td>
				<td><input type="text" name="alamat" size="30" value="<?php echo $data['alamat']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
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