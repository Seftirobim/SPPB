-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 07:09 AM
-- Server version: 5.6.20
-- PHP Version: 5.6.29

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
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
`id` int(11) NOT NULL,
  `kode_barang` varchar(7) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan` varchar(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `barang`
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
-- Table structure for table `barang2`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `barang2`
--

INSERT INTO `barang2` (`id`, `kd_brg`, `id2`, `nm_barang`, `satuan`, `qty_request`, `qty_realisasi`, `keterangan`) VALUES
(20, 'ATK002', 12, 'Kertas HVS A4', 'RIM', 3, 3, 'Example'),
(21, 'BOP001', 12, 'Pipa Air', 'DUS', 2, 2, 'Example'),
(22, 'ATP001', 12, 'Pita Printer/Cartridge e-Print 2170 Longlife', 'PCS ', 1, 1, 'Example'),
(23, 'ATK002', 13, 'Isi Hekter No.10 (Kecil)', 'DUS', 1, 1, 'Example'),
(24, 'ATP001', 13, 'Pita Printer/Cartridge e-Print 2170 Longlife', 'PCS', 2, 2, 'Example'),
(25, 'ATK002', 14, 'Kertas Komputer 3 ply', 'DUS', 1, 1, 'Example'),
(26, 'ATK001', 15, 'Kertas Komputer 3 ply', 'DUS', 1, 1, '-'),
(27, 'ATK001', 15, 'Kertas Komputer 3 ply', 'DUS', 4, 4, '-'),
(28, 'BOP001', 15, 'Pipa Air', 'DUS', 3, 3, 'df'),
(29, 'ATB001', 15, 'Buku Folio Kecil Panjang', 'PCS', 3, 3, 'sdfs'),
(30, 'ATK001', 15, 'Kertas Komputer 3 ply', 'DUS', 1, 1, 'sdgsdgs'),
(31, 'ATK001', 16, 'Kertas Komputer 3 ply', 'DUS', 1, 1, '-'),
(32, 'ATK001', 16, 'Kertas Komputer 3 ply', 'DUS', 4, 4, '-'),
(33, 'BOP001', 16, 'Pipa Air', 'DUS', 3, 3, 'df'),
(34, 'ATB001', 16, 'Buku Folio Kecil Panjang', 'PCS', 3, 3, 'sdfs'),
(35, 'ATK001', 16, 'Kertas Komputer 3 ply', 'DUS', 1, 1, 'sdgsdgs'),
(36, 'ATK001', 17, 'Kertas Komputer 3 ply', 'DUS', 1, 1, '-'),
(37, 'ATK002', 18, 'Kertas HVS A4', 'RIM', 1, 1, '-'),
(38, 'ATS001', 18, 'Stabilo', 'PCS', 1, 1, '-'),
(39, 'ATB001', 18, 'Buku Folio Kecil Panjang', 'PCS', 1, 1, '-');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
`id` int(11) NOT NULL,
  `kode_dept` varchar(7) NOT NULL,
  `nama_dept` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `departemen`
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
-- Table structure for table `gudang`
--

CREATE TABLE IF NOT EXISTS `gudang` (
`id` int(11) NOT NULL,
  `kode_gudang` varchar(7) NOT NULL,
  `nama_gudang` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id`, `kode_gudang`, `nama_gudang`) VALUES
(1, 'GDAT', 'Gudang Alat Tulis'),
(2, 'GDBB', 'Gudang Bahan Baku'),
(3, 'GDK', 'Gudang Kimia'),
(6, 'GDSP', 'Gudang Sparepart');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE IF NOT EXISTS `permintaan` (
`id` int(11) NOT NULL,
  `no_per` varchar(5) NOT NULL,
  `nama_dept` varchar(30) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(70) DEFAULT NULL,
  `lama_waktu` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id`, `no_per`, `nama_dept`, `tgl`, `message`, `status`, `lama_waktu`) VALUES
(18, 'P001', 'Dyeing Finishing', '2017-04-04 06:48:pm', '<ul>\r\n	<li>Kertas HVS A4 1 RIM</li>\r\n	<li>Buku Folio Kecil Panjang 1</li>\r\n	<li>Stabilo 1</li>\r\n</ul>\r\n', 'Belum Dikonfirmasi', '-');

-- --------------------------------------------------------

--
-- Table structure for table `sppb2`
--

CREATE TABLE IF NOT EXISTS `sppb2` (
`id` int(11) NOT NULL,
  `kode_dept` varchar(7) NOT NULL,
  `permintaan_dept` varchar(30) NOT NULL,
  `kode_gudang` varchar(7) NOT NULL,
  `no_sppb` varchar(13) NOT NULL,
  `tgl_sppb` date NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `sppb2`
--

INSERT INTO `sppb2` (`id`, `kode_dept`, `permintaan_dept`, `kode_gudang`, `no_sppb`, `tgl_sppb`, `year`) VALUES
(12, 'WV', 'Weaving', 'GDAT', 'SPPB1510/001', '2015-10-19', '15-10'),
(13, 'WV', 'Weaving', 'GDSP', 'SPPB1511/001', '2015-11-18', '15-11'),
(14, 'DF', 'Dyeing Finishing', 'GDSP', 'SPPB1511/002', '2015-11-18', '15-11'),
(15, 'WV', 'Weaving', 'GDK', 'SPPB1609/001', '2016-09-11', '16-09'),
(16, 'WV', 'Weaving', 'GDK', 'SPPB1609/002', '2016-09-11', '16-09'),
(17, 'DF', 'Dyeing Finishing', 'GDAT', 'SPPB1702/001', '2017-02-24', '17-02'),
(18, 'DF', 'Dyeing Finishing', 'GDAT', 'SPPB1704/001', '2017-04-04', '17-04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `sppb2`
--
ALTER TABLE `sppb2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang2`
--
ALTER TABLE `barang2`
ADD CONSTRAINT `barang2_ibfk_1` FOREIGN KEY (`kd_brg`) REFERENCES `barang` (`kode_barang`),
ADD CONSTRAINT `barang2_ibfk_2` FOREIGN KEY (`id2`) REFERENCES `sppb2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sppb2`
--
ALTER TABLE `sppb2`
ADD CONSTRAINT `sppb2_ibfk_1` FOREIGN KEY (`kode_dept`) REFERENCES `departemen` (`kode_dept`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `sppb2_ibfk_2` FOREIGN KEY (`kode_gudang`) REFERENCES `gudang` (`kode_gudang`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
