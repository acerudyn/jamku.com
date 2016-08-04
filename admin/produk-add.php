<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Add Product</title>
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
include('koneksi.php');
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
<?php
$cari_kd=mysql_query("select max(id_produk)as kode from produk");
$id_cari=mysql_fetch_array($cari_kd);
$kode=substr($id_cari['kode'],8,3);
 
$thn=date("Y");
$bln=date("m");
$tgl=date("d");
$adm=$kode;

$hsl=$adm+1;
$hitung=strlen($hsl);

if($hitung==1){
	$adm="00".$hsl;
}else if($hitung==2){
	$adm="0".$hsl;
}else if($hitung==3){
	$adm=$hsl;
}else{
	$adm="Data Error";
}

$id=$thn.$bln.$tgl.$adm;
?>    
    <div class="center_content">
      <div class="center_title_bar">Add Product</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">
            <div class="form_row5">
<?php              
# SKRIP SAAT TOMBOL SIMPAN DIKLIK
if(isset($_POST['save'])){
	$nama		= $_POST['nama'];
	$konsumen	= $_POST['konsumen'];
	$kategori	= $_POST['kategori'];
	$brand		= $_POST['brand'];
	$harga		= $_POST['harga'];
	$stok		= $_POST['stok'];
	$deskripsi	= $_POST['deskripsi'];
	
	# Validasi form, jika kosong sampaikan pesan error
	$pesanError = array();
	if (trim($nama)=="") {
		$pesanError[] = "Data <b>Nama Brang</b> tidak boleh kosong !";		
	}
	if (trim($konsumen)=="") {
		$pesanError[] = "Data <b>Konsumen</b> tidak boleh kosong !";		
	}
	if (trim($kategori)=="") {
		$pesanError[] = "Data <b>Nama Kategori</b> tidak boleh kosong !";		
	}
	if (trim($brand)=="") {
		$pesanError[] = "Data <b>Nama Brand</b> tidak boleh kosong !";		
	}
	if (trim($harga)=="" or ! is_numeric(trim($harga))) {
		$pesanError[] = "Data <b>Harga</b> tidak boleh kosong dan harus diisi angka!";		
	}
	if (trim($stok)=="" or ! is_numeric(trim($stok))) {
		$pesanError[] = "Data <b>Stok</b> tidak boleh kosong dan harus diisi angka!";		
	}
	if (trim($deskripsi)=="") {
		$pesanError[] = "Data <b>Deskripsi</b> tidak boleh kosong !";		
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
		
	$a=$id;
	
	// Mengkopi file gambar
		if (! empty($_FILES['gambar']['tmp_name'])) {
			$nama_file = $_FILES['gambar']['name'];
			$nama_file = stripslashes($nama_file);
			$nama_file = str_replace("'","",$nama_file);
			$nama_file = str_replace(" ","-",$nama_file);
			$nama_file = $id.".".$nama_file;
			copy($_FILES['gambar']['tmp_name'],"../gambar_jam/".$nama_file);
		}
		else {
			$nama_file = "";
		}
		
		// Simpan data dari form ke database
		$mySql	= "INSERT INTO produk (id_produk, nama_produk, konsumen, id_kategori, id_brand, harga, stok,  deskripsi, gambar) 
					VALUES('$id', '$nama', '$konsumen', '$kategori',  '$brand', '$harga', '$stok', '$deskripsi','$nama_file')";
		$myQry	= mysql_query($mySql, $konek)  or die ("Query salah : ".mysql_error());
		if($myQry){ ?>
			<script type="text/javascript">
    	alert('Data Berhasil Dismpan')
		document.location='produk.php';
    </script>
		<?php } ?>
        
	<?php }	
}

# MEMBUAT NILAI DATA PADA FORM
# SIMPAN DATA PADA FORM, Jika saat Sumbit ada yang kosong (lupa belum diisi)
$dataid		= $id;
$datanama		= isset($_POST['nama']) ? $_POST['nama'] : '';
$dataharga		= isset($_POST['harga']) ? $_POST['harga'] : ''; 
$datastok		= isset($_POST['stok']) ? $_POST['stok'] : '';
$datadeskripsi	= isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';
?>            
              <label class="contact">
               
              <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form1" target="_self">
                <table width="370" height="126" border="0">
                  <tr>
                    <td align="left"><strong>ID Produk</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input name="id_produk" type="text" value="<?php echo $dataid; ?>" readonly="readonly"/>
                    <br/></td>
                  </tr>
                  <tr>
                    <td width="140" align="left"><strong>Nama</strong></td>
                    <td width="11" align="center"><strong>:</strong></td>
                    <td width="197" align="left">
                    <input type="text" name="nama" value="<?php echo $datanama; ?>"/><br/>
                    </td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Konsumen</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left" >
                      <select name="konsumen" >
                      <option value="">--Konsumen--</option>
                      <option value="pria">Pria</option>
                      <option value="wanita">Wanita</option>
                      <option value="anak">Anak-anak</option>
                    </select> <br/>
                    </td>
                  </tr>
                  <tr>
                    <td height="28" align="left" valign="top"><strong>Kategori</strong></td>
                    <td align="center" valign="top"><strong>:</strong></td>
                    <td align="left" >
                      <select name="kategori" >
                      <option value="">--Kategori--</option>
        <?php
	  $bacaSql = "SELECT * FROM kategori ORDER BY id_kategori";
	  $bacaQry = mysql_query($bacaSql, $konek) or die ("Gagal Query".mysql_error());
	  while ($bacaData = mysql_fetch_array($bacaQry)) {
		echo "<option value='$bacaData[id_kategori]' >$bacaData[nama_kategori]</option>";
	  }
	  ?>
                    </select> <br/>
                    </td>
                  </tr>
                  <tr>
                    <td height="28" align="left" valign="top"><strong>Brand</strong></td>
                    <td align="center" valign="top"><strong>:</strong></td>
                    <td align="left" ><select name="brand" >
                    <option value="">--Brand--</option>
        <?php
	  $bacaSql = "SELECT * FROM brand ORDER BY id_brand";
	  $bacaQry = mysql_query($bacaSql, $konek) or die ("Gagal Query".mysql_error());
	  while ($bacaData = mysql_fetch_array($bacaQry)) {
		echo "<option value='$bacaData[id_brand]' >$bacaData[nama_brand]</option>";
	  }
	  ?>
                    </select> <br/>
                    </td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Harga</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input type="text" name="harga"value="<?php echo $dataharga; ?>"  /> <br/>
                    </td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Stok</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left"><input type="text" name="stok"  value="<?php echo $datastok; ?>" /><br/>
                    </td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><strong>Deskripsi</strong></td>
                    <td align="center" valign="top"><strong>:</strong></td>
                    <td align="left">
                    <textarea name="deskripsi" cols="30" rows="5"><?php echo $datadeskripsi;?></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Gambar</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td align="left">
                    <input type="file" name="gambar" /><br/>
                    </td>
                  </tr>
                  <tr>
                    <td height="27">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td align="left" valign="top"><input type="reset" name="cancel" value="Cancel" />
                    <input type="submit" name="save" value="Submit" /></td>
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
