<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
// Baca Jam pada Komputer
date_default_timezone_set("Asia/Jakarta");

# Deklarasi variabel
$filterSQL = ""; 
$tglAwal	= ""; 
$tglAkhir	= "";

# Membaca tanggal dari form, jika belum di-POST formnya, maka diisi dengan tanggal sekarang
$tglAwal 	= isset($_POST['cmbTglAwal']) ? $_POST['cmbTglAwal'] : date('Y-m')."-01";
$tglAkhir 	= isset($_POST['cmbTglAkhir']) ? $_POST['cmbTglAkhir'] :date('Y-m-d');

// Jika tombol filter tanggal (Tampilkan) diklik
if (isset($_POST['btnTampil'])) {
	// Membuat sub SQL filter data berdasarkan 2 tanggal (periode)
	$filterSQL = "WHERE ( tanggal BETWEEN '".($tglAwal)."' AND '".($tglAkhir)."')";
}
else {
	// Membaca data tanggal dari URL, saat menu Pages diklik
	$tglAwal 	= isset($_GET['tglAwal']) ? $_GET['tglAwal'] : $tglAwal;
	$tglAkhir 	= isset($_GET['tglAkhir']) ? $_GET['tglAkhir'] : $tglAkhir; 
	
	// Membuat sub SQL filter data berdasarkan 2 tanggal (periode)
	$filterSQL = "WHERE ( tanggal BETWEEN '".($tglAwal)."' AND '".($tglAkhir)."')";
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Laporan</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
<link rel="stylesheet" type="text/css" href="../plugins/tigra_calendar/tcal.css"/>
<script type="text/javascript" src="../plugins/tigra_calendar/tcal.js"></script> 
</head>

<?php
include "koneksi.php";
include"session.php";
	$per_hal=25;
	$jumlah_record=mysql_query("SELECT COUNT(*) from transaksi");
	$jum=mysql_result($jumlah_record, 0);
	$halaman=ceil($jum / $per_hal);
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start = ($page - 1) * $per_hal;
?>

<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="http://all-free-download.com/free-website-templates/">Advanced Search</a></div>
      <input type="text" class="search_input" name="search" />
      <input type="image" src="images/search.gif" class="search_bt"/>
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
    <div class="left_content">
      <div class="title_box">Menu Admin</div>
      <ul class="left_menu">
     	<li class="odd"><a href="home-admin.php">Home</a></li>
      	<li class="even"><a href="admin.php">Admin</a></li>
        <li class="odd"><a href="brand.php">Brands</a></li>
        <li class="even"><a href="kategori.php">Categories</a></li>
        <li class="odd"><a href="contact.php">Contact</a></li>
        <li class="even"><a href="member.php">Member</a></li>
        <li class="odd"><a href="produk.php">Product</a></li>
        <li class="even"><a href="testimonial.php">Testimonial</a></li>
        <li class="odd"><a href="transaksi.php">Transaction</a></li>
        <li class="even"><a href="logout-admin.php">Logout</a></li>
      </ul>
      <div class="border_box">
        <div class="product_img"></div></div>
      </div>
    <!-- end of left content -->
    
    <div class="center_content1">
      <div class="center_title_bar3">LAPORAN</div>
      
      <div class="prod_box_big1">

  <form action="<?php $_SERVER['PHP_SELF']; ?>" target="_self" method="post">
          <table width="356" height="91" border="0" align="left">
  <tr>
    <td width="111"><strong>Periode</strong></td>
    <td width="14" align="center"><strong>:</strong></td>     
    <td width="209"><input name="cmbTglAwal" type="text" class="tcal" value="<?php echo $tglAwal; ?>" />
    s/d</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td><input name="cmbTglAkhir" type="text" class="tcal" value="<?php echo $tglAkhir; ?>" /></td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td><input type="submit" name="btnTampil"  value="Tampilkan" /></td>
  </tr>
</table>
        </form>
              </label>
      </div>
      
      <div class="prod_box_big1">
        
        
            <div class="form_row3">
              <label class="contact">
              <table width="747" height="116" border="0">
  <tr>
    <td width="32" align="center">No.</td>
    <td width="96" align="center">Tanggal</td>
    <td width="140" align="center">No. Transaksi</td>
    <td width="170" align="center">Penerima</td>
    <td width="134" align="center">Status</td>
    <td width="93" align="center">Total</td>
    <td width="52" align="center">Aksi</td>
  </tr>
  <tr>
    <td height="18" colspan="7" align="left">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
<?php
$lama	= 2;
$query_hapus = mysql_query( "DELETE FROM transaksi
         WHERE DATEDIFF(CURDATE(), tanggal) > $lama AND konfirmasi='belum transfer' ");

$query=mysql_query("SELECT * FROM transaksi $filterSQL ORDER BY id_transaksi desc limit $start, $per_hal");
$no=0;
	while($data=mysql_fetch_array($query)){
	$no++;
	$jumData	= mysql_num_rows($query);
	$member		= $data['id_member'];
	$baca		= mysql_query("SELECT * FROM member WHERE id_member='$member' ");
	$bacadata = mysql_fetch_array($baca);
?>      
  <tr>
    <td height="30" align="center"><?php echo $no ?></td>
    <td align="center"><?php echo $data['tanggal']; ?></td>
    <td align="center"><?php echo $data['id_transaksi'];?></td>
    <td align="center"><?php echo $data['penerima']; ?></td>
    <td align="center"><?php echo $data['status']; ?></td>
    <td align="center"><?php echo $data['total']; ?></td>
    <td align="center"> <a href="transaksi-cetak.php?cetak=<?php echo $data['id_transaksi']; ?>" title="cetak" target="_blank"><div class="fa fa-print fa-1.5x"></div></a> |  <a href="detail-transaksi.php?detail=<?php echo $data['id_transaksi']; ?>" title="lihat detail"><div class="fa fa-eye fa-1.5x"></div></a></td>
  </tr>
<?php 
	$grandtotal	= $grandtotal + $data['total'];
	} ?> 
  <tr>
    <td height="20" colspan="2" align="left" bgcolor="#dad0d0"><u><strong>Jumlah Data : <?php if ($jumData==0){
		echo "Kosong";}else{ echo "$jumData";} ?></strong></u></td>
    <td colspan="2" align="center" bgcolor="#DAD0D0">
    <form action="laporan-cetak.php" method="post" target="_blank">
    <input name="tglawal" type="hidden" value="<?php echo $tglAwal;?>" />
    <input name="tglakhir" type="hidden" value="<?php echo $tglAkhir;?>" />
    <input name="filter" type="hidden" value="<?php echo $filterSQL;?>" />
     <input name="total" type="hidden" value="<?php echo $grandtotal;?>" />
      <input name="admin" type="hidden" value="<?php echo $_SESSION['admin'];?>" />
    <input type="submit" name="send" value=" Cetak Laporan per Periode "  />
    </form>
    </td>
    <td align="center" bgcolor="#dad0d0"><u><strong>Total Pendapatan : </strong></u></td>
    <td align="center" bgcolor="#dad0d0"><u><strong><?php if ($grandtotal==0){echo "0";}else{echo"$grandtotal";}?></strong></u></td>
    <td align="center">&nbsp;</td>
  </tr>
</table>
              </label>
            </div>
      </div>
      
      
      <div class="center_title_bar3"> <span>
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
     <a href="http://acerudyn.hol.es" target="_blank" title="visit me">acerudyn.hol.es</a><br />
      <img src="images/payment.gif" alt="" /> 
  </div>
    <div class="left_footer1"> <img src="images/logo1.png" alt="" width="130" height="49"/> </div></div>

   </div>
<!-- end of main_container -->
</body>
</html>
