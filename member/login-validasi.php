<?php
session_start(); // Memulai Session
include 'koneksi.php';

if (isset($_POST['login'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) { ?>
			
			<script type="text/javascript">
    	alert('Username dan Password tidak boleh kosong !')
		document.location='login-user.php';
     		</script> 
    
	<?php } 
	else
	 { 
		// Variabel username dan password
		$username=$_POST['username'];
		$password=$_POST['password'];
		// Membangun koneksi ke database
		// Mencegah MySQL injection 
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = "SELECT * FROM member WHERE username = '$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
// cek kesesuaian password
if ($password == $data['password'])
{				
				$_SESSION['login']=$username;
				$_SESSION['member']=$data['id_member'];// Membuat Sesi/session
				header("location: lihat-profil.php"); // Mengarahkan ke halaman profil
				} else { ?>	
				<script type="text/javascript">
    	alert('Username atau Password belum terdaftar !')
		document.location='login-user.php';
     			</script> 
				<?php }
				mysql_close(); // Menutup koneksi
	}
}
?>