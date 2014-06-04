-- phpMyAdmin SQL Dump
-- version 4.2.0-dev
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2014 at 04:05 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `m_nilai_tanaman`
--

INSERT INTO `m_nilai_tanaman` (`id`, `kode_tanaman`, `kriteria`, `min_value`, `max_value`, `score`) VALUES
(1, 'PADI', 'suhu', 15, 20, 100),
(2, 'PADI', 'drainase', 2, 3, 100),
(3, 'PADI', 'tekstur', 1, 2, 100),
(4, 'PADI', 'kedalaman', 1, 5, 100),
(5, 'PADI', 'ph', 1, 5, 100),
(6, 'PADI', 'p205', 1, 2, 100),
(7, 'PADI', 'k20', 1, 2, 100),
(8, 'PADI', 'salinitas', 1, 5, 100),
(9, 'PADI', 'kemiringan', 5, 1, 100),
(10, 'PADI', 'batuan', 1, 5, 100),
(11, 'PADI', 'singkapan', 1, 5, 100),
(12, 'JAGUNG', 'suhu', 5, 10, 40),
(13, 'JAGUNG', 'drainase', 4, 5, 40),
(14, 'JAGUNG', 'tekstur', 3, 4, 40),
(15, 'JAGUNG', 'kedalaman', 10, 20, 40),
(16, 'JAGUNG', 'ph', 5, 5, 40),
(17, 'JAGUNG', 'p205', 4, 5, 40),
(18, 'JAGUNG', 'k20', 4, 5, 40),
(19, 'JAGUNG', 'salinitas', 1, 2, 40),
(20, 'JAGUNG', 'kemiringan', 2, 1, 40),
(21, 'JAGUNG', 'batuan', 1, 2, 40),
(22, 'JAGUNG', 'singkapan', 1, 2, 40),
(23, 'PADI', 'suhu', 21, 30, 60),
(24, 'PADI', 'drainase', 3, 3, 60),
(25, 'PADI', 'tekstur', 3, 3, 60),
(26, 'PADI', 'kedalaman', 9, 12, 60),
(27, 'PADI', 'ph', 2, 3, 60),
(28, 'PADI', 'p205', 3, 4, 60),
(29, 'PADI', 'k20', 1, 1, 60),
(30, 'PADI', 'salinitas', 12, 15, 60),
(31, 'PADI', 'kemiringan', 15, 12, 60),
(32, 'PADI', 'batuan', 12, 15, 60),
(33, 'PADI', 'singkapan', 12, 15, 60),
(34, 'JAGUNG', 'suhu', 11, 30, 100),
(35, 'JAGUNG', 'drainase', 2, 3, 100),
(36, 'JAGUNG', 'tekstur', 1, 3, 100),
(37, 'JAGUNG', 'kedalaman', 5, 10, 100),
(38, 'JAGUNG', 'ph', 20, 30, 100),
(39, 'JAGUNG', 'p205', 1, 1, 100),
(40, 'JAGUNG', 'k20', 1, 2, 100),
(41, 'JAGUNG', 'salinitas', 6, 9, 100),
(42, 'JAGUNG', 'kemiringan', 8, 7, 100),
(43, 'JAGUNG', 'batuan', 5, 8, 100),
(44, 'JAGUNG', 'singkapan', 3, 4, 100),
(45, 'KEDELAI', 'suhu', 10, 15, 60),
(46, 'KEDELAI', 'kedalaman', 5, 10, 60),
(47, 'KEDELAI', 'ph', 5, 10, 60),
(48, 'KEDELAI', 'salinitas', 5, 10, 60),
(49, 'KEDELAI', 'kemiringan', 5, 1, 60),
(50, 'KEDELAI', 'batuan', 3, 6, 60),
(51, 'KEDELAI', 'singkapan', 2, 9, 60),
(52, 'Kelapa Saw', 'suhu', 1, 5, 40),
(53, 'Kelapa Saw', 'drainase', 5, 5, 40),
(54, 'Kelapa Saw', 'tekstur', 4, 4, 40),
(55, 'Kelapa Saw', 'kedalaman', 1, 2, 40),
(56, 'Kelapa Saw', 'ph', 1, 2, 40),
(57, 'Kelapa Saw', 'p205', 4, 5, 40),
(58, 'Kelapa Saw', 'k20', 4, 5, 40),
(59, 'Kelapa Saw', 'salinitas', 2, 3, 40),
(60, 'Kelapa Saw', 'kemiringan', 3, 2, 40),
(61, 'Kelapa Saw', 'batuan', 2, 3, 40),
(62, 'Kelapa Saw', 'singkapan', 2, 3, 40);

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
('003', 'KEDELAI', 'KEDELAI'),
('009', 'Kelapa Sawit', 'Kelapa');

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
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
