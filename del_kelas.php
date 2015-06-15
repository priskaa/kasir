<?php
if (isset($_GET['kode'])){
	include('konek.php');
	$id = $_GET['kode'];
	$cek = mysql_query("SELECT kode FROM kelas WHERE kode='$id'")or die(mysql_error());
	if(mysql_num_rows($cek)==0){
		echo'<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM kelas WHERE kode='$id'");
		header("location:kelas.php");
		if($del){
			echo'Data Admin berhasil di hapus! ';
		}
	}
}
?>