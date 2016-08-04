<?php
include "koneksi.php";
$kode=$_GET['edit'];
$status="Sedang dikirim";

$update=mysql_query(" UPDATE transaksi SET
                      status	= '".$status."'
                      WHERE id_transaksi = '".$kode."' ");

if($update){
	
	?>
    <script type="text/javascript">
    	alert('Data Berhasil Diupadate')
		document.location='transaksi.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Diupadate')
	document.location='transaksi.php';
	</script>
    
    <?php } ?> 