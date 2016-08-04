<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Edit Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>

</head>

<?php
include('session.php');
?>

<?php  
session_start();  
if(isset($_SESSION['error'])){  
$error = $_SESSION['error'];  
$_POST = $_SESSION['post'];  
unset($_SESSION['error']);  
unset($_SESSION['post']);  
}  
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
      <div class="center_title_bar">Edit Admin</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">
            <div class="form_row">
               <label class="contact">
<?php
include"koneksi.php";
$tampil=mysql_query("SELECT * FROM admin WHERE username= '".$_SESSION['login']."'");
$data = mysql_fetch_array($tampil);
?>                
              
              <form  name="form1" method="post" action="admin-update.php">
                <table width="326" height="126" border="0">
                  <tr>
                    <td width="85" align="left"><strong>Name</strong></td>
                    <td width="13" align="center"><strong>:</strong></td>
                    <td width="206" align="left">
                    <input type="hidden"  name="id_admin" value="<?php echo $data['id_admin']; ?>">
                    <input type="text" name="nama_admin" value="<?php echo $data['nama_admin']; ?>" />
                    </td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Username</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input type="text" name="username" value="<?php echo $data['username']; ?>"/></td>
                  </tr>
                  <tr>
                    <td height="28" align="left" valign="top"><strong>Password</strong></td>
                    <td align="center" valign="top"><strong>:</strong></td>
                    <td align="left" valign="top"><input type="password" name="password" value="<?php echo $data['password']; ?>"/><br/> <span style="color:#F00; font-size:9px;"><?php echo isset($error['konfirmasi_pwd']) ? $error['konfirmasi_pwd']:''; ?></span>
<span style="color:#F00; font-size:9px;"><?php echo isset($error['panjang']) ? $error['panjang']:''; ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td height="28" align="left" valign="top"><strong>Konfirmasi Password</strong></td>
                    <td align="center" valign="top"><strong>:</strong></td>
                    <td align="left" valign="top"><input type="password" name="konfirmasi_pwd" /><br/> <span style="color:#F00; font-size:9px;"><?php echo isset($error['konfirmasi']) ? $error['konfirmasi']:''; ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td height="27">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"><input type="reset" name="button"  value="Cancel" />
                    <input type="submit" name="save" value="Update" /></td>
                  </tr>
                </table>
              </form>
              </label>
           </div>
          </div>
        </div>
        <div class="bottom_prod_box_big"></div>
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
