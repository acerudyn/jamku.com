<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Member</title>
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
include "session.php";
	$per_hal=20;
	$jumlah_record=mysql_query("SELECT COUNT(*) from member");
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
    
    <div class="center_content">
      <div class="center_title_bar">Member</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form1">
            <div class="form_row1">
              <label class="contact">
              <table width="500" height="73" border="0">
  <tr>
    <td width="62" align="center">ID Member</td>
    <td width="161" align="center">Nama</td>
    <td width="113" align="center">Username</td>
    <td width="89" align="center">Email</td>
    <td width="41" align="center">Aksi</td>
  </tr>
  <tr>
    <td height="18" colspan="5" align="left">-------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
<?php
$query=mysql_query("select * from member order by id_member desc limit $start, $per_hal");
	while($data=mysql_fetch_array($query)){
?>
  <tr>
    <td height="27" align="center"><?php echo $data['id_member']; ?></td>
    <td align="center"><?php echo $data['nama_member']; ?></td>
    <td align="center"><?php echo $data['username']; ?></td>
    <td align="center"><?php echo $data['email']; ?></td>
    <td align="center"> <a href="member-delete.php?hapus=<?php echo $data['id_member']; ?>" title="hapus"><div class="fa fa-remove fa-1.5x"></div></a></td>
  </tr>
   <?php } ?>
</table>

              </label>
             </div>
          </div>
        </div>
        <div class="bottom_prod_box_big2"> <span>
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
