<?php
if (isset($_GET['user'])){
	include('konek.php');
	$id = $_GET['user'];
	$cek = mysql_query("SELECT user FROM admin WHERE user='$id'")or die(mysql_error());
	if(mysql_num_rows($cek)==0){
		echo'<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM admin WHERE user='$id'");
		header("location:admin.php");
		if($del){
			echo'Data Admin berhasil di hapus! ';
		}
	}
}
?>