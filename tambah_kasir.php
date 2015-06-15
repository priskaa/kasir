<html><head><title>.:: Tambah Kasir :..</title></head>
<body>
<center>
<?php include"header.php";?>
<h2>TAMBAH DATA KASIR</h2>
<table>
<form method="post" action="tambah_kasir_sv.php">
<tr><td>Username : </td><td><input type="text" name="username"/><br>
<tr><td>Password : </td><td><input type="text" name="password"/><br>
<tr><td>Nama lengkap : </td><td><input type="text" name="nama_lengkap"/><br>
<tr><td>Email : </td><td><input type="text" name="email"/><br>
<tr><td>Telepon : </td><td><input type="text" name="telepon"/><br>
<tr><td>Alamat : </td><td><input type="text" name="alamat"/><br>
<tr><td><input type="submit" name="simpan" value="simpan"/></td>
<td><a href="kasir.php">Batal</a></td></tr>
</form>
</table>
<?php include"footer.php";?>
</center>
</body>
</html>