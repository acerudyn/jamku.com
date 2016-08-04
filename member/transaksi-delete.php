<?php
session_start();
include "koneksi.php"; 
$kode=$_GET['hapus'];
 
$del = "delete from transaksi where id_transaksi = '$kode' ";
$ok = mysql_query($del);
if ($ok) {
?>
  	<script type="text/javascript">
    	alert('Data berhasil dihapus !')
		document.location='transaksi.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus !')
	document.location='transaksi.php';
	</script>
    <?php }?>  
