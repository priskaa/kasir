<?php include"header.php";?>
<html>
<head><title>.:: Tambah Kelas ::.</title><head>
<body>
<center>
<h2>TAMBAH DATA KELAS</h2>
<form method="post" action="tambah_kelas_sv.php">
<table>
<tr><td>Kode </td><td> <input type="text" name="kode"/><br>
<tr><td>kelas </td><td><input type="text" name="kelas"/><br>
<tr><td><input type="submit" name="simpan" value="simpan"/></td>
<td><a href="kelas.php">Batal</a></td></tr>
</table>
</form>
</center>
</body>
</html>
<?php include"footer.php";?>