<?php
session_start();
include "koneksi.php";
$pelanggan=$_SESSION['member']; 
$kode=$_GET['hapus'];
 
$del = "delete from keranjang where id_produk = '$kode' and id_member = '$pelanggan' ";
$ok = mysql_query($del);
if ($ok) {
?>
  	<script type="text/javascript">
    	alert('Barang berhasil dihapus !')
		document.location='keranjang.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Barang Gagal Dihapus !')
	document.location='keranjang.php';
	</script>
    <?php }?>  
