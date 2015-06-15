<?php
include 'config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$sebagai=$_POST['sebagai'];
 
if($sebagai=='admin'){
$query=mysql_query("select * from admin where user='$uname' and pass='$pass'");
$cek=mysql_num_rows($query);
if($cek==1){
header("location:admin.php");
}else{
echo "gagal login";
}
}else if($sebagai=='kasir'){
$query=mysql_query("select * from kasir where username='$uname' and password='$pass'");
$cek=mysql_num_rows($query);
if($cek==1){
header("location:utama.php");
}else{
echo "gagal login";
}
}
?>