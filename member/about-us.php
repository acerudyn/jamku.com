<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>About Us</title>
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
?>

<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="#">Advanced Search</a></div>
      <form name="pencarian" action="search.php" method="post">
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
<li><a href="index.php">Home</a></li>
<li class="divider"></li>
<li><a href="#">Product</a>
    <ul>
    <li><a href="men-index.php?konsumen=<?php echo"pria"; ?>">Men</a></li>
    <li><a href="women-index.php?konsumen=<?php echo"wanita"; ?>">Women</a></li>
    <li><a href="kid-index.php?konsumen=<?php echo"anak"; ?>">Kid</a></li>
    </ul>
</li>
<li class="divider"></li>
<li><a href="how-to-buy.php">How to Buy</a></li>
<li class="divider"></li>
<li><a href="login-user.php">My Account</a></li>
<li class="divider"></li>
<li><a href="about-us.php">About Us</a></li>
<li class="divider"></li>
<li><a href="contact.php">Contact</a></li>
<li class="divider"></li>
<li><a href="testimonial.php">Testiomonial</a></li>
<li class="divider"></li>
<li><a href="register.php">Sign Up</a></li>
</ul>
</div>
    <!-- end of menu tab -->
    
    <div class="crumb_navigation"></div>
    <div class="left_content">
      
    <div class="title_box">Categories</div>
      <ul class="left_menu">
        <li class="odd"><a href="search-categori.php?kategori=<?php echo"csl"; ?>">Casual</a></li>
        <li class="even"><a href="search-categori.php?kategori=<?php echo"frm"; ?>">Formal</a></li>
        <li class="odd"><a href="search-categori.php?kategori=<?php echo"fsn"; ?>">Fashion</a></li>
        <li class="even"><a href="search-categori.php?kategori=<?php echo"spr"; ?>">Sporty</a></li>
        <li class="odd"><a href="search-categori.php?kategori=<?php echo"led"; ?>">LED Watch</a></li>
        <li class="even"><a href="search-categori.php?kategori=<?php echo"smr"; ?>">Smart Watch</a></li>
      </ul>
      
      <div class="title_box">Brands</div>
      <ul class="left_menu">
        <li class="odd"><a href="search-brand.php?brand=<?php echo"apl"; ?>">Apple</a></li>
        <li class="even"><a href="search-brand.php?brand=<?php echo"aky"; ?>">Aukey</a></li>
        <li class="odd"><a href="search-brand.php?brand=<?php echo"bln"; ?>">Bluelans</a></li>
        <li class="even"><a href="search-brand.php?brand=<?php echo"cso"; ?>">Casio </a></li>
        <li class="odd"><a href="search-brand.php?brand=<?php echo"dgt"; ?>">Digitec</a></li>
        <li class="even"><a href="search-brand.php?brand=<?php echo"qrt"; ?>">Quartz</a></li>
        <li class="odd"><a href="search-brand.php?brand=<?php echo"onx"; ?>">Onix</a></li>
        <li class="even"><a href="search-brand.php?brand=<?php echo"skm"; ?>">Skemei</a></li>
        <li class="odd"><a href="search-brand.php?brand=<?php echo"sny"; ?>">Sony</a></li>
        <li class="even"><a href="search-brand.php?brand=<?php echo"sws"; ?>">Swiss Army</a></li>
        <li class="odd"><a href="search-brand.php?brand=<?php echo"tst"; ?>">Tissot</a></li>
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
      <div class="center_title_bar">About Us</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">
            <div class="form_row">
              <label class="contact">
                <table width="399" height="310" border="0">
                  <tr>
                    <td width="228" height="106" align="center" valign="middle"><img src="images/logo1.png" alt="" border="0" width="199" height="95" /></td>
                  </tr>
                  <tr>
                    <td height="191" align="left" valign="top">Visi : Menjadi Toko Jam Nomor satu di Indonesia.<br/>
Misi : Berusaha keras untuk memberikan pelayanan dan harga terbaik untuk setiap pelanggan.<br/><br/>

Bermula dari hobi, kami mulai berjualan arloji. Saat itu kami menjual di kalangan terbatas seperti keluarga, teman dan rekan kerja.<br/>

Pada akhirnya kami memulai menjual arloji secara online baik diluar negeri maupun Indonesia. Sejak itu kami melayani penjualan grosir dan retail kepada customer kami di seluruh Indonesia.<br/><br/>

Prinsip kami adalah memberikan pelayanan sebaik mungkin dan menjual jam berkualitas dengan harga yang menarik. Kami bertekad untuk memberikan pelayanan dan info yang baik kepada customer pada waktu memilih tam tangan hingga pelayanan after sale.<br/><br/>

Kunci kesuksesan kami adalah hubungan baik yang berlanjut dengan customer. Misi kami adalah memberikan pengalaman belanjayang informatif dan mudah. Kami menginginkan customer dapat memilih jam yang sesuai dengan kebutuhan dan selera mereka, baik first time customer maupun customer lama. Anda dapat menghubungi customer service kami untuk mendapatkan informasi dan pelayanan lebih jelas. Kenyamanan, keamanan dan kepuasan anda adalah focus kami...<br/>
----------------------------------------------------------------------------------------------<br/><br/>
Alamat Toko :<br/>
<strong>Toko JamKu</strong><br/>
<div class="fa fa-map-marker fa-1.5x"></div> Jalan Kutoarjo - Kebumen Km 07 Butuh, Purworejo<br/>
<div class="fa fa-phone fa-1.5x"></div> +628522805363<br/>
<div class="fa fa-envelope fa-1.5x"></div> acerudyn@yahoo.com</br>

</td>
                  </tr>
                </table>
              </label>
            </div>
          </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>       
    <!-- end of center content -->
    
    <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title">Shopping cart</div>
        <div class="cart_details"> - items <br />
          <span class="border_cart"></span> Total: <span class="price">-</span> </div>
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
      
      <div class="title_box">What’s new</div>
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
2, 0);" direction="up" ><center>      
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
