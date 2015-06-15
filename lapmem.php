<html>
<head>
<title>Laporan Banana's Cafe </title>
</head>

<body>
<?php
include"konek.php";
$tgl=date(d-m-y);
		echo "<center><h2 style='margin-bottom:3px;'>Banana's Cafe</h2>
				Laporan Member Banana's Cafe</center><hr/> ";
		echo "<table width=100% cellpadding=6>
          <tr style='color:#OOOOO; height:35px;' bgcolor=#FFFFF0><th>Kode</th><th>Nama Lengkap</th><th>Alamat</th><th>Telp</th><th>Kelas</th></tr>";
	$query=mysql_query("select * from member");
 while($lihat=mysql_fetch_array($query)) {
		echo "	<tr align='center'>
				<td > $lihat[kode]</td>
				<td> $lihat[nama]</td>
				<td> $lihat[alamat]</td>
				<td> $lihat[telp]</td>
				<td> $lihat[kelas]</td>
				</tr>"; 
	$no++;
 
 
} 
    echo "</table><br/><tr><td><br/><span style='float:right; text-align:center;'> Banana's Cafe <br/>
										Karyawan<br/></br></br>
								(.............................................)
								<br/>$_SESSION[namalengkap]</span></td></tr>";
?>