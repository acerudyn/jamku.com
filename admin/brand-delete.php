<?php
session_start();
include "koneksi.php"; 
$kode=$_GET['hapus'];
 
$del = "delete from brand where id_brand = '$kode' ";
$ok = mysql_query($del);
if ($ok) {
?>
  	<script type="text/javascript">
    	alert('Data berhasil dihapus !')
		document.location='brand.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus !')
	document.location='brand.php';
	</script>
    <?php }?>  
