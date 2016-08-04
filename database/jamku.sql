-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2016 at 07:25 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jamku`
--
CREATE DATABASE IF NOT EXISTS `jamku` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jamku`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(11) NOT NULL,
  `username` varchar(23) NOT NULL,
  `nama_admin` varchar(31) NOT NULL,
  `password` varchar(31) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama_admin`, `password`) VALUES
('2016021504', 'acerudyn', 'Akhirudin Muhamad', 'akhirudin'),
('2016021805', 'udin313', 'Acerudyn ', 'udin'),
('2016041006', 'udinese', 'Akhirudin ', 'akhirudin');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id_brand` varchar(11) NOT NULL,
  `nama_brand` varchar(23) NOT NULL,
  PRIMARY KEY (`id_brand`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `nama_brand`) VALUES
('aky', 'Aukey'),
('apl', 'Apple'),
('bln', 'Bluelans'),
('cso', 'Casio'),
('dgt', 'Digitec'),
('onx', 'Onix'),
('qrt', 'Quartz'),
('skm', 'Skmei'),
('sny', 'Sony'),
('sws', 'Swiss Army'),
('tst', 'Tissot');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` varchar(11) NOT NULL,
  `nama_contact` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama_contact`, `email`, `pesan`) VALUES
('1604010004', 'Abdul Rahman', 'abdul@yahoo.com', 'cara belinya gimana ini...?'),
('160403001', 'Udinese', 'udin@yahoo.com', 'Gimana cara belinya broo..?'),
('160508002', 'Abdul Rahman', 'abdul@yahoo.com', 'cara belinya gimana?');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(11) NOT NULL,
  `nama_kategori` varchar(23) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('ank', 'Anak-anak'),
('csl', 'Casual'),
('frm', 'Formal'),
('fsn', 'Fashion'),
('led', 'LED Watch'),
('smr', 'Smart Watch'),
('spr', 'Sporty');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
  `id_member` varchar(11) NOT NULL,
  `id_produk` varchar(11) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` varchar(11) NOT NULL,
  `nama_member` varchar(23) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `provinsi` varchar(23) NOT NULL,
  `kabupaten` varchar(23) NOT NULL,
  `kecamatan` varchar(23) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(23) NOT NULL,
  `username` varchar(23) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `jenis_kelamin`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `telepon`, `email`, `username`, `password`) VALUES
('1603060001', 'Akhirudin ', 'Pria', 'Desa Pasir Gombong, Cikarang ', '14', '204', '2744', '085228053623', 'ragil@yahoo.com', 'acerudyn', 'akhirudin'),
('1603070002', 'Akhirudin Muhamad', 'Pria', 'Cikarang Utara Bekasi', '14', '204', '2744', '123445', 'ragil@yahoo.com', 'udin313', 'akhirudin'),
('1604010003', 'udin', 'pria', 'sdfg', '12', '152', '1734', '123445', 'ragil@yahoo.com', 'udinese', 'akhirudin'),
('1604010004', 'Abdul Rahman', 'Pria', 'tanjung', '14', '204', '2744', '12345', 'abdul@yahoo.com', 'abdul', 'sudiyono'),
('1604170005', 'iqbal nurdiyanto', 'pria', 'perumahan bekasi regensi 2,blok dd2 no.59. cibitung,bekasi', '12', '152', '1730', '089517526089', 'iqbalnur166@Gmail.com', 'iqbalNurdiyanto', 'sabalongsamalewa'),
('1604220006', 'Andy Ry', 'pria', 'Jarakosta', '12', '152', '1732', '081915030140', 'andi.ry90@gmail.com', 'andyry', 'uchihaitachi'),
('1605080007', 'Akhirudin Muhamad', 'pria', 'Tanjunganom', '14', '204', '2744', '123445', 'ragil@yahoo.com', 'udin313akhirudin', 'akhirudin'),
('1606170008', 'asdf', 'Pria', 'fghdf', '13', '178', '2296', '3255', 'ragil@yahoo.com', 'acerudyn', 'udin1234'),
('1606190009', 'sdfghr', 'Pria', 'zxcvb', '--Pilih Provinsi--', '--Pilih Kabupaten/Kota-', '--Pilih Kecamatan--', '123445', 'ragil@yahoo.com', 'acerudyn13', 'akhirudin'),
('1606220010', 'Syahal Abdilah', 'Pria', 'Perum Regensi II, blok DD2/51, RT 018/006, Wanasari', '12', '152', '1730', '123456789876', 'sahal@yahoo.com', 'sahal', 'abdilah');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pesan` varchar(13) NOT NULL,
  `tanggal` date NOT NULL,
  `id_member` varchar(13) NOT NULL,
  `id_produk` varchar(13) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesan`, `tanggal`, `id_member`, `id_produk`, `jumlah`) VALUES
('160622220357', '2016-06-22', '1606220010', '20160303019', 1),
('160622222135', '2016-06-22', '1606220010', '20160617036', 1),
('160622222314', '2016-06-22', '1606220010', '20160601034', 1),
('160628204029', '2016-06-28', '1604010004', '20160223013', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` varchar(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `konsumen` varchar(15) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `id_brand` varchar(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `konsumen`, `id_kategori`, `id_brand`, `harga`, `stok`, `deskripsi`, `gambar`) VALUES
('20160223011', 'Skmei Spedo watch', 'pria', 'led', 'skm', 300000, 18, 'Cocok untuk anak muda yang ingin terlihat lebih gaya dan trendi, dengan desain mirip spedometer', '20160223011.lackingone-new-fashion.jpg'),
('20160223012', 'Gold quart beauty', 'wanita', 'csl', 'qrt', 350000, 31, 'Membuat wanita terlihat lebih cantik dan casual', '20160223012.2014-fashion.jpg'),
('20160223013', 'Bluelans Brown Rubber', 'pria', 'csl', 'bln', 310000, 13, 'Cocok untuk pria yang ingin bergaya Casual', '20160223013.bluelans-jam-tangan-pria.jpg'),
('20160223014', 'Onix U8 smartwatch', 'pria', 'smr', 'onx', 500000, 13, 'smart watch onix dengan desain elegan        ', '20160223014.onix-u-watch.jpg'),
('20160301018', 'Apple smartwatch White', 'pria', 'smr', 'apl', 6000000, 12, ' Jam tangan dari apple dengan kualitas terbaik dengan desain yang mewah, mempunyai banyak fitur cocok untuk kamu yang suka dengan hal baru', '20160301018.apple-watch-42mm-stainless.jpg'),
('20160303019', 'Apple Smartwatch Gold', 'pria', 'smr', 'apl', 6000000, 12, ' Jam tangan dari apple dengan kualitas terbaik dengan desain yang mewah, mempunyai banyak fitur cocok untuk kamu yang suka dengan hal baru', '20160303019.apple-watch-edition-42mm-18-.jpg'),
('20160303020', 'Onix Viddon Smartwatch', 'pria', 'smr', 'onx', 250000, 13, 'Onix smartwatch desain tipis dan kokoh, cocok untuk jiwa petualang yang tak ingin lepas dari gadget ', '20160303020.onix-vidonn-zeroner.jpg'),
('20160303021', 'Onix Zygpax Smartwatch', 'pria', 'smr', 'onx', 500000, 13, 'Onix Zygpax jam tangan keren dilengkapi dengan kamera dan kartu sim card ', '20160303021.onix-zgpax.jpg'),
('20160303022', 'Sony Smartwatch', 'pria', 'smr', 'sny', 1500000, 12, 'Sony Smartwatch dengan desain yang menawan membuat anda semakin percaya diri jika mengenakannya ', '20160303022.sony-smart-watch.jpg'),
('20160303023', 'Bluelans Black Rubber C', 'wanita', 'fsn', 'bln', 200000, 13, 'Jam tangan dari bluelans ini cocok untuk kaum hawa yang ingin terlihat fashionable ', '20160303023.bluelans-women.jpg'),
('20160509024', 'Bluelans Women White Music', 'wanita', 'fsn', 'bln', 150000, 21, 'Bluelans Women White Musical sangat cocok untuk anda yang mencintai musik, didesain khusus untuk pecinta musik.', '20160509024.bluelans-womens-musical.jpg'),
('20160509025', 'Children Cartoon Cute', 'anak', 'ank', 'qrt', 100000, 10, 'Children Cartoon Cute dengan desain gambar hello kitty sangat cocok untuk anak anak pecinta kartun tersebut.', '20160509025.childrens-cartoon-cute.jpg'),
('20160601026', 'Digitec Men Waterproof', 'anak', 'ank', 'dgt', 150000, 20, 'Jam tangan anak yang anti air dengan desain bagus dan penuh gaya', '20160601026.men-waterproof.jpg'),
('20160601027', 'Bluelans sport outdoor silicone', 'anak', 'ank', 'bln', 100000, 15, 'Jam tangan anak untuk cewek dengan desain cantik, yang akan membuat kamu terlihat semakin cantik', '20160601027.oem-students-outdoor-sports-panda-silicone.jpg'),
('20160601028', 'Skemei digital robot', 'anak', 'ank', 'skm', 150000, 20, 'Dengan desain yang mirip robot jam tangan ini sangat cocok untuk anak laki-laki', '20160601028.skmei-1095-kids.jpg'),
('20160601029', 'Digitec proyektor watch', 'anak', 'ank', 'dgt', 100000, 15, 'Jam tangan dengan gambar cartoon sangat diminati oleh anak-anak', '20160601029.tmo-jam-proyektor.jpg'),
('20160601030', 'Quart Womage Children', 'anak', 'ank', 'qrt', 100000, 10, 'Desainnya klasik dengan jarum berbentuk pensil dan angka terlihat lucu', '20160601030.womage-children.jpg'),
('20160601031', 'Casio Geneva Women Gold', 'wanita', 'fsn', 'cso', 150000, 15, 'Casio Geneva cocok untuk wanita yang ingin terlihat lebih fashionable', '20160601031.geneva-women.jpg'),
('20160601032', 'Quartz Red Black Clasic', 'wanita', 'fsn', 'qrt', 100000, 20, 'Jam tangan wanita klasik tapi tetap terlihat membuat anda lebih menarik', '20160601032.jam-tangan-wanita.jpg'),
('20160601033', 'Bluelans Curren Black', 'pria', 'frm', 'bln', 200000, 14, 'Desain penuh gaya tapi masih membuat kamu terlihat lebih formal', '20160601033.bluelans-curren.jpg'),
('20160601034', 'Casio Iluminator', 'pria', 'frm', 'cso', 200000, 19, 'Casio Iluminator worldtime buat kamu yang ingin gaya tapi tanpa menghilangkan kesan formalitas', '20160601034.casio-standard.jpg'),
('20160617035', 'Bluleans PVC sport', 'wanita', 'spr', 'bln', 200000, 15, 'Jam tangan sporty dari bluelans hadir dengan dsain yang sporty', '20160617035.bluelans-unisex-pvc-sports.jpg'),
('20160617036', 'Bluelans Women Sporty Classic', 'wanita', 'spr', 'bln', 150000, 20, 'Jam tangan wanita dari bluelans yang memadukan unsur clasic dan sporty.', '20160617036.bluelans-womens.jpg'),
('20160617037', 'Digitec Women Sporty Hard', 'wanita', 'spr', 'dgt', 200000, 15, 'Digitec women sporty hard sangat cocok untuk wanita yang ingin tampil sporty', '20160617037.digitec-jam-tangan-wanita.jpg'),
('20160617038', 'Swiss Army Expedition Men', 'pria', 'spr', 'sws', 200000, 50, 'Swiss Army Expedition jam tangan pria yang clasic tapi dengan desain sporty', '20160617038.expedition-e6671-jam-tangan-pria.jpg'),
('20160617039', 'Digitec Waterproof Women Jelly', 'wanita', 'spr', 'dgt', 150000, 20, 'Digitec waterproof jam tangan wanita yang anti air dengan leater yang nyaman ditangan', '20160617039.fashion-waterproof-womens-jelly.jpg'),
('20160712040', 'Aukey Eifel Classic', 'wanita', 'csl', 'aky', 200000, 21, 'Jam tangan dari aukey yang sangat menawan dengan desain dilengkapi gambar menara eifel', '20160712040.Aukey-Eifel.jpg'),
('20160712041', 'Aukey Geneva Platinum', 'pria', 'csl', 'aky', 200000, 13, 'Aukey geneva platinum jam tangan pria yang memiliki karakteristik casual', '20160712041.aukey-geneva.jpg'),
('20160712042', 'Bluelans Crhome Cronometer', 'pria', 'csl', 'bln', 250000, 15, 'Jam tangan Bluelans Chrome Cronometer adalah jam tangan pria yang sangat cocok untuk pria kasual', '20160712042.bluelans-jam-tangan.jpg'),
('20160712043', 'Aukey Curren Man Black', 'pria', 'csl', 'aky', 200000, 13, 'Aukey Curren Men black jam tangan pria yang mempunyai desain kasual dan klasik', '20160712043.curren-mens-black.jpg'),
('20160712044', 'Aukey Luxury Mens', 'pria', 'csl', 'aky', 250000, 11, 'Aukey Luxury Mens adalah jam tangan pria yang mempunyai desain mewah dan bernuansa kasual', '20160712044.luxury-fashion.jpg'),
('20160712045', 'Quartz Monar Elegan', 'wanita', 'csl', 'qrt', 150000, 20, 'Quartz Monar Elegan jam tangan wanita yang sangat elegan cocok untuk wanita yang menginginkan gaya kasul', '20160712045.monar-eegan.jpg'),
('20160712046', 'Quartz Monar Ringstone', 'wanita', 'frm', 'qrt', 150000, 20, 'Quartz Monar Ringstone desain menawan dan terkesan masih formal', '20160712046.moonar-rhinestone.jpg'),
('20160712047', 'Quartz Geneva Stainless', 'wanita', 'frm', 'qrt', 150000, 13, 'Quartz Geneva Stainless desain mewah sangat cocok untuk kaum hawa yang ingin terlihat menawan', '20160712047.quart-stainless.jpg'),
('20160712048', 'Swiss Army Classic Black', 'pria', 'frm', 'sws', 300000, 20, 'Swiss Army Classic Black desain bernuansa klasik tapi tetap terlihat formal dan trendi', '20160712048.swiss-army.jpg'),
('20160712049', 'Swiss Army Classic Retro', 'pria', 'frm', 'sws', 300000, 15, 'Swiss Army Classic Retro memiliki desain yang sangat indah dengan perpaduan klasik dan sporty', '20160712049.swiss-army-jam-0490.jpg'),
('20160712050', 'Skemei Led Watch', 'pria', 'led', 'skm', 100000, 20, 'Skemei Led Watch jam tangan led yang menawan cocok untuk pria yang ingin terlihat mewah', '20160712050.725168981426400028.jpg'),
('20160712051', 'Casio Led Watch', 'wanita', 'led', 'cso', 150000, 13, 'Casio Led Watch jam tangan led dari casio yang mempesona bagi para wanita', '20160712051.casio-digital-watch.jpg'),
('20160712052', 'Skemei Led Watch Long Desain', 'pria', 'led', 'skm', 150000, 20, 'Skemei Led Watch Long Desain hadir kembali dengan desain memanjang, tapi masih terlihat mewah', '20160712052.leather-women-sports-wrist-watch-unisex-led-.jpg'),
('20160712053', 'Tissot Remote Led Watch', 'pria', 'led', 'tst', 250000, 16, 'Tissot Remote Led Watch hadir dengan desain seperti remote control.', '20160712053.led-watch.jpg'),
('20160712054', 'Skemei Led Watch Blue', 'pria', 'led', 'skm', 100000, 10, 'Skemei Led Watch Blue desainnya seperti gelang yang sangat cocok untuk kamu yang berjiwa sporty', '20160712054.led-watch-sport-watches-aa-w027-jam-tangan-pria-biru-silicon-7768-122629-1-product.jpg'),
('20160712055', 'Skemei Ultra Thin Led Watch', 'wanita', 'led', 'skm', 100000, 20, 'Skemei Ultra Thin Led Watch dengan desain yang tipis membuat nyaman dipakai', '20160712055.ultra-thin-girl-sports-silicone-.jpg'),
('20160712056', 'Tissot Sport Military', 'pria', 'spr', 'tst', 350000, 5, 'Tissot Sport Military hadir dengan desain yang khas seperti militer yang mengedepankan unsur sport', '20160712056.lackingone-new-fashion-military.jpg'),
('20160712057', 'Tissot Redline Watch', 'pria', 'fsn', 'tst', 350000, 30, 'Tissot Redline Watch desain kotak yang membuat terlihat menawan dengan corak garis merah', '20160712057.red-line-compressor2.jpg'),
('20160712058', 'Swiss Army Square Clasic', 'pria', 'fsn', 'sws', 350000, 20, 'Swiss Army Square Clasic membuat para pria yang memakai menjadi percaya diri', '20160712058.swiss-army-jam-tangan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `id_testimonial` varchar(11) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `id_member` varchar(23) NOT NULL,
  `id_transaksi` varchar(15) NOT NULL,
  `isi` varchar(500) NOT NULL,
  PRIMARY KEY (`id_testimonial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id_testimonial`, `tanggal`, `id_member`, `id_transaksi`, `isi`) VALUES
('03042016005', '03-04-2016', '1604010004', '', 'Barang sudah sampsi dengan selamat, semoga awet... :)'),
('10032016001', '10-03-2016', '1603070002', '', 'barang sudah terkirim gan...'),
('10032016002', '10-03-2016', '1603070002', '', 'barang sudah diterima dengan selamat...'),
('10032016003', '10-03-2016', '1603070002', '', 'barang telah sampai, packing rapi dan prosenya juga cepet..'),
('12032016004', '12-03-2016', '1603060001', '', 'barangnya suadah sampai gan, prosesnya cepet packng juga rapi, sipp lah...'),
('20160403005', '03-04-2016', '1604010004', '', 'jam apple nya sudah sampai dengan selamat gan, tapi belum dicoba nih...'),
('20160422006', '22-04-2016', '1604220006', '', 'Jam yang bagus tapi murah dimana ya ????'),
('20160531007', '31-05-2016', '1604010004', '160516033913', 'barang suadah samapai, tapi belum saya coba semoga saja awet...'),
('20160531008', '31-05-2016', '1603070002', '160531100257', 'barang sampai tepat waktu, packing juga rapi dan safety...'),
('20160617009', '17-06-2016', '1604010004', '160510083531', 'barang sudah samapai proses yang dilakukan juga cepat dan rapi, best recomdend..!');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` varchar(13) NOT NULL,
  `id_member` varchar(11) NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `no_resi` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `konfirmasi` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_member`, `penerima`, `no_resi`, `tanggal`, `total`, `alamat`, `bank`, `konfirmasi`, `status`) VALUES
('160622222314', '1606220010', 'Marjo', 0, '2016-07-11', 230000, 'Tanjunganom, RT 003/001 Kec. Butuh Kab. Purworejo Prov. Jawa Tengah', 'BRI', 'belum transfer', 'Belum lunas'),
('160628204029', '1604010004', 'Abdul Rahman', 0, '2016-07-06', 321000, 'Cikarang Kec. Cikarang Selatan Kab. Bekasi Prov. Jawa Barat', 'BRI', 'wis tak transfer', 'Belum lunas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
