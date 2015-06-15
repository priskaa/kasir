<?php include"konek.php";
include"header1.php";?>
<html>
<head>
<title>.:: Proses ::.</title>
</head>
<body>
<?php

	$jumlah = $_POST['jlh_angka'];
	for($i = 1; $i <= $jumlah; $i++)
	{
		$id[$i] = $_POST['id_pembeli'.$i];
		$tgl[$i] = $_POST['tgl_beli'.$i];
		$kd_brg[$i] = $_POST['kd'.$i];
		$satuan_brg[$i] = $_POST['satuan'.$i];
		mysql_query("insert into beli values('".$id[$i]."','".$kd_brg[$i]."','".$satuan_brg[$i]."','".$tgl[$i]."')");
		mysql_query("update produk set stok = stok - '".$satuan_brg[$i]."' where id_produk = '".$kd_brg[$i]."'");
	}
	?>
    <div align="center">
<div style="width:400px;">
    <?php
	echo "<form enctype='multipart/form-data' action='calculation.php' method='post'>
			<table>
			<tr>
			<td><h2><marquee behavior='alternate'>Lihat Dan Cetak</h2></marquee></td>
			</tr>
			<tr>
			<td align='center'>
			<input type='hidden' name='aidi' value='".$id[1]."' />
			<input type='submit' value='Lihat Daftar' onclick='muat'/>
			</td>
			</tr>
			</table>
		</form>";
?>
<script type="text/javascript">
	function muat()
	{
	document.location.href = "calculation.php";
	}
</script>
</div></div>
</body>
</html>
<?php include"footer.php";?>