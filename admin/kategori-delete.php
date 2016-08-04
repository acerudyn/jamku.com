<?php
session_start();
include "koneksi.php"; 
$kode=$_GET['hps'];
 
$del = "delete from kategori where id_kategori = '$kode' ";
$ok = mysql_query($del);
if ($ok) {
?>
  	<script type="text/javascript">
    	alert('Data berhasil dihapus !')
		document.location='kategori.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus !')
	document.location='kategori.php';
	</script>
    <?php }?>  
