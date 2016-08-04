<?php
include "koneksi.php";
include "session.php";

// Baca Kode Pelanggan yang Login
$KodePelanggan	= $_SESSION['member'];

if(isset($_GET['keranjang'])) {
	// Baca Kode Barang yang dipilih
	$Kode = $_GET['keranjang'];
			
// Baca data di dalam Keranjang Belanja	
$cekSql = "SELECT * FROM keranjang WHERE id_member='$KodePelanggan' AND id_produk='$Kode'";
$cekQry = mysql_query($cekSql, $konek) or die ("Cek data barang".mysql_error()); 

	if(mysql_num_rows($cekQry) >=1) {
		// Jika barang sudah pernah dipilih, maka update saja jumlah barangnya (+1)
		$mySql = "UPDATE keranjang SET jumlah=jumlah + 1 WHERE id_member='$KodePelanggan' AND id_produk='$Kode'";
		$data	= mysql_fetch_array($cekQry);
	}
	else {
		// Jika barang belum pernah dipilih, maka tambahkan baris baru ke keranjang
		$mySql = "SELECT * FROM produk WHERE id_produk='$Kode'";
		$myQry = mysql_query($mySql, $konek) or die ("Gagal ambil data barang".mysql_error());
	
// Membaca data dari tabel Barang, untuk diinput ke tabel TMP
		
// Simpan data ke TMP (Keranjang Belanja)
$mySql	= "INSERT INTO keranjang (id_member, id_produk, jumlah) 
					VALUES('$KodePelanggan', '$Kode', '1')";
}
	
	// Menjalankan SQL di atas ( Update jumlah barang & Input barang baru ke TMP)
	$myQry = mysql_query($mySql, $konek) or die ("Error".mysql_error());
	if ($myQry) {
		?>
		<script type="text/javascript">
	alert('Barang berhasil ditambahkan')
	document.location='keranjang.php';
	</script>
    <?php
	} else {
		?>
		<script type="text/javascript">
	alert('Barang gagal ditambahkan')
	document.location='home.php';
	</script>
    <?php
		}
}

?>
