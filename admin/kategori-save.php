<?php 
session_start(); 
include "koneksi.php";

if($_POST){  
	$a=	$_POST['id_kategori'];
	$b=	$_POST['nama'];
	
	$error=array();
	if(empty($a)){
		$error['id']='ID Kategori Tidak Boleh Kosong';
	}if(empty($b)){
		$error['nama']='Nama Kategori Tidak Boleh Kosong';
	}if(empty($error)){ ?>
    
		<?php
$a=	$_POST['id_kategori'];
$b=	$_POST['nama'];

$simpan=mysql_query("insert into kategori values('$a','$b')");

if($simpan){
	
	?>
    <script type="text/javascript">
    	alert('Data Berhasil Disimpan')
		document.location='kategori.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Disimpan')
	document.location='kategori-add.php';
	</script>
    
    <?php } ?>
    
	<?php 
	}else{  
        $_SESSION['error'] = $error;  
        $_SESSION['post'] = $_POST;  
        header("location: kategori-add.php");  
}
}
?>    