<html><head><title>.:: Update Kelas :..</title></head>
<body>
	<?php
	include('header.php');
	include('konek.php');
	$id = $_GET['kode'];
	$show = mysql_query("SELECT * FROM kelas WHERE kode='$id'");
	if(mysql_num_rows($show) == 0){
				echo '<script>window.history.back()</script>';
	}else{
		$data = mysql_fetch_assoc($show);
	}
	?>
    <center>
    <h2>UPDATE DATA KELAS</h2>
	<form action="upd_kelas_sv.php" method="post">
		<input type="hidden" name="kode" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0">
			<tr><td>Kode</td><td>:</td>
				<td><input type="text" name="kode" value="<?php echo $data['kode']; ?>" required></td></tr>
			<tr><td>kelas</td><td>:</td>
				<td><input type="text" name="kelas" size="30" value="<?php echo $data['kelas']; ?>" required></td></tr>
			<tr><td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
    </center>
</body>
</html>
<?php include('footer.php');?>
