<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Transaksi</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>

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
      <div class="center_title_bar5">TRANSAKSI</div>
       <a href="laporan.php"><div class="center_title_bar4">LIHAT LAPORAN TRANSAKSI</div></a>
      <div class="prod_box_big1">
        
        
            <div class="form_row3">
              <label class="contact">
              <table width="747" height="90" border="0">
  <tr>
    <td width="84" align="center">Tanggal</td>
    <td width="100" align="center">No. Transaksi</td>
    <td width="113" align="center">Penerima</td>
    <td width="162" align="center">Konfirmasi</td>
    <td width="92" align="center">Status</td>
    <td width="114" align="center">No. Resi</td>
    <td width="52" align="center">Aksi</td>
  </tr>
  <tr>
    <td height="18" colspan="7" align="left">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
<?php
$lama	= 2;
$query_hapus = mysql_query( "DELETE FROM transaksi
         WHERE DATEDIFF(CURDATE(), tanggal) > $lama AND konfirmasi='belum transfer' ");

$query=mysql_query("select * from transaksi order by id_transaksi desc limit $start, $per_hal");
	while($data=mysql_fetch_array($query)){
	$member=$data['id_member'];
	$baca=mysql_query("SELECT * FROM member WHERE id_member='$member' ");
	$bacadata = mysql_fetch_array($baca);
?>      
  <tr>
    <td height="44" align="center"><?php echo $data['tanggal']; ?></td>
    <td align="center"><?php echo $data['id_transaksi']; ?></td>
    <td align="center"><?php echo $data['penerima'];?></td>
    <td align="center"><?php echo $data['konfirmasi']; ?></td>
    <td align="center"><?php echo $data['status']; ?></td>
    <td align="center"><?php echo $data['no_resi']; ?></td>
    <td align="center"> <a href="transaksi.php?edit=<?php echo $data['id_transaksi']; ?>" title="ubah status"><div class="fa fa-pencil fa-1.5x"></div></a> |  <a href="detail-transaksi.php?detail=<?php echo $data['id_transaksi']; ?>" title="lihat detail"><div class="fa fa-eye fa-1.5x"></div></a></td>
  </tr>
   <?php } ?> 
</table>

              </label>
            </div>
      </div>
      
<div class="prod_box_big1">
<?php              
# SKRIP SAAT TOMBOL SIMPAN DIKLIK
if(isset($_POST['update'])){
	$id_trans	= $_POST['transaksi'];
	$status		= $_POST['status'];
	$resi		= $_POST['resi'];
		
	# Validasi form, jika kosong sampaikan pesan error
	$pesanError = array();
	if (trim($id_trans)=="") {
		$pesanError[] = "Data <b>Nomor Transaksi</b> tidak boleh kosong !";		
	}
	if (trim($status)=="") {
		$pesanError[] = "Data <b>Status</b> tidak boleh kosong !";		
	}
	if (($status)=="dikirim" and trim($resi)=="") {
		$pesanError[] = "Data <b>Nomor Resi </b> tidak boleh kosong !";		
	}
	if (($status)=="dikirim" and !is_numeric($resi)) {
		$pesanError[] = "Data <b>Nomor Resi </b> Harus diisi dengan angka !";		
	}
	
	# JIKA ADA PESAN ERROR DARI VALIDASI
	if (count($pesanError)>=1 ){
		echo "<span>";
			$noPesan=0;
			foreach ($pesanError as $indeks=>$pesan_tampil) { 
				$noPesan++;
				echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";	
			} 
		echo "</span> <br>"; 
	}
	else {
	# SIMPAN DATA KE DATABASE. Jika tidak menemukan pesan error, simpan data ke database
	
		// Simpan hasil perubahan data
		$mySql	= "UPDATE transaksi SET
					status		= '$status',
					no_resi		= '$resi'
					WHERE id_transaksi = '$id_trans'";
		$myQry	= mysql_query($mySql, $konek)  or die ("Query salah : ".mysql_error());
		if($myQry){ ?>
			<script type="text/javascript">
    	alert('Status berhasil dipdate !')
		document.location='transaksi.php';
    </script>
		<?php } ?>
        
	<?php }	
	} 	
?>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" target="_self" method="post">
          <table width="356" height="91" border="0" align="left">
  <tr>
    <td width="111"><strong>No. Transaksi</strong></td>
    <td width="14" align="center"><strong>:</strong></td>
<?php
$transaksi=$_GET['edit'];    
$tampil=mysql_query("SELECT * FROM transaksi WHERE id_transaksi='$transaksi' ");
	$bacatampil = mysql_fetch_array($tampil);
?>        
    <td width="209"><input name="transaksi" type="text" readonly="readonly" value="<?php echo $bacatampil['id_transaksi']; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Status</strong></td>
    <td align="center"><strong>:</strong></td>
    <td><select name="status" >
      <option value="">--Pilih Status--</option>
      <option value="lunas">Sudah Lunas</option>
      <option value="dikirim">Sedang Dikirim</option>
      </select></td>
  </tr>
  <tr>
    <td><strong>No. Resi</strong></td>
    <td align="center"><strong>:</strong></td>
    <td><input name="resi" type="text"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td><input type="submit" name="update"  value="Update" /></td>
  </tr>
</table>
        </form>
              </label>
      </div>      
      <div class="center_title_bar3"> <span>
          <?php if ($page >1){
			$page-1;}else { $page+1;} ?>
<a href="?page=<?php echo $page ?>"> < </a>
<?php 
 
for($x=1;$x<=$halaman;$x++){
	?>
	<a href="?page=<?php echo $x ?>"><?php echo $x ?> </a> 
	<?php 
} 
?><a href="?page=<?php echo $page ?>"> > </a>
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
