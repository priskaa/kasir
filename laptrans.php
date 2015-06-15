<html>
<head>
<title>Laporan Banana's Cafe </title>
</head>

<body>
<?php
include"konek.php";
$tgl=date(d-m-y);
		echo "<center><h2 style='margin-bottom:3px;'>Banana's Cafe</h2>
				Laporan Transaksi Banana's Cafe</center><hr/> ";
		echo "<table width=100% cellpadding=6>
          <tr style='color:#OOOOO; height:35px;' bgcolor=#FFFFF0><th>No Transaksi</th><th>Id Produk</th><th>Nama Produk</th><th>Harga</th><th>Jumlah Beli</th><th>Total</th></tr>";
	$query=mysql_query("select * from beli inner join produk on produk.id_produk=beli.id_produk order by no_trans");
 while($lihat=mysql_fetch_array($query)) {
		echo "	<tr align='center'>
				<td > $lihat[no_trans]</td>
				<td> $lihat[id_produk]</td>
				<td> $lihat[nama_produk]</td>
				<td> $lihat[harga]</td>
				<td> $lihat[jlh_beli]</td>
				<td> $lihat[jlh_beli]* $lihat[harga]</td>
				</tr>"; 
 
 
} 
    echo "</table><br/><tr><td><br/><span style='float:right; text-align:center;'> Banana's Cafe <br/>
										Karyawan<br/></br></br>
								(.............................................)
								<br/>$_SESSION[namalengkap]</span></td></tr>";
?>