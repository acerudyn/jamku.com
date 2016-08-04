<?php 
session_start(); 
include "koneksi.php";

$cari_kd=mysql_query("select max(id_admin)as kode from admin");
$id_cari=mysql_fetch_array($cari_kd);
$kode=substr($id_cari['kode'],8,2);
 
$thn=date("Y");
$bln=date("m");
$tgl=date("d");
$adm=$kode;

$hsl=$adm+1;
$hitung=strlen($hsl);

if($hitung==1){
	$adm="0".$hsl;
}else if($hitung==2){
	$adm=$hsl;
}else{
	$adm="Data Error";
}

$id=$thn.$bln.$tgl.$adm;


if($_POST){  
	$b=	$_POST['nama'];
	$c=	$_POST['username'];
	$d=	$_POST['password'];
	$e=	$_POST['konfirmasi_pwd'];
	
	
	$error=array();
	if(empty($b)){
		$error['nama']='Nama Tidak Boleh Kosong';
	}if(empty($c)){
		$error['username']='Username Tidak Boleh Kosong';
	}if(empty($d)){
		$error['password']='Password Tidak Boleh Kosong';
	}if(empty($e)){
		$error['konfirmasi_pwd']='Konfirmasi Password Tidak Boleh Kosong';
	}if(($d!=$e )){
		$error['konfirmasi']='Password Tidak Sama';
	}if(strlen($d) < 5 ){
		$error['panjang']='Panjang password minimal 5 karakter';
	}if(empty($error)){ ?>
    
		<?php
$a=$id;
$b=$_POST['nama'];
$c=$_POST['username'];
$d=$_POST['password'];
$e=$_POST['konfirmasi_pwd'];

$simpan=mysql_query("insert into admin values('$a','$c','$b','$d')");

if($simpan){
	
	?>
    <script type="text/javascript">
    	alert('Data Berhasil Disimpan')
		document.location='admin.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Disimpan')
	document.location='admin-add.php';
	</script>
    
    <?php } ?>
    
	<?php 
	}else{  
        $_SESSION['error'] = $error;  
        $_SESSION['post'] = $_POST;  
        header("location: admin-add.php");  
}
}
?>    