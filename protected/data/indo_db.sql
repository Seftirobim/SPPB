-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Agu 2015 pada 08.46
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `indo_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
`id` int(11) NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`) VALUES
(3, 'AT.B.0001', 'Pita Printer'),
(4, 'AT.B.0002', 'printer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang2`
--

CREATE TABLE IF NOT EXISTS `barang2` (
`id` int(11) NOT NULL,
  `kd_brg` varchar(30) NOT NULL,
  `kode_brg` varchar(30) NOT NULL,
  `nm_barang` varchar(30) NOT NULL,
  `satuan` varchar(30) DEFAULT NULL,
  `qty_request` int(11) NOT NULL,
  `qty_realisasi` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data untuk tabel `barang2`
--

INSERT INTO `barang2` (`id`, `kd_brg`, `kode_brg`, `nm_barang`, `satuan`, `qty_request`, `qty_realisasi`, `keterangan`) VALUES
(5, 'TTTr', '4', 'gg', 'gg', 1, 1, 'g'),
(6, 'A.M0001', '5', 'Busa Baju', 'Dus', 1, 1, 'untuk di jual'),
(7, 'A.M0002', '5', 'da', 'da', 3, 3, 'gogo'),
(8, 'A.M0003', '5', 'dasd', 'dsa', 5, 5, 'jghjg'),
(9, 'A3', '6', 'Pulpen Piloot', 'Pcs', 7, 7, 'Untuk Menulis'),
(10, 'A4', '6', 'Printer', 'DUS', 1, 1, 'Untuk Memprint'),
(11, 'A7', '6', 'Bebas', 'PCS', 1, 1, 'Untuk untk'),
(12, 'A8', '6', 'Gunting', 'Pcs', 1, 1, 'untuk memproteksi diri'),
(13, 'A5', '7', 'Bulpoin', 'DAS', 1, 1, 'Untuk blablablablablablablablablabla lablablablablablabla'),
(14, 'AT.001', '8', 'Shampo', 'PCS', 1, 1, 'Untuk Menggunting'),
(15, 'AT.002', '8', 'Sabun', 'PCS', 1, 1, 'Untuk Mandi Lah'),
(16, 'AD667', '9', 'hh', 'hh', 5, 5, 'fghf'),
(17, 'ty67', '9', 'jhgj', 'gj', 7, 7, 'jfj'),
(18, 'y6768', '9', 'jhgj', 'hg', 6, 6, 'jhgjg'),
(19, 'asdasd', '10', 'adasd', 'asd', 3, 2, 'asdasd'),
(20, 'asdad', '10', 'wrqwr', 'ada', 4, 3, 'asdasda'),
(21, 'asdasd', '11', 'asdad', 'ada', 7, 7, 'asdl'),
(22, '33asd', '12', 'asdasd', '1', 1, 1, 'asdasd'),
(23, '33asd', '13', 'asdasd', '1', 1, 1, 'asdasd'),
(24, 'sdf', '14', 'nnmvsd', 'sdf', 3, 3, 'cczxc'),
(25, 'sdgsg', '15', 'asdad', 'asd', 1, 1, 'kjasda'),
(26, 'kansdn', '15', 'asdasd', 'asd', 7, 7, 'asdasd'),
(27, 'AT.001', '16', 'kjhasdkjhs', '2', 1, 2, 'ljasdlkj'),
(28, 'AT.003', '16', 'Pulpen Aeou', 'Pack', 3, 3, 'sdlkjasdlkj'),
(29, 'AT.002', '16', 'Bulpoin', 'Pcs', 4, 5, 'asdn,mn');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
`id` int(11) NOT NULL,
  `kode_dept` varchar(30) NOT NULL,
  `nama_dept` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id`, `kode_dept`, `nama_dept`) VALUES
(1, 'D01', 'Departement A'),
(2, 'D02', 'Departement B'),
(3, 'D03', 'Departement C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE IF NOT EXISTS `gudang` (
`id` int(11) NOT NULL,
  `kode_gudang` varchar(30) NOT NULL,
  `nama_gudang` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id`, `kode_gudang`, `nama_gudang`) VALUES
(3, 'GD.B.0001', 'BPTK'),
(4, 'GD.B.0002', 'GDTK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
`id` int(11) NOT NULL,
  `sppbid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user'),
(3, 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sppb`
--

CREATE TABLE IF NOT EXISTS `sppb` (
`id` int(11) NOT NULL,
  `kode_dept` varchar(30) NOT NULL,
  `permintaan_dept` varchar(30) NOT NULL,
  `gudang_tujuan` varchar(30) NOT NULL,
  `no_sppb` varchar(30) NOT NULL,
  `tlg_sppb` date NOT NULL,
  `nm_barang` varchar(30) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `kd_barang` varchar(30) NOT NULL,
  `qty_request` int(11) NOT NULL,
  `qty_realisasi` int(11) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `sppb`
--

INSERT INTO `sppb` (`id`, `kode_dept`, `permintaan_dept`, `gudang_tujuan`, `no_sppb`, `tlg_sppb`, `nm_barang`, `satuan`, `kd_barang`, `qty_request`, `qty_realisasi`, `keterangan`) VALUES
(6, 'D02', 'Departement B', 'GDTK', 'SPBB1508/PRC/001', '2015-08-12', 'Pita Printer', 'DUS', 'AT.B.0001', 4, 4, 'kjgkjg'),
(7, 'D01', 'Departement A', 'GDTK', 'SPBB1508/PRC/002', '2015-08-06', 'Pita Printer', 'RIM', 'AT.B.0001', 2, 2, 'dkasdh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sppb2`
--

CREATE TABLE IF NOT EXISTS `sppb2` (
`id` int(11) NOT NULL,
  `kode_dept` varchar(30) NOT NULL,
  `permintaan_dept` varchar(30) NOT NULL,
  `gudang_tujuan` varchar(30) NOT NULL,
  `no_sppb` varchar(30) NOT NULL,
  `tgl_sppb` date NOT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `sppb2`
--

INSERT INTO `sppb2` (`id`, `kode_dept`, `permintaan_dept`, `gudang_tujuan`, `no_sppb`, `tgl_sppb`, `year`) VALUES
(11, 'D01', 'Departement A', 'GDTK', 'SPBB1508/PRC/001', '2015-08-18', 2015),
(12, 'D03', 'Departement C', 'BPTK', 'SPBB1508/PRC/002', '2015-08-28', 2015),
(14, 'D01', 'Departement A', 'GDTK', 'SPBB1508/PRC/003', '2015-07-01', 2015),
(15, 'D02', 'Departement B', 'GDTK', 'SPBB1508/PRC/004', '2015-08-13', 2015),
(16, 'D03', 'Departement C', 'BPTK', 'SPBB1508/PRC/005', '2015-08-18', 2015);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang2`
--
ALTER TABLE `barang2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sppb`
--
ALTER TABLE `sppb`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sppb2`
--
ALTER TABLE `sppb2`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `barang2`
--
ALTER TABLE `barang2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sppb`
--
ALTER TABLE `sppb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sppb2`
--
ALTER TABLE `sppb2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
