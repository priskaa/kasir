<html>
<head><title>.:: Registrasi Member ::.</title></head>
<body>
<?php include"header1.php";?>
<center>
<h2>REGISTRASI MEMBER</h2>
<table>
<form method="post" action="reg_mem_sv.php">
<tr><td><?php
    echo "<table>
	Kategori Kelas
          <select name='kelas'>
          <option value=0 selected>- Pilih Kategori -</option>";?>
<?php
include"konek.php";?>
<?php       $tampil=mysql_query("SELECT * FROM kelas ORDER BY kode");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[kode]>$r[kelas]</option>";
            }?><br>
<tr><td>Kode Member</td><td><input type="text" name="kode"/><br>
<tr><td>Nama</td><td><input type="text" name="nama"/><br>
<tr><td>Alamat</td><td><input type="text" name="alamat"/><br>
<tr><td>Telepon</td><td><input type="text" name="telp"/><br>
<tr><td>Biaya Reg.</td><td><input type="text" name="harga"/><br>
<tr><td><input type="submit" name="simpan" value="Daftar"/></td>
<td><a href="reg_mem.php">Batal</a></td></tr>
</form>
</table>
</center>
</body>
</html>
<?php include"footer.php";?>

