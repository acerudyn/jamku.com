<?php
session_start();
include "koneksi.php"; 
$kode=$_GET['hapus'];
 
$del = "delete from member where id_member = '$kode' ";
$ok = mysql_query($del);
if ($ok) {
?>
  	<script type="text/javascript">
    	alert('Data berhasil dihapus !')
		document.location='member.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus !')
	document.location='member.php';
	</script>
    <?php }?>  
