<html>
<head>
<title>Laporan Banana's Cafe </title>
</head>

<body>
<?php
include"konek.php";
$tgl=date(d-m-y);
		echo "<center><h2 style='margin-bottom:3px;'>Banana's Cafe</h2>
				Laporan Produk Banana's Cafe</center><hr/> ";
		echo "<table width=100% cellpadding=6>
          <tr style='color:#OOOOO; height:35px;' bgcolor=#FFFFF0><th>ID Produk</th><th>Nama Produk</th><th>Deskripsi</th><th>Harga</th><th>Stok</th></tr>";
	$query=mysql_query("select * from produk order by id_produk");
 while($lihat=mysql_fetch_array($query)) {
		echo "	<tr align='center'>
				<td > $lihat[id_produk]</td>
				<td> $lihat[nama_produk]</td>
				<td> $lihat[deskripsi]</td>
				<td> $lihat[harga]</td>
				<td> $lihat[stok]</td>
				</tr>"; 
	$no++;
 
 
} 
    echo "</table><br/><tr><td><br/><span style='float:right; text-align:center;'> Banana's Cafe <br/>
										Karyawan<br/></br></br>
								(.............................................)
								<br/>$_SESSION[namalengkap]</span></td></tr>";
?>