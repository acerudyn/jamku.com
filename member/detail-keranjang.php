<?php
$kodemember=$_SESSION['member'];
$tampil=mysql_query("select * from keranjang where id_member='$kodemember' order by id_produk desc");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
	$kode	= $data['id_produk'];
	$produk	= mysql_query("SELECT * FROM produk WHERE id_produk='$kode' ");
	$dataproduk = mysql_fetch_array($produk); 
	$total		= $dataproduk['harga'] * $data['jumlah'];
	$grandtotal	= $grandtotal + $total;
			} 
 										}?>