<html><head><title>.:: Hasil :..</title></head>
<body>
<?php
include"konek.php";
include"header1.php";
	$aidi = $_POST['aidi'];
	$lihat = mysql_query("select beli.no_trans,beli.id_produk,produk.nama_produk,format(produk.harga,0) as 'harga',beli.jlh_beli,format((produk.harga * beli.jlh_beli),0) as 'Total' from beli,produk where beli.id_produk = produk.id_produk and beli.no_trans = '".$aidi."' order by beli.no_trans DESC");
	$id = mysql_query("select no_trans from beli where no_trans = '".$aidi."' order by no_trans limit 1");
	$ar_id = mysql_fetch_array($id);
?><p>
<div align="center">
<div style="width:850px; height:auto;">
<table align="center" border="1" bgcolor="lightgray">
	<tr>
    	<td colspan="5">No.Transaksi : <?php echo "<input type='text' name='id' value='".$ar_id['no_trans']."' />"; ?></td>
    </tr>
	<tr>
    	<td>Kode Barang</td>
        <td>Nama Barang</td>
        <td>Harga Barang</td>
        <td>Jumlah Barang</td>
        <td>Jumlah Harga</td>
    </tr>
    <?php
		while($arr = mysql_fetch_array($lihat))
		{
			echo "<tr>
				<td><input type='text' value = '".$arr['id_produk']."' /></td>
				<td><input type='text' value = '".$arr['nama_produk']."' /></td>
				<td><input type='text' value = 'Rp.".$arr['harga']."' /></td>
				<td><input type='text' value= '".$arr['jlh_beli']."' /></td>
				<td><input type='text' value = 'Rp.".$arr['Total']."' id = 'test'  /></td>
			</tr>";
		}
		$hasil = mysql_query("select format(sum(produk.harga * beli.jlh_beli),0) as 'jlh_total' from beli,produk where beli.id_produk = produk.id_produk and beli.no_trans = '".$aidi."'");
		$arr_hsl = mysql_fetch_array($hasil);
        echo "<form method='post' action='laporan/laporan.php' enctype='multipart/form-data' target='_blank'>
		<tr>
			<td colspan='5' align='right'>Tolal Harga : <input type='text' value='Rp.".$arr_hsl['jlh_total']."' /><input type='hidden' name='id' value='".$aidi."' /></td>
		</tr>
		<tr>
		<td colspan='5' align='right'><input id='lain' type='submit' value='Cetak Bill' /></td>
		</tr>
		</form>";
	?>
    <tr><td colspan="5">&lt;&lt; <a href="trans.php">Back to index</a></td></tr>
</table>
</div></div><p>
<?php include"footer.php";?>
</html>
</body>