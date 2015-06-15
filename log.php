<?php
session_start();
mysql_connect("localhost","root","") or die ("nggak bisa koneksi");
mysql_select_db("coba");

$userid=$_POST['userid'];
$psw=$_POST['psw'];
$op=$_GET['op'];

if($op=="in"){
	$cek=mysql_query("SELECT * FROM admin WHERE user='$userid' AND pass='$psw'");
	if(mysql_num_rows($cek)==1){
		$c=mysql_fetch_array($cek);
		$_SESSION['userid']=$c['userid'];
		$_SESSION['level']=$c['level'];
		if($c['level']=="admin"){
			header("location:kategori.php");
		}else if($c['level']=="kasir"){
			header("location:utama.php");
		}
	}else{
		die("password salah");
	}
}else if($op=="out"){
	unset($_SESSION['userid']);
	unset($_SESSION['level']);
	header("location:index.php")
}
?>