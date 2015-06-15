<?php include"header.php";?>
<html><head><title>.:: Tambah Makanan ::.</title></head>
<body>
<center>
<h2>TAMBAH DATA PRODUK</h2>
<form method="post" action="tambah_makanan_sv.php">
<table>
<tr><td>ID Produk </td><td> <input type="text" name="id_produk"/><br>
<tr><td>Nama Produk </td><td> <input type="text" name="nama_produk"/><br>
<tr><td>Deskripsi </td><td> <input type="text" name="deskripsi"/><br>
<tr><td>Harga </td><td> <input type="text" name="harga"/><br>
<tr><td>Stok </td><td> <input type="text" name="stok"/><br>
<tr><td><input type="submit" name="simpan" value="simpan"/></td>
<td><a href="makanan.php">Batal</a></td></tr>
</table>
</form>
</center>
</body>
</html>
<?php include"footer.php";?>
