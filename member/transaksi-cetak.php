<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Transaksi Cetak</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style1.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>

<?php
include "koneksi.php";
include "session.php";
$tanggal=date("d-m-Y");
?>

<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="#">Advanced Search</a></div>
      <form name="pencarian" action="search-member.php" method="post">
  <input class="search" type="text" name="pencarian" placeholder="Nama Produk" required>	
  <input class="button" type="submit" name="cari" value="Search">		
</form>
    </div>
    
  <div id="header">
    <div id="logo"> <a href="http://all-free-download.com/free-website-templates/"><img src="images/logo1.png" alt="" border="0" width="267" height="120" /></a> </div>
    <div class="oferte_content">
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>      
      <div class="oferta">      
        <div class="oferta_content"><img src="images/toko.png" width="94" height="92" alt="" border="0" class="oferta_img" /> 
          <div class="oferta_details">
            <div class="oferta_title">Silahkan Jika Ingin Mengunjungi Toko Kami</div>
            <div class="oferta_text"><div class="fa fa-map-marker fa-1.5x"></div> Jalan Kutoarjo - Kebumen Km 07 Butuh, Purworejo</br><div class="fa fa-phone fa-1.5x"></div> +6285228053623 | <div class="fa fa-envelope fa-1.5x"></div> acerudyn@yahoo.com</br> <div class="fa fa-globe fa-1.5x"></div>
www.jamku.com </div>
            <a href="details.html" class="details">details</a> </div>
        </div>
      </div>
      
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
    </div>
    <!-- end of oferte_content-->
  </div>
  
    <!-- end of menu tab -->
    
    <div class="crumb_navigation"></div>
    <div class="left_content1"></div>
    <!-- end of left content -->
    
    <div class="center_content1">
      <div class="center_title_bar1"> Cetak Transaksi</div>
      	<div class="prod_box1">
<?php
$kodetrans=$_GET['cetak'];
$sql=mysql_query("SELECT * FROM transaksi WHERE id_transaksi='$kodetrans'");
$lihat=mysql_fetch_array($sql);

	$kodemember=$lihat['id_member'];
	$query=mysql_query("SELECT * FROM member WHERE id_member='$kodemember'");
	$member=mysql_fetch_array($query);
?>        
        <table width="620" border="0" align="center">
  <tr>
    <td width="156"><strong>Nomor Transaksi</strong></td>
    <td width="48" align="left"><strong>:</strong></td>
    <td width="402"><strong><?php echo $lihat['id_transaksi']; ?></strong></td>
  </tr>
  <tr>
    <td><strong>Tanggal Transaksi</strong></td>
    <td align="left"><strong>:</strong></td>
    <td><strong><?php echo date("d-m-Y", strtotime( $lihat['tanggal'])) ?></strong></td>
  </tr>
  <tr>
    <td><strong>ID Member</strong></td>
    <td align="left"><strong>:</strong></td>
    <td><strong><?php echo $lihat['id_member']; ?></strong></td>
  </tr>
  <tr>
    <td><strong>Nama Member</strong></td>
    <td align="left"><strong>:</strong></td>
    <td><strong><?php echo $member['nama_member']; ?></strong></td>
  </tr>
  <tr>
    <td height="18" colspan="3"><strong>--------------------------------------------------------------------------------------------------------------------------------------------------------</strong></td>
    </tr>
  <tr>
    <td><strong>Nama Penerima</strong></td>
    <td align="left"><strong>:</strong></td>
    <td><strong><?php echo $lihat['penerima']; ?></strong></td>
  </tr>
  <tr>
    <td><strong>Alamat Lengkap</strong></td>
    <td align="left"><strong>:</strong></td>
    <td><strong><?php echo $lihat['alamat']; ?></strong></td>
  </tr>
  <tr>
    <td><strong>Email</strong></td>
    <td align="left"><strong>:</strong></td>
    <td><strong><?php echo $member['email']; ?></strong></td>
  </tr>
  <tr>
    <td><strong>Nomor Telepon/ HP</strong></td>
    <td align="left"><strong>:</strong></td>
    <td><strong><?php echo $member['telepon']; ?></strong></td>
  </tr>
  <tr>
    <td colspan="3" align="right"><strong>---------------------------------------------------------------------------------------------------------------------------------------------------------</strong></td>
    </tr>
</table>

<table width="620" height="339" border="0" align="center">
  <tr>
    <td width="101" align="right"><strong>Kode Barang</strong></td>
    <td width="197" align="right"><strong>Nama Barang</strong></td>
    <td width="108" align="right"><strong>Harga</strong></td>
    <td width="71" align="right"><strong>Jumlah</strong></td>
    <td width="114" align="right"><strong>Total</strong></td>
  </tr>
  <tr>
    <td height="17" colspan="5" align="right">---------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
<?php 
$id_trans	= $_GET['cetak'];
$tampil=mysql_query("select * from pemesanan where id_pesan='$id_trans' order by id_produk desc");
$jumlah=mysql_num_rows($tampil); 
while($data=mysql_fetch_array($tampil)){
	$kode	= $data['id_produk'];
	$produk	= mysql_query("SELECT * FROM produk WHERE id_produk='$kode' ");
	$dataproduk = mysql_fetch_array($produk);
?>    
  <tr>
    <td align="right"><strong><?php echo $data['id_produk'];?></strong></td>
    <td align="right"><strong><?php echo $dataproduk['nama_produk'];?></strong></td>
    <td align="right"><strong><?php echo $dataproduk['harga'];?></strong></td>
    <td align="right"><strong><?php echo $data['jumlah'];?></strong></td>
    <td align="right"><strong><?php
	$total		= $dataproduk['harga'] * $data['jumlah'];	
	echo $total;
	$grandtotal	= $grandtotal + $total;?></strong></td>
  </tr>
<?php }?>
  <tr>
    <td colspan="5" align="right">---------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
<?php 
$totaltransaski	= $lihat['total'];
$kirim			= $totaltransaski - $grandtotal;
?>    
  <tr>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td colspan="2" align="right"><strong>Total Belanja </strong></td>
    <td align="right"><strong><?php echo $grandtotal;?></strong></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td colspan="2" align="right"><strong>Biaya Kirim </strong></td>
    <td align="right"><strong><?php echo $kirim;?></strong></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td colspan="2" align="right"><strong>Grand Total  </strong></td>
    <td align="right"><strong><?php echo $totaltransaski;?></strong></td>
  </tr>
  <tr>
    <td height="24" colspan="4"><strong>Jadi Total yang Harus Ditransfer Adalah Rp. </strong><span style="font-size:12px; color:#00C; font-weight:bolder;"><?php echo $totaltransaski;?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="47" colspan="5" align="left" valign="top"><table width="614" height="146" border="0">
      <tr>
        <td colspan="3" align="center" valign="top">-----------------------------------------------------------------------------------------------------------------------------------------------------</td>
        </tr>
      <tr>
        <td width="205" align="center" valign="top"><p><img src="images/logo bca.png" alt="logo bca.png" width="93" height="63"/></p>
      <p><strong>874-0615-45-0</strong></p>
      <p>atas nama</p>
      <p><strong>Muhamad Akhirudin</strong></p></td>
        <td width="197" align="center" valign="top"><img src="images/logo mandiri.png" alt="logo mandiri.png" width="93" height="63"/></p>
      <p><strong>156-00-0712975-4</strong></p>
      <p>atas nama</p>
      <p><strong>Muhamad Akhirudin</strong></p></td>
        <td width="190" align="center" valign="top"><img src="images/logo bri.png" alt="logo bri.png" width="93" height="63"/>
    </p>
      <p><strong>1131-01-011870-50-7</strong></p>
      <p>atas nama</p>
      <p><strong>Muhamad Akhirudin</strong></p></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td height="16" colspan="5" align="center" valign="bottom">---------------------------------------------------terimakasih telah belanja di jamku.com--------------------------------------------------------</td>
    </tr>
</table>


   	  </div>
      </div>
           
    <!-- end of center content --><!-- end of right content -->
  </div>
  <!-- end of main content -->
  
  <div class="footer">
    <div class="left_footer"> <img src="images/logo1.png" alt="" width="130" height="49"/> </div>
    <div class="center_footer"> Template name. All Rights Reserved 2016<br />
     <a href="http://acerudyn.hol.es"target="_blank" title="visit me">acerudyn.hol.es</a><br />
      <img src="images/payment.gif" alt="" /> 
  </div>
    <div class="left_footer1"> <img src="images/logo1.png" alt="" width="130" height="49"/> </div></div>
   </div>
<!-- end of main_container -->
</body>
</html>
