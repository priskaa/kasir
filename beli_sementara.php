<html><head><title>.:: Transaksi :..</title></head>
<body>
<?php
include"konek.php";
include"header1.php";
?>
<center>
<h2>SIMPAN & CETAK BILL</h2>
<div align="center">
<div style="width:700px; height:auto;">
<table border="1"align="center" width="200">
<form method='post' enctype="multipart/form-data" action="proses1.php" id='form2'>
                <tr bgcolor="gray">
                	<th>Kode Barang</th>
                    <th>Jumlah Beli</th>
                </tr>
            <?php 
			$jumlah = $_POST['jlh_brg'];
			
			for($a = 1; $a <= $jumlah; $a++)
			{
				$b[$a] = $_POST['id'];
				$c[$a] = $_POST['tgl'];
			}
			
			
			for($i = 1; $i <= $jumlah; $i++)
			{
               echo "<tr>
                	<td><select name='kd".$i."'>";
				$lihat = mysql_query("select * from produk");
				while($data = mysql_fetch_array($lihat))
				{
					echo "<option value=".$data['id_produk'].">".$data['id_produk']."<option>";
				}
			
        	echo "</select></td>
				<td><input type='text' name='satuan".$i."' /><input type='hidden' name='jlh_angka' value='".$jumlah."' /><input type='hidden' name='id_pembeli".$i."' value='$b[$i]' /><input type='hidden' name='tgl_beli".$i."' value='$c[$i]' /></td>
                </tr>";
			}
			?>
            <tr colspan="2">
            <td>
            <input type="submit" value="Kirim" />
            </td>
            </tr>
            </form>
</table>
</div></div></center><p>
<?php include"footer.php"; ?>
</html>
</body>