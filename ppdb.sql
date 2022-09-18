-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2020 at 08:46 
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `level` varchar(5) NOT NULL,
  `id_sessions` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`, `id_sessions`) VALUES
(1, 'ppdb', 'f8f052b1787b968105cb21793b15e57e', 'admin', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `kode_mapel` varchar(15) NOT NULL,
  `mapel` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `mapel`) VALUES
('bindo', 'BAHASA INDONESIA'),
('bing', 'BAHASA INGGRIS'),
('ipa', 'IPA'),
('mtk', 'MATEMATIKA');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int(11) NOT NULL,
  `kode_pendaftaran` varchar(50) NOT NULL,
  `mapel` varchar(15) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `kode_pendaftaran` varchar(120) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `asal_sekolah` varchar(125) NOT NULL,
  `tmp_lahir` varchar(125) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `jurusan` varchar(35) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nilai_wawancara` varchar(25) NOT NULL,
  `nilai_bindo` varchar(5) NOT NULL,
  `nilai_mtk` varchar(5) NOT NULL,
  `nilai_ipa` varchar(5) NOT NULL,
  `nilai_bing` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`kode_pendaftaran`, `nama_lengkap`, `nis`, `no_hp`, `alamat`, `asal_sekolah`, `tmp_lahir`, `tgl_lahir`, `jurusan`, `jk`, `agama`, `status`, `nilai_wawancara`, `nilai_bindo`, `nilai_mtk`, `nilai_ipa`, `nilai_bing`) VALUES
('PPDBMRF-001', 'rizal', '1810857', '0888', 'glempanng', 'smp n 1 pekuncen', 'purworejo', '27 november 2003', 'rpl', 'laki-laki', 'Islam', 'diterima', '', '0', '0', '0', '0'),
('PPDBMRF-002', 't', 't', 't', 't', 't', 't', 't', 'tav', 'laki-laki', 'Islam', '', '', '0', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`kode_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
