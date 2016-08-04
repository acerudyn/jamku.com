<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pembayaran</title>
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
       
if($_POST['send']){  
	$b=	$_POST['nama'];
	$d=	$_POST['alamat'];
	$e=	$_POST['provinsi'];
	$f=	$_POST['kabupaten'];
	$g=	$_POST['kecamatan'];
	$h=	$_POST['hp'];
	$i=	$_POST['email'];
	$j=	$_POST['bank'];
	
	$error=array();
	if(empty($b)){
		$error['nama']='Nama Tidak Boleh Kosong';
	}if(empty($d)){
		$error['alamat']='Alamat Tidak Boleh Kosong';
	}if(empty($e)){
		$error['provinsi']='Provinsi Tidak Boleh Kosong';
	}if(empty($f)){
		$error['kabupaten']='Kabupaten Tidak Boleh Kosong';
	}if(empty($g)){
		$error['Kecamatan']='Kecamatan Tidak Boleh Kosong';
	}if(empty($h)){
		$error['hp']='Nomor Hp Tidak Boleh Kosong';
	}if(! is_numeric($h)){
		$error['hp']='Nomor Hp Harus Diisi Angka';
	}if(empty($i)){
		$error['email']='Email Tidak Boleh Kosong';
	}if(empty($j)){
		$error['bank']='Bank Tidak Boleh Kosong';
	}if(!empty($error)){   
        $_SESSION['error'] = $error;  
        $_SESSION['post'] = $_POST;  
        header("location: edit-alamat.php");  
						}
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
              <form name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" target="_self">
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
$id_trans	= $data['id_pesan'];

$tanggal	= $data['tanggal'];
if($tampil){
	$kode	= $data['id_produk'];
	$produk	= mysql_query("SELECT * FROM produk WHERE id_produk='$kode' ");
$dataproduk = mysql_fetch_array($produk);
?>    
  <tr>
    <td height="143" align="center"><img src="../gambar_jam/<?php echo $dataproduk['gambar']; ?>" width="100" height="110" /><br/>
      <strong><?php echo $dataproduk['nama_produk']; ?></strong>
      </td>

    <td align="center"><strong><?php echo $data['jumlah'];?></strong>    Unit</td>
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
<?php
session_start(); 
date_default_timezone_set("Asia/Jakarta"); 
$thn		= date("y");
$bln		= date("m");
$tgl		= date("d");
$jam		= date("His");
$id_trans	= $thn.$bln.$tgl.$jam;
$tanggal 	= date("d-m-Y");

$tampil=mysql_query("SELECT * FROM member WHERE id_member= '".$_SESSION['member']."'"); 
$data = mysql_fetch_array($tampil);
            
# SKRIP SAAT TOMBOL SIMPAN DIKLIK
if(isset($_POST['save'])){
	$id_member	= $_SESSION['member'];
	$penerima	= $_POST['nama'];
	$total		= $_POST['total_transfer'];
	$bank		= $_POST['bank'];
	$status		= "Belum lunas";
	$alamat		= $_POST['alamat'];
	$konfirmasi	= "belum transfer";
	
	# Validasi form, jika kosong sampaikan pesan error
	$pesanError = array();
	if (trim($bank)=="") {
		$pesanError[] = "Data <b>Bank</b> belum dipilih !";		
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
			$mySql	= "INSERT INTO transaksi (id_transaksi, id_member, penerima, tanggal, total, alamat, bank, konfirmasi, status) 
					VALUES('$id_trans', '$id_member', '$penerima', NOW(), '$total', '$alamat', '$bank', '$konfirmasi',  '$status')";
			$myQry	= mysql_query($mySql, $konek)  or die ("Query salah : ".mysql_error());
		
			$query = mysql_query("select * from keranjang where id_member='$KodePelanggan' order by id_produk desc ");
while ($field = mysql_fetch_array($query))

			$copy = mysql_query ("INSERT INTO pemesanan VALUES ('$id_trans', NOW(), $field[0], $field[1], $field[2])"); 
			
			$del = "delete from keranjang where id_member = '$id_member' ";
			$ok	= mysql_query($del, $konek)  or die ("Query salah : ".mysql_error());
		
		
		if($myQry and $ok and $copy){ ?>
			<script type="text/javascript">
    	alert('Transaksi Berhasil Dismpan')
		document.location='transaksi-sukses.php';
    </script>
		<?php 		}
		 }
	 } ?>     
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
 
              <label class="contact">
              <form name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" target="_self">
                <table width="373" height="350" border="0">
                  <tr>
                    <td width="116" align="left"><strong>Nama</strong></td>
                    <td width="17" align="center"><strong>:</strong></td>
                    <td width="218" align="left">
                    <input name="nama" type="text" value="<?php echo $b;?>" readonly="readonly" /></td>
                  </tr>
                  <tr>
                    <td height="25" align="left" valign="top"><strong>Alamat</strong></td>
                    <td align="center" valign="top"><strong>:</strong></td>
                    
<?php
$konek=mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("jne_bandung");

$tampil=mysql_query("SELECT * FROM oc_country WHERE country_id= '$e'");
$provinsi = mysql_fetch_array($tampil);
?> 

<?php 
$tampil=mysql_query("SELECT * FROM oc_zone WHERE zone_id= '$f'");
$kabupaten = mysql_fetch_array($tampil);
?>  

<?php 
$tampil=mysql_query("SELECT * FROM oc_city WHERE city_id= '$g'");
$kecamatan = mysql_fetch_array($tampil);
?>                  
                    <td align="left">
                    <textarea name="" cols="30" rows="5" readonly="readonly"><?php echo $d;?></textarea></td>
                  </tr>
                  <tr>                                    
                    <td height="25" align="left"><strong>Provinsi</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input name="provinsi" type="text" readonly="readonly"  value="<?php echo $provinsi['name']; ?>" /></td>
                  </tr>
                  <tr>                  
                    <td height="25" align="left"><strong>Kabupaten</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input name="kabupaten" type="text" readonly="readonly" value="<?php echo $kabupaten['name']; ?>" /></td>
                  </tr>
                  <tr>                 
                    <td height="25" align="left"><strong>Kecamatan</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input name="kecamatan" type="text" readonly="readonly" value="<?php echo $kecamatan['name']; ?>" /></td>
                  </tr>
                  <tr>
                    <td height="25" align="left"><strong>Nomor Hp</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input name="hp" type="text" value="<?php echo $h;?>" /></td>
                  </tr>
                  <tr>
                    <td height="25" align="left"><strong>Email</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input name="email" type="text"value="<?php echo $i;?>" /></td>
                  </tr>
                  <input name="alamat" type="hidden" value="<?php echo "$d Kec. $kecamatan[name] $kabupaten[name] Prov. $provinsi[name]"; ?>"  />
                  <tr>
                    <td height="18" colspan="3" align="left">---------------------------------------------------------------------------------------</td>
                  </tr>
                  <tr>
<?php 
$tampil=mysql_query("SELECT * FROM oc_city WHERE city_id= '$g'");
$tarif = mysql_fetch_array($tampil);
?>                  
                    <td height="25" align="left"><strong>Biaya Kirim</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input name="" type="text" readonly="readonly" value="<?php echo $tarif['jnereg']; ?>" /></td>
                  </tr>
                  <tr>
<?php 
$transfer	= $tarif['jnereg'] + $grandtotal;
?>                  
                    <td height="25" align="left"><strong>Total Transfer</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input name="total_transfer" type="text" readonly="readonly" value="<?php echo $transfer; ?>" /></td>
                  </tr>
                  <tr>
                    <td height="25" align="left"><strong>Transfer BANK</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input name="bank" type="text"value="<?php echo $j;?>" /></td>
                  </tr>
                  <tr>
                    <td height="25" align="left">&nbsp;</td>
                    <td align="center">&nbsp;</td>
                    <td align="left" valign="top"><input type="submit" name="save" value="Submit" /></td>
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
