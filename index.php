<?php include"header2.php" ?>
<html>
<head><title>.:: Login ::.</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="proses.php" method="post">
<table align="center">
<tr>
<td>Username</td>
<td><input type="text" name="uname"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td>Login Sebagai</td>
<td>
<select name="sebagai">
<option value="admin">Admin</option>
<option value="kasir">Kasir</option>
</select>
</td>
</tr>
<tr>
<td><input type="submit" value="Sign In"></td>
<td><a href="tambah_admin.php"><input type="button" value="Sign Up"></a></td>
</tr>
</table>
</form>
</body>
</html>
<?php include"footer.php" ?>