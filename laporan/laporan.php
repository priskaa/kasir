<?php 
$koneksi = mysql_connect("localhost","root","") or die("Koneksi Gagal !" . mysql_error());
$database = mysql_select_db("coba");

require('fpdf.php');
$pdf = new FPDF();
$pdf->addPage();
$pdf->setAutoPageBreak(false);
$pdf->setFont('Arial','',12);

$aidi = $_POST['id'];

$tgl = date('d-m-y');
$id_beli = mysql_query("select no_trans from beli where no_trans = '".$aidi."'");
$ar_data = mysql_fetch_array($id_beli);

$pdf->text(75,30,'BILL PEMBAYARAN');
$pdf->text(10,37,'No.Transaksi : ');
$pdf->text(45,37,$ar_data['no_trans']);
$pdf->text(150,37,'Tanggal : ');
$pdf->text(170,37,$tgl);


$yi = 50;
$ya = 44;
$row = 6;

$pdf->setFont('Arial','',9);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);
$pdf->cell(6,6,'No',1,0,'C',1);
$pdf->CELL(25,6,'Nama Barang',1,0,'C',1);
$pdf->CELL(50,6,'Harga Barang',1,0,'C',1);
$pdf->CELL(50,6,'Jumlah Beli',1,0,'C',1);
$pdf->CELL(50,6,'Jumlah Harga',1,0,'C',1);
$ya = $yi + $row;

$lihat = mysql_query("select beli.no_trans,beli.id_produk,produk.nama_produk,format(produk.harga,0) as 'harga',beli.jlh_beli,format((produk.harga * beli.jlh_beli),0) as 'Total' from beli,produk where beli.id_produk = produk.id_produk and beli.no_trans = '".$aidi."'");

$i = 1;
$no = 1;
$max = 31;

while($data = mysql_fetch_array($lihat)){

$pdf->setXY(10,$ya);
$pdf->setFont('arial','',9);
$pdf->setFillColor(255,255,255);
$pdf->cell(6,6,$no,1,0,'C',1);
$pdf->cell(25,6,$data['nama_produk'],1,0,'L',1);
$pdf->cell(50,6,$data['harga'],1,0,'L',1);
$pdf->cell(50,6,$data['jlh_beli'],1,0,'L',1);
$pdf->CELL(50,6,$data['Total'],1,0,'C',1);
$ya = $ya+$row;
$no++;
$i++;
}
$hasil = mysql_query("select format(sum(produk.harga * beli.jlh_beli),0) as 'jlh_total' from beli,produk where beli.id_produk = produk.id_produk and beli.no_trans = '".$aidi."'");
$arr_hsl = mysql_fetch_array($hasil);
$pdf->text(150,$ya+7,"Total Harga  :  Rp.".$arr_hsl['jlh_total']);


$pdf->output();

?>