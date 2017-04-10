-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jan 2016 pada 04.10
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
  `kode_barang` varchar(7) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan` varchar(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `satuan`) VALUES
(1, 'ATK001', 'Kertas Komputer 3 ply', 'DUS'),
(2, 'ATK002', 'Kertas HVS A4', 'RIM'),
(3, 'ATP001', 'Pita Printer/Cartridge e-Print 2170 Longlife', 'PCS'),
(4, 'ATI001', 'Isi Hekter No.10 (Kecil)', 'DUS'),
(5, 'ATS001', 'Stabilo', 'PCS'),
(6, 'ATB001', 'Buku Folio Kecil Panjang', 'PCS'),
(8, 'BOS001', 'Sparepart Mobil 1/8 Gear Box House', 'DUS'),
(9, 'ATT001', 'Triagonal Clips No.10', 'PCS'),
(10, 'BOP001', 'Pipa Air', 'DUS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang2`
--

CREATE TABLE IF NOT EXISTS `barang2` (
`id` int(11) NOT NULL,
  `kd_brg` varchar(7) NOT NULL,
  `id2` int(11) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `satuan` varchar(4) NOT NULL,
  `qty_request` int(11) NOT NULL,
  `qty_realisasi` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `barang2`
--

INSERT INTO `barang2` (`id`, `kd_brg`, `id2`, `nm_barang`, `satuan`, `qty_request`, `qty_realisasi`, `keterangan`) VALUES
(20, 'ATK002', 12, 'Kertas HVS A4', 'RIM', 3, 3, 'Example'),
(21, 'BOP001', 12, 'Pipa Air', 'DUS', 2, 2, 'Example'),
(22, 'ATP001', 12, 'Pita Printer/Cartridge e-Print 2170 Longlife', 'PCS ', 1, 1, 'Example'),
(23, 'ATK002', 13, 'Isi Hekter No.10 (Kecil)', 'DUS', 1, 1, 'Example'),
(24, 'ATP001', 13, 'Pita Printer/Cartridge e-Print 2170 Longlife', 'PCS', 2, 2, 'Example'),
(25, 'ATK002', 14, 'Kertas Komputer 3 ply', 'DUS', 1, 1, 'Example');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
`id` int(11) NOT NULL,
  `kode_dept` varchar(7) NOT NULL,
  `nama_dept` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id`, `kode_dept`, `nama_dept`) VALUES
(1, 'DF', 'Dyeing Finishing'),
(2, 'WV', 'Weaving'),
(3, 'UM', 'Umum'),
(4, 'PRC', 'Purchasing'),
(7, 'MKT', 'Marketing'),
(8, 'GA', 'General Affair'),
(9, 'EXP', 'Expedisi'),
(10, 'ACC', 'Acounting'),
(11, 'LTK', 'Listrik'),
(12, 'COM', 'Compresor'),
(13, 'BO', 'Boiler');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE IF NOT EXISTS `gudang` (
`id` int(11) NOT NULL,
  `kode_gudang` varchar(7) NOT NULL,
  `nama_gudang` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id`, `kode_gudang`, `nama_gudang`) VALUES
(1, 'GDAT', 'Gudang Alat Tulis'),
(2, 'GDBB', 'Gudang Bahan Baku'),
(3, 'GDK', 'Gudang Kimia'),
(6, 'GDSP', 'Gudang Sparepart');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE IF NOT EXISTS `permintaan` (
`id` int(11) NOT NULL,
  `no_per` varchar(5) NOT NULL,
  `nama_dept` varchar(30) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(70) DEFAULT NULL,
  `lama_waktu` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `permintaan`
--

INSERT INTO `permintaan` (`id`, `no_per`, `nama_dept`, `tgl`, `message`, `status`, `lama_waktu`) VALUES
(5, 'P002', 'Accounting', '2015-10-19 06:32:pm', '<p>Tolong minta barang di bawa ini :</p>\r\n\r\n<ul>\r\n	<li>pulpen pilot</li>\r\n</ul>\r\n', 'sudah dibuat', '20 Menit / Lebih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sppb2`
--

CREATE TABLE IF NOT EXISTS `sppb2` (
`id` int(11) NOT NULL,
  `kode_dept` varchar(7) NOT NULL,
  `permintaan_dept` varchar(30) NOT NULL,
  `kode_gudang` varchar(7) NOT NULL,
  `no_sppb` varchar(13) NOT NULL,
  `tgl_sppb` date NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `sppb2`
--

INSERT INTO `sppb2` (`id`, `kode_dept`, `permintaan_dept`, `kode_gudang`, `no_sppb`, `tgl_sppb`, `year`) VALUES
(12, 'WV', 'Weaving', 'GDAT', 'SPPB1510/001', '2015-10-19', '15-10'),
(13, 'WV', 'Weaving', 'GDSP', 'SPPB1511/001', '2015-11-18', '15-11'),
(14, 'DF', 'Dyeing Finishing', 'GDSP', 'SPPB1511/002', '2015-11-18', '15-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level_id`) VALUES
(1, 'admin', 'admin', 1),
(2, 'general_affair', '12345678', 2),
(3, 'DF', '12345678', 3),
(4, 'WV', '12345678', 3),
(5, 'UM', '12345678', 3),
(6, 'PRC', '12345678', 3),
(10, 'MKT', '12345678', 3),
(11, 'EXP', '12345678', 3),
(12, 'ACC', '12345678', 3),
(13, 'BO', '12345678', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `barang2`
--
ALTER TABLE `barang2`
 ADD PRIMARY KEY (`id`), ADD KEY `kd_brg` (`kd_brg`), ADD KEY `id2` (`id2`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kode_dept` (`kode_dept`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kode_gudang` (`kode_gudang`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sppb2`
--
ALTER TABLE `sppb2`
 ADD PRIMARY KEY (`id`), ADD KEY `kode_dept` (`kode_dept`), ADD KEY `gudang_tujuan` (`kode_gudang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `barang2`
--
ALTER TABLE `barang2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sppb2`
--
ALTER TABLE `sppb2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang2`
--
ALTER TABLE `barang2`
ADD CONSTRAINT `barang2_ibfk_1` FOREIGN KEY (`kd_brg`) REFERENCES `barang` (`kode_barang`),
ADD CONSTRAINT `barang2_ibfk_2` FOREIGN KEY (`id2`) REFERENCES `sppb2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sppb2`
--
ALTER TABLE `sppb2`
ADD CONSTRAINT `sppb2_ibfk_1` FOREIGN KEY (`kode_dept`) REFERENCES `departemen` (`kode_dept`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `sppb2_ibfk_2` FOREIGN KEY (`kode_gudang`) REFERENCES `gudang` (`kode_gudang`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
