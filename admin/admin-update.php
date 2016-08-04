<?php
session_start();
include "koneksi.php";

if($_POST){  
	$a=	$_POST['id_admin'];
	$b=	$_POST['username'];
	$c=	$_POST['nama_admin'];
	$d=	$_POST['password'];
	$e=	$_POST['konfirmasi_pwd'];
	
	$error=array();
	if(empty($e)){
		$error['konfirmasi_pwd']='Password Tidak Boleh Kosong';
	}
	if(($d!=$e )){
		$error['konfirmasi']='Password Tidak Sama';
	}if(strlen($d) < 5 ){
		$error['panjang']='Panjang password minimal 5 karakter';
	}if(empty($error)){ ?>
    
		<?php
	$a=	$_POST['id_admin'];
	$b=	$_POST['username'];
	$c=	$_POST['nama_admin'];
	$d=	$_POST['password'];
	$e=	$_POST['konfirmasi_pwd'];

$update=mysql_query("update admin SET
                     username=		'".$b."',
                     nama_admin=	'".$c."',
                     password=	'".$d."'
                     WHERE id_admin=	'".$a."'");

if($update){
	
	?>
    <script type="text/javascript">
    	alert('Data Berhasil Diupadate')
		document.location='admin.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Diupadate')
	document.location='admin-edit.php';
	</script>
    
    <?php } ?>
    
	<?php 
	}else{  
        $_SESSION['error'] = $error;  
        $_SESSION['post'] = $_POST;  
        header("location: admin-edit.php");  
}
}
?>    