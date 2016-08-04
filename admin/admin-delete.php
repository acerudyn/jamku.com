<?php
session_start();
include "koneksi.php";

if ($_SESSION['admin'] == $_GET['hapus']) {?>
    <script type="text/javascript">
	alert('Tidak bisa dihapus !')
	document.location='admin.php';
	</script>
    
   <?php } else if ($_SESSION['admin'] == "2016021504"){	    
$del = "delete from admin where id_admin = $_GET[hapus]";
$ok = mysql_query($del);
if ($ok) {
?>
  	<script type="text/javascript">
    	alert('Data berhasil dihapus !')
		document.location='admin.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus !')
	document.location='admin.php';
	</script>
    <?php }?>  
    
 <?php } else {?>
    <script type="text/javascript">
	alert('Maaf, Anda Tidak berhak menghapus !')
	document.location='admin.php';
	</script>
    <?php }?>
