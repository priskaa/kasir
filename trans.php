<html>
<center>
<?php include"header1.php";?>
<head><title>.:: Transaksi ::.</title>
<script type="text/javascript" src="jquery-1.7.1.js"></script>
</head>

<body>
<div class="judul">
Transaksi Banana's Cafe
</div>
<?php
	$tanggal = date('d-m-y');
include"konek.php";
$no=$_GET['id_produk'];
?>
<div align="center">
<div style="width:700px; height:auto; padding:0px 0 10px 0; border-radius:10px; -webkit-border-radius:10px;">
<center>
<form action="beli_sementara.php" method="post"  enctype="multipart/form-data">
<table align="center" >
<tr><td>No.Transaksi   </td><td><input type="text" name="id" /></br>
<tr><td>Jumlah Barang</td><td><input type="text" name="jlh_brg" /><br>      
<tr><td><input type="hidden" name="tgl" value="<?php echo $tanggal ?>" /></td>
<td colspan="2"><input type="submit"  value="LIHAT" /></td></tr>
</table>
</form>
</div></div>
</center>
</body>

<?php include"footer.php";?>
</center>
</html>