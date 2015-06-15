<?php
if(isset($_POST['simpan'])){
	include('konek.php');
	$username	= $_POST['user'];	
	$password	= $_POST['pass'];	
	$nama		= $_POST['nama'];	
	$email		= $_POST['email'];	
	$telepon	= $_POST['telp'];
	
	$update = mysql_query("UPDATE admin SET user='$username', pass='$password', nama='$nama', email='$email', telp='$telepon' WHERE user='$username'") or die(mysql_error());
	header("location:admin.php");	
}	
?>