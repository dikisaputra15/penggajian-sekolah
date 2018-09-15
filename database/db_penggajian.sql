-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 08:15 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE IF NOT EXISTS `tb_absen` (
  `kd_absen` int(10) NOT NULL,
  `kd_guru` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `keterangan` enum('hadir','sakit','alfa','izin') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absen`
--

INSERT INTO `tb_absen` (`kd_absen`, `kd_guru`, `tgl`, `keterangan`) VALUES
(1, 1, '2018-04-10', 'hadir'),
(2, 7, '2018-04-10', 'hadir'),
(3, 6, '2018-04-10', 'izin'),
(4, 2, '2018-04-11', 'izin'),
(7, 6, '2018-04-11', 'sakit'),
(8, 7, '2018-04-11', 'alfa'),
(9, 7, '2018-05-08', 'hadir'),
(10, 2, '2018-05-08', 'hadir'),
(11, 6, '2018-05-08', 'hadir'),
(12, 7, '2018-07-11', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE IF NOT EXISTS `tb_guru` (
  `kd_guru` int(10) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `status` enum('GTY','GTT') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`kd_guru`, `nama_guru`, `jabatan`, `status`) VALUES
(2, 'bojes junior', 'Kepala sekolah', 'GTY'),
(6, 'peja sanjaya', 'guru honor', 'GTT'),
(7, 'diki saputra', 'guru', 'GTY');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE IF NOT EXISTS `tb_jabatan` (
  `kd_jabatan` int(10) NOT NULL,
  `nama_jabatan` varchar(40) NOT NULL,
  `gaji_pokok` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`kd_jabatan`, `nama_jabatan`, `gaji_pokok`) VALUES
(1, 'Guru Tidak Tetap (GTT)', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tb_pembayaran` (
  `kd_pembayaran` int(10) NOT NULL,
  `kd_guru` int(10) NOT NULL,
  `kd_jabatan` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `uang_honor` int(15) NOT NULL,
  `uang_insentif_gty` int(15) NOT NULL,
  `uang_insentif_ekstra` int(15) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`kd_pembayaran`, `kd_guru`, `kd_jabatan`, `tgl`, `uang_honor`, `uang_insentif_gty`, `uang_insentif_ekstra`, `keterangan`) VALUES
(7, 2, 1, '2018-07-06', 200000, 200000, 200000, 'pembayaran bulan juli 2018'),
(8, 6, 1, '2018-07-06', 200000, 200000, 200000, 'pembayaran bulan juli 2018');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `kd_user` int(10) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('guru','tu','kepala sekolah') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kd_user`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(2, 'tu', 'tu', 'tu', 'tu'),
(4, 'guru', 'guru', 'guru', 'guru'),
(5, 'kepala sekolah', 'kepalasekolah', 'kepalasekolah', 'kepala sekolah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`kd_absen`),
  ADD KEY `kd_guru` (`kd_guru`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`kd_guru`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`kd_pembayaran`),
  ADD KEY `kd_guru` (`kd_guru`),
  ADD KEY `kd_jabatan` (`kd_jabatan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `kd_absen` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `kd_guru` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `kd_jabatan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `kd_pembayaran` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `kd_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`kd_guru`) REFERENCES `tb_guru` (`kd_guru`),
  ADD CONSTRAINT `tb_pembayaran_ibfk_2` FOREIGN KEY (`kd_jabatan`) REFERENCES `tb_jabatan` (`kd_jabatan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
