<?php
if(isset($_POST['simpan'])){
	include('konek.php');
	$u	= $_POST['kode'];	
	$p	= $_POST['kelas'];	
	
	$update = mysql_query("UPDATE kelas SET kode='$u', kelas='$p' WHERE kode='$u'") or die(mysql_error());
	header("location:kelas.php");	
}	
?>