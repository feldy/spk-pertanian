-- phpMyAdmin SQL Dump
-- version 4.2.0-dev
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2014 at 12:17 PM
-- Server version: 5.5.35-0ubuntu0.12.04.2
-- PHP Version: 5.3.10-1ubuntu3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_spk_pertanian`
--
-- --------------------------------------------------------

--
-- Table structure for table `m_daerah`
--

CREATE TABLE IF NOT EXISTS `m_daerah` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(55) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_daerah`
--

INSERT INTO `m_daerah` (`kode`, `nama`, `alamat`) VALUES
('001', 'DEPOK', 'sjdhfklshdflsdf'),
('009', 'BOGOR', 'sldfhlkdhflkshdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `m_nilai_daerah`
--

CREATE TABLE IF NOT EXISTS `m_nilai_daerah` (
  `kode_daerah` varchar(50) NOT NULL,
  `suhu` varchar(50) NOT NULL,
  `drainase` varchar(50) NOT NULL,
  `tekstur` varchar(50) NOT NULL,
  `kedalaman` varchar(50) NOT NULL,
  `ph` varchar(50) NOT NULL,
  `p205` varchar(50) NOT NULL,
  `k20` varchar(50) NOT NULL,
  `salinitas` varchar(50) NOT NULL,
  `kemiringan` varchar(50) NOT NULL,
  `batuan` varchar(50) NOT NULL,
  `singkapan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_nilai_daerah`
--

INSERT INTO `m_nilai_daerah` (`kode_daerah`, `suhu`, `drainase`, `tekstur`, `kedalaman`, `ph`, `p205`, `k20`, `salinitas`, `kemiringan`, `batuan`, `singkapan`) VALUES
('DEPOK', '1', '2', '2', '1', '1', '2', '2', '1', '11', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `m_tanaman`
--

CREATE TABLE IF NOT EXISTS `m_tanaman` (
  `kode` varchar(55) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `jenis` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_daerah`
--
ALTER TABLE `m_daerah`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `m_nilai_daerah`
--
ALTER TABLE `m_nilai_daerah`
 ADD PRIMARY KEY (`kode_daerah`);

--
-- Indexes for table `m_tanaman`
--
ALTER TABLE `m_tanaman`
 ADD PRIMARY KEY (`kode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
