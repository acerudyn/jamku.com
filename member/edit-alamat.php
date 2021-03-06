<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Edit Alamat</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style-member.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>

</head>

<?php
include "koneksi.php";
include "session.php";
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
  
  <div class="nav">
<ul class="dropmenu">
<li><a href="home.php">Home</a></li>
<li class="divider"></li>
<li><a href="#">Product</a>
    <ul>
    <li><a href="men-member.php?konsumen=<?php echo"pria"; ?>">Men</a></li>
    <li><a href="women-member.php?konsumen=<?php echo"wanita"; ?>">Women</a></li>
    <li><a href="kid-member.php?konsumen=<?php echo"anak"; ?>">Kid</a></li>
    </ul>
</li>
<li class="divider"></li>
<li><a href="how-to-buy-member.php">How to Buy</a></li>
<li class="divider"></li>
<li><a href="#">My Account</a>
    <ul>
    <li><a href="lihat-profil.php">Lihat Profil</a></li>
    <li><a href="transaksi-konfirmasi.php?">Transaksi</a></li>
    </ul>
</li>
<li class="divider"></li>
<li><a href="about-us-member.php">About Us</a></li>
<li class="divider"></li>
<li><a href="contact-member.php">Contact</a></li>
<li class="divider"></li>
<li><a href="testimonial.php">Testiomonial</a></li>
<li class="divider"></li>
<li><a href="logout.php">Log Out</a></li>
</ul>
</div>
    <!-- end of menu tab -->
    
    <div class="crumb_navigation"></div>
    <div class="left_content">
       
    <div class="title_box">Categories</div>
      <ul class="left_menu">
        <li class="odd"><a href="search-categori-member.php?kategori=<?php echo"csl"; ?>">Casual</a></li>
        <li class="even"><a href="search-categori-member.php?kategori=<?php echo"frm"; ?>">Formal</a></li>
        <li class="odd"><a href="search-categori-member.php?kategori=<?php echo"fsn"; ?>">Fashion</a></li>
        <li class="even"><a href="search-categori-member.php?kategori=<?php echo"spr"; ?>">Sporty</a></li>
        <li class="odd"><a href="search-categori-member.php?kategori=<?php echo"led"; ?>">LED Watch</a></li>
        <li class="even"><a href="search-categori-member.php?kategori=<?php echo"smr"; ?>">Smart Watch</a></li>
      </ul>
      
      <div class="title_box">Brands</div>
      <ul class="left_menu">
        <li class="odd"><a href="search-brand-member.php?brand=<?php echo"apl"; ?>">Apple</a></li>
        <li class="even"><a href="search-brand-member.php?brand=<?php echo"aky"; ?>">Aukey</a></li>
        <li class="odd"><a href="search-brand-member.php?brand=<?php echo"bln"; ?>">Bluelans</a></li>
        <li class="even"><a href="search-brand-member.php?brand=<?php echo"cso"; ?>">Casio </a></li>
        <li class="odd"><a href="search-brand-member.phpbrand=<?php echo"dgt"; ?>">Digitec</a></li>
        <li class="even"><a href="search-brand-member.php?brand=<?php echo"qrt"; ?>">Quartz</a></li>
        <li class="odd"><a href="search-brand-member.php?brand=<?php echo"onx"; ?>">Onix</a></li>
        <li class="even"><a href="search-brand-member.php?brand=<?php echo"skm"; ?>">Skemei</a></li>
        <li class="odd"><a href="search-brand-member.php?brand=<?php echo"sny"; ?>">Sony</a></li>
        <li class="even"><a href="search-brand-member.php?brand=<?php echo"sws"; ?>">Swiss Army</a></li>
        <li class="odd"><a href="search-brand-member.php?brand=<?php echo"tst"; ?>">Tissot</a></li>
      </ul>
      
    
      <div class="title_box">Contact Us</div>
      <div class="border_box">
      <div class="product_img1">
      <div class="fa fa-phone fa-1.5x"></div> +6285228053623<br/><br/>
      <div class="fa fa-facebook-official fa-1.5x"></div> JamKu<br/><br/>
      <div class="fa fa-envelope fa-1.5x"></div>  acerudyn@yahoo.com<br/><br/>
      <div class="fa fa-twitter fa-1.5x"></div>@jamku<br />
      <br/>
      <div class="fa fa-whatsapp fa-1.5x"></div> +6285228053623<br/><br/>
      <div class="fa fa-comments fa-1.5x"></div> 55323837<br/>
      <br/>
      <div class="fa fa-globe fa-1.5x"></div> www.jamku.com</div>
         </div>
        
     <div class="title_box">Lastest Member</div>
      <div class="border_box" style="text-align:left; padding-left:30px; width:164px;">
<?php
$data=mysql_query("select * from member order by id_member");
$tampil=mysql_query("select * from member order by id_member desc limit 5");
$jumlah=mysql_num_rows($data);
while($data=mysql_fetch_array($tampil)){
if($tampil){
?>      
        <div class="product_img"><?php echo ".: $data[username]"; ?></br> <?php } ?> </div> <?php } echo "<br/><strong><u>.: Jumlah Anggota : $jumlah </u></strong>"; ?>
      </div>
      </div>
    <!-- end of left content -->
    
    <div class="center_content">
      <div class="center_title_bar">Pembayaran</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form1">
            <div class="form_row1">
              <label class="contact">
              <form id="form1" name="form1" method="post" action="">
                <table width="511" border="0">
  <tr>
    <td width="178" height="25" align="center">Barang</td>
    <td width="104" align="center">Jumlah</td>
    <td width="108" align="center">Harga</td>
    <td width="93" align="center">Total</td>
    </tr>
  <tr>
    <td height="18" colspan="4">-----------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
<?php
$KodePelanggan	= $_SESSION['member'];
$no=1;
$tampil=mysql_query("select * from keranjang where id_member='$KodePelanggan' order by id_produk desc ");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
	$kode	= $data['id_produk'];
	$produk	= mysql_query("SELECT * FROM produk WHERE id_produk='$kode' ");
$dataproduk = mysql_fetch_array($produk);
?>    
  <tr>
    <td height="143" align="center"><img src="../gambar_jam/<?php echo $dataproduk['gambar']; ?>" width="100" height="110" /><br/>
      <strong><?php echo $dataproduk['nama_produk']; ?></strong></td>
    <td align="center"><strong><?php echo $data['jumlah'];?></strong> Unit</td>
    <td align="center"><?php echo $dataproduk['harga']; ?></td>
<?php 
$total		= $dataproduk['harga'] * $data['jumlah'];
$grandtotal	= $grandtotal + $total;
?>    
    <td align="center"><?php echo $total; ?></td>
    <?php $no++; } ?>
    </tr>
    <?php } ?>
  <tr>
    <td colspan="4">-----------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">Grand Total : </td>
    <td colspan="2" align="center"><strong><?php echo $grandtotal; ?></strong></td>
    </tr>
</table>
              </form>
              </label>
            </div>
          </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
      
      <div class="center_title_bar">Alamat Untuk Pengiriman</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">
            <div class="form_row">
<?php 
error_reporting(1);
session_start(); 
if(isset($_SESSION['error'])){  
$error = $_SESSION['error'];  
$_POST = $_SESSION['post'];  
unset($_SESSION['error']);  
unset($_SESSION['post']);  
}  

$tampil=mysql_query("SELECT * FROM member WHERE id_member= '".$_SESSION['member']."'"); 
$data = mysql_fetch_array($tampil);
?>          
              <label class="contact">
              <form name="form1" method="post" action="pembayaran-new.php" >
                <table width="373" height="350" border="0">
                  <tr>
                    <td width="116" align="left"><strong>Nama</strong></td>
                    <td width="17" align="center"><strong>:</strong></td>
                    <td width="218" align="left">
                    <input type="text" name="nama" value="<?php echo $data['nama_member']; ?>" /><br/>
                    <span style="color:#F00; font-size:9px;"><?php echo isset($error['nama']) ? $error['nama']:''; ?></span></td>
                  </tr>
                  <tr>
                    <td height="25" align="left" valign="top"><strong>Alamat</strong></td>
                    <td align="center" valign="top"><strong>:</strong></td>
                    <td align="left">
                    <textarea name="alamat" cols="30" rows="5" ><?php echo $data['alamat'];?> </textarea><br/>
                    <span style="color:#F00; font-size:9px;"><?php echo isset($error['alamat']) ? $error['alamat']:''; ?></span></td>
                  </tr>
                  <tr>
<?php
$konek=mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("jne_bandung");

$kode=$data['provinsi'];
$tampil=mysql_query("SELECT * FROM oc_country WHERE country_id= '$kode'");
$provinsi = mysql_fetch_array($tampil);
?>                                    
                    <td height="25" align="left"><strong>Provinsi</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td rowspan="3" align="left">
                    <?php include "combo.php"; ?>
                    </td>
                  </tr>
                  <tr>
<?php 
$kode=$data['kabupaten'];
$tampil=mysql_query("SELECT * FROM oc_zone WHERE zone_id= '$kode'");
$kabupaten = mysql_fetch_array($tampil);
?>                  
                    <td height="25" align="left"><strong>Kabupaten</strong></td>
                    <td align="center"><strong>:</strong></td>
                  </tr>
                  <tr>
<?php 
$kode=$data['kecamatan'];
$tampil=mysql_query("SELECT * FROM oc_city WHERE city_id= '$kode'");
$kecamatan = mysql_fetch_array($tampil);
?>                  
                    <td height="25" align="left"><strong>Kecamatan</strong></td>
                    <td align="center"><strong>:</strong></td>
                  </tr>
                  <tr>
                    <td height="25" align="left"><strong>Nomor Hp</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input type="text" name="hp" value="<?php echo $data['telepon']; ?>" />
                    <br/> <span style="color:#F00; font-size:9px;"><?php echo isset($error['hp']) ? $error['hp']:''; ?></span></td>
                  </tr>
                  <tr>
                    <td height="25" align="left"><strong>Email</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input type="email" name="email" value="<?php echo $data['email']; ?>" /><br/> <span style="color:#F00; font-size:9px;"><?php echo isset($error['email']) ? $error['email']:''; ?></span></td>
                  </tr>
                  <tr>
                    <td height="25" align="left"><strong>Pilih BANK</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><select name="bank" >
                      <option value="">--Bank--</option>
                      <option value="BRI">BRI</option>
                      <option value="BCA">BCA</option>
                      <option value="MANDIRI">MANDIRI</option>
                    </select>
                    <br/> <span style="color:#F00; font-size:9px;"><?php echo isset($error['bank']) ? $error['bank']:''; ?></span></td>
                  </tr>
                  <tr>
                    <td height="18" colspan="3" align="left">---------------------------------------------------------------------------------------</td>
                  </tr>
                  <tr>
                    <td height="25" align="left">&nbsp;</td>
                    <td align="center">&nbsp;</td>
                    <td align="left" valign="top"><input type="submit" name="send" value="Save" /></td>
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
           
    <!-- end of center content -->
    
    <div class="right_content">
    <div class="shopping_cart1">
        <div class="cart_title">You're Online</div>
        <div class="cart_details1">Hey... <strong><?php echo $login_session; ?></strong><br />
          Happy Shopping...!</div>
         </div>
         
      <div class="shopping_cart">
         <div class="cart_title">Shopping cart</div>
        <div class="cart_details">
<?php
$konek=mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("jamku");

$tampil=mysql_query("select * from keranjang where id_member='$KodePelanggan' order by id_produk desc");
$jumlah=mysql_num_rows($tampil);
if(mysql_num_rows($tampil)==0) {
	echo "keranjang masih kosong !";
	}else{
	echo "$jumlah Unit"; }?><br />
          <span class="border_cart"></span> Total: <span class="price"><?php
		  if ($jumlah==0){echo "0";}else{ echo $grandtotal; }?></span> </div>
        <div class="cart_icon"><a href="http://all-free-download.com/free-website-templates/" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      
     <div class="title_box">Special Products</div>
      <div class="border_box">
      
<?php
$no=1;
$tampil=mysql_query("select * from produk order by id_produk limit 1 ");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
?>  
        <div class="product_title"><?php echo $data['nama_produk']; ?></div>
        <div class="product_img"><a href="detail.php?detail=<?php echo $data['id_produk']; ?>"><img src="../gambar_jam/<?php echo $data['gambar']; ?>" border="0" width="160" height="180"/></a></div>
        <div class="prod_price"><span class="price">Rp. 
		<?php echo $data['harga']; ?> | <a href="produk-beli.php?keranjang=<?php echo $data['id_produk']; ?>"><div class="fa fa-cart-plus fa-1.5x"></div> add to cart</a></span>
		<?php  $no++; } ?></div> <?php } ?>
      </div>
      
      <div class="title_box">What�s new</div>
      <div class="border_box">
      
<?php
$no=1;
$tampil=mysql_query("select * from produk order by id_produk desc limit 1 ");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
?>            
        <div class="product_title"><?php echo $data['nama_produk']; ?></div>
        <div class="product_img"><a href="detail.php?detail=<?php echo $data['id_produk']; ?>"><img src="../gambar_jam/<?php echo $data['gambar']; ?>" border="0" width="160" height="180"/></a></div>
        <div class="prod_price"><span class="price">Rp. 
		<?php echo $data['harga']; ?> | <a href="produk-beli.php?keranjang=<?php echo $data['id_produk']; ?>"><div class="fa fa-cart-plus fa-1.5x"></div> add to cart</a></span>
        <?php  $no++; } ?></div> <?php } ?>
      </div>
      
      <div class="title_box">Testimonial</div>
      <div class="border_box">
 
<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount',
2, 0);" direction="up"><center>      
<?php
$no=1;
$tampil=mysql_query("select * from testimonial order by id_testimonial desc limit 5");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
?>       
        <div class="product_img"><strong>
		<?php
		$member=$data['id_member'];
		$baca=mysql_query("SELECT * FROM member WHERE id_member='$member' ");
$bacadata = mysql_fetch_array($baca);
echo "$bacadata[username] <u>#$data[id_transaksi]</u>" ?> :</strong></br>
<?php echo $data['isi']; ?> <?php  $no++; } ?> 
        </div> <?php } ?> </center></marquee>
      </div> 
    </div> 
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  
  <div class="footer">
    <div class="left_footer"> <img src="images/logo1.png" alt="" width="130" height="49"/> </div>
    <div class="center_footer"> Template name. All Rights Reserved 2016<br />
      <a href="http://acerudyn.hol.es"target="_blank" title="visit me">acerudyn.hol.es</a><br />
      <img src="images/payment.gif" alt="" /> </div>
      
    <div class="right_footer"> <a href="http://all-free-download.com/free-website-templates/"><div class="fa fa-home fa-1.5x"></div> home</a> | <a href="http://all-free-download.com/free-website-templates/"><div class="fa fa-user fa-1.5x"></div> about</a> | <a href="http://all-free-download.com/free-website-templates/"><div class="fa fa-map fa-1.5x"></div> sitemap</a> | <a href="http://all-free-download.com/free-website-templates/"><div class="fa fa-rss fa-1.5x"></div> rss</a> | <a href="contact.html"><div class="fa fa-bullhorn fa-1.5x"></div> contact us</a> </div>
  </div>
  
<div align="center">This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>
</div>
<!-- end of main_container -->
</body>
</html>
