<?php
if(isset($_POST['simpan'])){
	include('konek.php');
	$username	= $_POST['username'];	
	$password	= $_POST['password'];	
	$nama		= $_POST['nama_lengkap'];	
	$email		= $_POST['email'];	
	$telepon	= $_POST['telepon'];
	$alamat	= $_POST['alamat'];
	
	$update = mysql_query("UPDATE kasir SET username='$username', password='$password', nama_lengkap='$nama', email='$email', telepon='$telepon', alamat='$alamat' WHERE username='$username'") or die(mysql_error());
	header("location:kasir.php");	
}	
?>