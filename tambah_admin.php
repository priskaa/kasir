<html><head><title>.:: Tambah Admin :..</title></head>
<body>
<?php include"header.php";?>
<center>
<h2>TAMBAH DATA ADMIN</h2>
<table>
<form method="post" action="tambah_admin_sv.php">
<tr><td>Username 	 : </td><td><input type="text" name="user"/></td></tr>
<tr><td>Password 	 : </td><td><input type="text" name="pass"/><br>
<tr><td>Nama Lengkap : </td><td><input type="text" name="nama"/><br>
<tr><td>Email 		 : </td><td><input type="text" name="email"/><br>
<tr><td>Telepon 	 : </td><td><input type="text" name="telp"/><br>
<tr><td><input type="submit" name="simpan" value="simpan"/></td>
<td><a href="admin.php">Batal</a></td></tr>
</form>
<table>
</center>
<p>
<?php include"footer.php";?>
</html>
</body>