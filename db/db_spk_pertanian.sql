-- phpMyAdmin SQL Dump
-- version 4.2.0-dev
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2014 at 06:09 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `m_nilai_daerah2`
--

CREATE TABLE IF NOT EXISTS `m_nilai_daerah2` (
  `kode_daerah` varchar(50) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `nilai` int(10) NOT NULL,
`id` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `m_nilai_daerah2`
--

INSERT INTO `m_nilai_daerah2` (`kode_daerah`, `kriteria`, `nilai`, `id`) VALUES
('DEPOK', 'suhu', 20, 1),
('DEPOK', 'drainase', 3, 2),
('DEPOK', 'tekstur', 3, 3),
('DEPOK', 'kedalaman', 12, 4),
('DEPOK', 'ph', 2, 5),
('DEPOK', 'p205', 3, 6),
('DEPOK', 'k20', 3, 7),
('DEPOK', 'salinitas', 5, 8),
('DEPOK', 'kemiringan', 5, 9),
('DEPOK', 'batuan', 5, 10),
('DEPOK', 'singkapan', 5, 11),
('BOGOR', 'suhu', 15, 12),
('BOGOR', 'kedalaman', 15, 13),
('BOGOR', 'ph', 5, 14),
('BOGOR', 'salinitas', 10, 15),
('BOGOR', 'kemiringan', 10, 16),
('BOGOR', 'batuan', 10, 17),
('BOGOR', 'singkapan', 10, 18);

-- --------------------------------------------------------

--
-- Table structure for table `m_nilai_tanaman`
--

CREATE TABLE IF NOT EXISTS `m_nilai_tanaman` (
`id` int(5) NOT NULL,
  `kode_tanaman` varchar(10) NOT NULL,
  `kriteria` varchar(30) NOT NULL,
  `min_value` int(5) NOT NULL,
  `max_value` int(5) NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_nilai_tanaman`
--

INSERT INTO `m_nilai_tanaman` (`id`, `kode_tanaman`, `kriteria`, `min_value`, `max_value`, `score`) VALUES
(1, 'PADI', 'suhu', 5, 10, 100);

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
-- Dumping data for table `m_tanaman`
--

INSERT INTO `m_tanaman` (`kode`, `nama`, `jenis`) VALUES
('001', 'PADI', 'PADI'),
('002', 'JAGUNG', 'JAGUNG'),
('003', 'KEDELAI', 'KEDELAI');

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
-- Indexes for table `m_nilai_daerah2`
--
ALTER TABLE `m_nilai_daerah2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_nilai_tanaman`
--
ALTER TABLE `m_nilai_tanaman`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_tanaman`
--
ALTER TABLE `m_tanaman`
 ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_nilai_daerah2`
--
ALTER TABLE `m_nilai_daerah2`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `m_nilai_tanaman`
--
ALTER TABLE `m_nilai_tanaman`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
