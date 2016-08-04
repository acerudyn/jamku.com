<?php 
session_start(); 
include "koneksi.php";

$cari_kd=mysql_query("select max(id_member)as kode from member");
$id_cari=mysql_fetch_array($cari_kd);
$kode=substr($id_cari['kode'],6,4);
 
$thn=date("y");
$bln=date("m");
$tgl=date("d");
$adm=$kode;

$hsl=$adm+1;
$hitung=strlen($hsl);

if($hitung==1){
	$adm="000".$hsl;
}else if($hitung==2){
	$adm="00".$hsl;
}else if($hitung==3){
	$adm="0".$hsl;
}else if($hitung==4){
	$adm=$hsl;
}else{
	$adm="Data Error";
}

$id=$thn.$bln.$tgl.$adm;


if($_POST){  
	$b=	$_POST['nama'];
	$c=	$_POST['kelamin'];
	$d=	$_POST['alamat'];
	$e=	$_POST['provinsi'];
	$f=	$_POST['kabupaten'];
	$g=	$_POST['kecamatan'];
	$h=	$_POST['hp'];
	$i=	$_POST['email'];
	$j=	$_POST['username'];
	$k=	$_POST['password'];
	$l=	$_POST['konfirmasi_pwd'];
	
	
	$error=array();
	if(empty($b)){
		$error['nama']='Nama Tidak Boleh Kosong';
	}if(empty($c)){
		$error['kelamin']='Kelamin Tidak Boleh Kosong';
	}if(empty($d)){
		$error['alamat']='Alamat Tidak Boleh Kosong';
	}if(empty($e)){
		$error['provinsi']='Provinsi Tidak Boleh Kosong';
	}if(empty($f)){
		$error['kabupaten']='Kabupaten Tidak Boleh Kosong';
	}if(empty($g)){
		$error['Kecamatan']='Kecamatan Tidak Boleh Kosong';
	}if(empty($h)){
		$error['hp']='Nomor Hp Tidak Boleh Kosong';
	}if(! is_numeric($h)){
		$error['hp']='Nomor Hp Harus Diisi Angka';
	}if(empty($i)){
		$error['email']='Email Tidak Boleh Kosong';
	}if(empty($j)){
		$error['username']='Username Tidak Boleh Kosong';
	}if(empty($k)){
		$error['password']='Password Tidak Boleh Kosong';
	}if(empty($l)){
		$error['konfirmasi_pwd']='Konfirmasi Password Tidak Boleh Kosong';
	}if(($k!=$l)){
		$error['konfirmasi']='Konfirmasi Password Tidak Sama';
	}if(strlen($k) < 5 ){
		$error['panjang']='Panjang password minimal 5 karakter';
	}if(empty($error)){ ?>
    
<?php
	$a=$id;
	$b=	$_POST['nama'];
	$c=	$_POST['kelamin'];
	$d=	$_POST['alamat'];
	$e=	$_POST['provinsi'];
	$f=	$_POST['kabupaten'];
	$g=	$_POST['kecamatan'];
	$h=	$_POST['hp'];
	$i=	$_POST['email'];
	$j=	$_POST['username'];
	$k=	$_POST['password'];

$simpan=mysql_query("insert into member values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')");

if($simpan){
	
	?>
    <script type="text/javascript">
    	alert('Pendaftaran Berhasil, Silahkan Melakukan Login')
		document.location='login-user.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Pendaftaran Gagal')
	document.location='register.php';
	</script>
    
    <?php } ?>
    
	<?php 
	}else{  
        $_SESSION['error'] = $error;  
        $_SESSION['post'] = $_POST;  
        header("location: register.php");  
}
}
?>    