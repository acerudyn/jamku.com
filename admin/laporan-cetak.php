<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Laporan Cetak</title>
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

$per_hal		= 25;
$jumlah_record	= mysql_query("SELECT COUNT(*) from transaksi");
$jum			= mysql_result($jumlah_record, 0);
$halaman		= ceil($jum / $per_hal);
$page			= (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start			= ($page - 1) * $per_hal;

date_default_timezone_set("Asia/Jakarta");
$tanggal	= date("Y-m-d");
$jam		= date("h:i:s a");

$tglawal	= $_POST['tglawal'];
$tglakhir	= $_POST['tglakhir'];
$filter 	= $_POST['filter'];
$admin		= $_POST['admin'];
$myquery		= mysql_query("SELECT * FROM admin WHERE id_admin='$admin'");
$adm		= mysql_fetch_array($myquery);

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
    <div class="left_content"></div>
    <!-- end of left content -->
    
    <div class="center_content2">
      <div class="center_title_bar2">Laporan  Transaksi Penjualan</div>
   	  <div class="prod_box2">
             
        <table width="867" border="0" align="center">
  <tr>
    <td width="156"><strong>ID Admin</strong></td>
    <td width="14" align="left"><strong>:</strong></td>
    <td width="436"><strong><?php echo $admin; ?></strong></td>
  </tr>
  <tr>
    <td><strong>Nama Admin</strong></td>
    <td align="left"><strong>:</strong></td>
    <td><strong><?php echo $adm['nama_admin']; ?></strong></td>
  </tr>
  <tr>
    <td><strong>Periode Laporan</strong></td>
    <td align="left"><strong>:</strong></td>
    <td><strong><?php echo "$tglawal s/d $tglakhir"; ?></strong></td>
  </tr>
  <tr>
    <td><strong>Waktu Cetak</strong></td>
    <td align="left"><strong>:</strong></td>
    <td><strong><?php echo "$tanggal - $jam"; ?></strong></td>
  </tr>
  <tr>
    <td colspan="3" align="right"><strong>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</strong></td>
  </tr>
</table>

<table width="867" height="130" border="0" align="center">
  <tr>
    <td width="30" height="26" align="center" bgcolor="#dad0d0"><strong>No.</strong></td>
    <td width="112" align="center" bgcolor="#dad0d0"><strong>Tanggal Transaksi</strong></td>
    <td width="114" align="center" bgcolor="#dad0d0"><strong>Nomor Transaski</strong></td>
    <td width="82" align="center" bgcolor="#dad0d0"><strong>Kode Barang</strong></td>
    <td width="118" align="center" bgcolor="#dad0d0"><strong>Nama Barang</strong></td>
    <td width="72" align="center" bgcolor="#dad0d0"><strong>Harga Asli</strong></td>
    <td width="73" align="center" bgcolor="#dad0d0"><strong>Harga Jual</strong></td>
    <td width="50" align="center" bgcolor="#dad0d0"><strong>Jumlah</strong></td>
    <td width="83" align="center" bgcolor="#dad0d0"><strong>Total</strong></td>
    <td width="91" align="center" bgcolor="#dad0d0"><strong>Keuntungan</strong></td>
  </tr>
  <tr>
    <td height="16" colspan="11" align="right">-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
<?php 
$query=mysql_query("SELECT transaksi.*, pemesanan.* FROM transaksi, pemesanan WHERE transaksi.id_transaksi=pemesanan.id_pesan AND $filter ORDER BY transaksi.id_transaksi=pemesanan.id_pesan desc limit $start, $per_hal");
$no=0;
	while($data=mysql_fetch_array($query)){
	$no++;
	$jumData	= mysql_num_rows($query);
	$member		= $data['id_member'];
	$baca		= mysql_query("SELECT * FROM member WHERE id_member='$member' ");
	$bacadata = mysql_fetch_array($baca);
?>    
  <tr>
    <td height="22" align="center"><?php echo $no;?></td>
    <td align="center"><?php echo $data['tanggal'];?></td>
    <td align="center"><?php echo $data['id_transaksi'];?></td>
    <td align="center"><?php echo $data['id_produk'];?></td>
    <td align="center">
    <?php
	$baca		= mysql_query("SELECT * FROM produk WHERE id_produk='$data[id_produk]' ");
	$bacadata = mysql_fetch_array($baca);
	 echo $bacadata['nama_produk']; ?></td>
    <td align="center">
    <?php 
	$untung		= 1/4 * $bacadata['harga'];
	$harga_asli	= $bacadata['harga'] - $untung;
	echo "$harga_asli";
	?></td>
    <td align="center"><?php echo $bacadata['harga'];?></td>
    <td align="center"><?php echo $data['jumlah'];?></td>
    <td align="center">
    <?php 
	$total		= $bacadata['harga'] * $data['jumlah'];
	$total_awal	= $harga_asli * $data['jumlah'];
	$selisih	= $total - $total_awal;
	$keuntungan	= $keuntungan + $selisih;
	echo "$total";
	?>
    </td>
    <td colspan="2" align="center"><?php echo "$selisih";?></td>
    </tr>
<?php }?>
  <tr>
    <td height="16" colspan="11" align="right">-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>   
  <tr>
    <td height="20" colspan="2" align="right" bgcolor="#dad0d0"><strong>Jumlah Data : <?php if ($jumData==0){
		echo "Kosong";}else{ echo "$jumData";} ?></strong></td>
    <td colspan="7" align="right" bgcolor="#dad0d0"><strong>Jumlah Keuntungan :</strong></td>
    <td align="center" bgcolor="#dad0d0"><strong><?php if ($jumData==0){
		echo "0";}else{ echo "$keuntungan";} ?></strong></td>
    </tr>
  <tr>
    <td height="16" colspan="11" align="center" valign="bottom">-----------------------------------------------------------------------------------terimakasih telah belanja di jamku.com-------------------------------------------------------------------------------------</td>
  </tr>
</table>
        
   	  </div>
      <div class="center_title_bar4"> <span>
          <?php if ($page >1){
			$page-1;}else { $page+1;} ?>
<a href=""> < </a>
<?php 
 
for($x=1;$x<=$halaman;$x++){
	?>
	<a href=""><?php echo $x ?> </a> 
	<?php 
} 
?><a href=""> > </a>
	</span>  </div>
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
