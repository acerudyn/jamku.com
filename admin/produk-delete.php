<?php
session_start();
include "koneksi.php"; 
$kode=$_GET['hapus'];
 
$del = "delete from produk where id_produk = '$kode' ";
$ok = mysql_query($del);
if ($ok) {
?>
  	<script type="text/javascript">
    	alert('Data berhasil dihapus !')
		document.location='produk.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus !')
	document.location='produk.php';
	</script>
    <?php }?>  
