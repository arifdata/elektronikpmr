-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2014 at 09:51 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `slimblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `kunjungans`
--

CREATE TABLE IF NOT EXISTS `kunjungans` (
`id` int(11) NOT NULL,
  `tanggal` varchar(20) DEFAULT '. . .',
  `tipe` varchar(20) DEFAULT '. . .',
  `dokter` varchar(50) DEFAULT '. . .',
  `obat` varchar(500) DEFAULT '. . .',
  `idpas` int(11) DEFAULT '0',
  `info_dokter` varchar(100) DEFAULT '. . .',
  `khasiat_obat` varchar(100) DEFAULT '. . .',
  `keterangan_resep` varchar(100) DEFAULT '. . .',
  `penyimpanan_obat` varchar(100) DEFAULT '. . .',
  `interaksi_obat` varchar(100) DEFAULT '. . .'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE IF NOT EXISTS `pasiens` (
`idpasien` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT '. . .',
  `alamat` varchar(100) DEFAULT '. . .',
  `telepon` varchar(60) DEFAULT '. . .',
  `usia` varchar(30) DEFAULT '. . .',
  `alergi` varchar(50) DEFAULT '. . .',
  `penyakit_lain` varchar(50) DEFAULT '. . .'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kunjungans`
--
ALTER TABLE `kunjungans`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_kunjungan_pasiens` (`idpas`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
 ADD PRIMARY KEY (`idpasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kunjungans`
--
ALTER TABLE `kunjungans`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
MODIFY `idpasien` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kunjungans`
--
ALTER TABLE `kunjungans`
ADD CONSTRAINT `FK_kunjungan_pasiens` FOREIGN KEY (`idpas`) REFERENCES `pasiens` (`idpasien`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
