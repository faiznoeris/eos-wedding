-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2017 at 03:05 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eossalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcustomer`
--

DROP TABLE IF EXISTS `tbcustomer`;
CREATE TABLE IF NOT EXISTS `tbcustomer` (
  `idCust` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `kota` text NOT NULL,
  `alamat` text NOT NULL,
  `telp` int(11) NOT NULL,
  `email` text NOT NULL,
  `optionalInformation` text NOT NULL,
  PRIMARY KEY (`idCust`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbgalery`
--

DROP TABLE IF EXISTS `tbgalery`;
CREATE TABLE IF NOT EXISTS `tbgalery` (
  `idGalery` int(11) NOT NULL AUTO_INCREMENT,
  `namaGalery` text NOT NULL,
  `pathGalery` text NOT NULL,
  PRIMARY KEY (`idGalery`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblayanan`
--

DROP TABLE IF EXISTS `tblayanan`;
CREATE TABLE IF NOT EXISTS `tblayanan` (
  `idLayanan` int(11) NOT NULL AUTO_INCREMENT,
  `jenisLayanan` text NOT NULL,
  `hargaLayanan` double NOT NULL,
  PRIMARY KEY (`idLayanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbtransaksi`
--

DROP TABLE IF EXISTS `tbtransaksi`;
CREATE TABLE IF NOT EXISTS `tbtransaksi` (
  `idTransaksi` varchar(30) NOT NULL,
  `idLayanan` int(11) NOT NULL,
  `harga` double NOT NULL,
  `jenisBayar` varchar(50) NOT NULL,
  `tglTransaksi` datetime NOT NULL,
  `idCust` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`idTransaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
