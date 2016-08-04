<?php 
session_start(); 
include "koneksi.php";

if($_POST){  
	$a=	$_POST['id_brand'];
	$b=	$_POST['nama_brand'];
	
	$error=array();
	if(empty($a)){
		$error['id']='ID Brand Tidak Boleh Kosong';
	}if(empty($b)){
		$error['nama']='Nama Brand Tidak Boleh Kosong';
	}if(empty($error)){ ?>
    
		<?php
$a=	$_POST['id_brand'];
$b=	$_POST['nama_brand'];

$simpan=mysql_query("insert into brand values('$a','$b')");

if($simpan){
	
	?>
    <script type="text/javascript">
    	alert('Data Berhasil Disimpan')
		document.location='brand.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Disimpan')
	document.location='brand-add.php';
	</script>
    
    <?php } ?>
    
	<?php 
	}else{  
        $_SESSION['error'] = $error;  
        $_SESSION['post'] = $_POST;  
        header("location: brand-add.php");  
}
}
?>    