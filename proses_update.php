<?php
include"konek.php";
	$kode = $_POST['id_produk'];
	$nama = $_POST['name'];
	$hrg = $_POST['hrg'];
	$satuan = $_POST['satuan'];
	
	$simpan = mysql_query("update produk set nama_produk = '$nama', harga = '$hrg', stok = '$satuan' where id_produk = '$kode'");
?>

<script type="text/javascript">
	document.location.href = "makanan.php";
	
</script>