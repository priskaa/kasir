<?php
if (isset($_GET['username'])){
	include('konek.php');
	$id = $_GET['username'];
	$cek = mysql_query("SELECT username FROM kasir WHERE username='$id'")or die(mysql_error());
	if(mysql_num_rows($cek)==0){
		echo'<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM kasir WHERE username='$id'");
		header("location:kasir.php");
		if($del){
			echo'Data Kasir berhasil di hapus! ';
		}
	}
}
?>