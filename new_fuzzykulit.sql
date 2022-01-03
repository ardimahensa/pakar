-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 06:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_fuzzykulit`
--

-- --------------------------------------------------------

--
-- Table structure for table `ciri`
--

CREATE TABLE `ciri` (
  `id_ciri` int(11) NOT NULL,
  `kd_ciri` varchar(5) DEFAULT NULL,
  `ciri_ciri` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ciri`
--

INSERT INTO `ciri` (`id_ciri`, `kd_ciri`, `ciri_ciri`) VALUES
(20, 'C1', 'apakah anda berfikir untuk bermain game online sep'),
(21, 'C2', 'apakah anda menghabiskan waktu luang untuk bermain'),
(22, 'C3', 'diwaktu pakan saja anda bermain game online ?'),
(23, 'C4', 'apakah anda senang bila memenangkan permainan game'),
(24, 'C5', 'apakah jumlah waktu anda bermain game online mempe');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `gejala` varchar(100) DEFAULT NULL,
  `kd_gejala` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`, `kd_gejala`) VALUES
(13, 'apakah anda merasa ketagihan bermain game online ?', 'G1'),
(14, 'apakah anda merasa  terancam kehilangan kesempatan pendidikan atau pekerjaan karena kebiasaan game o', 'G2'),
(15, 'apakah waktu bermain game online anda setiap hari bertambah ?', 'G3'),
(16, 'ketika anda bermain game, apakah Anda memperdulikan kebutuhan anda sendiri misalnya makan ?', 'G4'),
(17, 'apakah hubungan sosial anda berkurang karena kebiasaan bermain game online ?', 'G5');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `penyakit` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `nama`, `penyakit`) VALUES
(13, 'nov', 'Penyakit Kecanduan Online para'),
(14, 'nov', 'Penyakit Kecanduan Online para'),
(15, 'nov', 'Penyakit Kecanduan Online para'),
(16, 'nov', 'Penyakit Kecanduan Online para'),
(17, 'nov', 'Penyakit Tidak Kecanduan Game '),
(18, 'nov', 'Tidak Kecanduan Game Online'),
(19, 'nov', 'Tidak Kecanduan Game Online'),
(20, 'nov', 'Tidak Kecanduan Game Online'),
(21, 'nov', 'Tidak Kecanduan Game Online'),
(22, 'nov', 'Tidak Kecanduan Game Online'),
(23, 'nov', 'Tidak Kecanduan Game Online'),
(24, 'nov', 'Kecanduan Game Online parah'),
(25, 'nov', 'Kecanduan Game Online Sedang'),
(26, 'nov', 'Kecanduan Game Online Sedang'),
(27, 'nov', 'Kecanduan Game Online parah'),
(28, 'nov', 'Tidak Kecanduan Game Online'),
(29, 'nov', 'Tidak Kecanduan Game Online'),
(30, 'nov', 'Kecanduan Game Online Sedang'),
(31, 'nov', 'Kecanduan Game Online Sedang'),
(32, 'nov', 'Kecanduan Game Online Sedang');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `kd_penyakit` varchar(3) DEFAULT NULL,
  `penyakit` varchar(50) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `solusi` text DEFAULT NULL,
  `g1` varchar(10) DEFAULT NULL,
  `g2` varchar(10) DEFAULT NULL,
  `g3` varchar(10) DEFAULT NULL,
  `g4` varchar(10) DEFAULT NULL,
  `g5` varchar(10) DEFAULT NULL,
  `c1` varchar(10) DEFAULT NULL,
  `c2` varchar(10) DEFAULT NULL,
  `c3` varchar(10) DEFAULT NULL,
  `c4` varchar(10) DEFAULT NULL,
  `c5` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kd_penyakit`, `penyakit`, `gambar`, `solusi`, `g1`, `g2`, `g3`, `g4`, `g5`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(8, 'P1', 'Kecanduan Game Online sangat parah', 'kecanduan parah.png', 'Siap siap jadi nolep lu, tiati aja', 'G1.1', 'G2.1', 'G3.1', 'G4.1', 'G5.1', 'C1.1', 'C2.1', 'C3.1', 'C4.1', 'C5.1'),
(9, 'P2', 'Tidak Kecanduan Game Online', 'tidakkecanduan3.png', 'Nah gitu bagus', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada'),
(10, 'P3', 'Kecanduan Game Online Sedang', 'kecanduan2.png', 'Masih Lumayan, jangan sampe nambah parah', 'G1.2', 'G2.2', 'G3.2', 'G4.2', 'G5.2', 'C1.2', 'C2.2', 'C3.2', 'C4.2', 'C5.2'),
(11, 'P4', 'Kecanduan Game Online Sedang', 'kecanduan2.png', 'Masih Lumayan, jangan sampe nambah parah', 'G1.2', 'G2.2', 'G3.2', 'G4.2', 'G5.2', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada'),
(12, 'P5', 'Kecanduan Game Online Sedang', 'kecanduan2.png', 'Masih Lumayan, jangan sampe nambah parah', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'C1.2', 'C2.2', 'C3.2', 'C4.2', 'C5.2'),
(13, 'P6', 'Kecanduan Game Online parah', 'penyakit_1641144898', 'Kurangin Main Gamenya, coba main keluar sama temen', 'G1.1', 'G2.1', 'G3.1', 'G4.1', 'G5.1', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada'),
(14, 'P7', 'Kecanduan Game Online parah', 'kecanduan1.png', 'Kurangin Main Gamenya, coba main keluar sama temen', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'C1.1', 'C2.1', 'C3.1', 'C4.1', 'C5.1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(2, 'nov', '1', '1', 'user'),
(3, 'Administrator', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `varciri`
--

CREATE TABLE `varciri` (
  `id_varciri` int(11) NOT NULL,
  `kd_varciri` varchar(5) DEFAULT NULL,
  `varciri` varchar(50) DEFAULT NULL,
  `kd_ciri` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `varciri`
--

INSERT INTO `varciri` (`id_varciri`, `kd_varciri`, `varciri`, `kd_ciri`) VALUES
(55, 'C1.1', 'Iya', 'C1'),
(56, 'C1.2', 'Lumayan', 'C1'),
(57, 'C2.1', 'Iya', 'C2'),
(58, 'C2.2', 'Lumayan', 'C2'),
(59, 'C3.1', 'Iya', 'C3'),
(60, 'C3.2', 'Lumayan', 'C3'),
(61, 'C4.1', 'Iya', 'C4'),
(62, 'C4.2', 'Lumayan', 'C4'),
(63, 'C5.1', 'Iya', 'C5'),
(64, 'C5.2', 'Lumayan', 'C5');

-- --------------------------------------------------------

--
-- Table structure for table `vargejala`
--

CREATE TABLE `vargejala` (
  `id_vargejala` int(11) NOT NULL,
  `kd_vargejala` varchar(5) DEFAULT NULL,
  `vargejala` varchar(50) DEFAULT NULL,
  `kd_gejala` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vargejala`
--

INSERT INTO `vargejala` (`id_vargejala`, `kd_vargejala`, `vargejala`, `kd_gejala`) VALUES
(38, 'G1.1', 'iya', 'G1'),
(39, 'G1.2', 'Lumayan', 'G1'),
(40, 'G2.1', 'Iya', 'G2'),
(41, 'G2.2', 'Lumayan', 'G2'),
(42, 'G3.1', 'Iya', 'G3'),
(43, 'G3.2', 'Lumayan', 'G3'),
(44, 'G4.1', 'Iya', 'G4'),
(45, 'G4.2', 'Lumayan', 'G4'),
(46, 'G5.1', 'Iya', 'G5'),
(47, 'G5.2', 'Lumayan', 'G5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ciri`
--
ALTER TABLE `ciri`
  ADD PRIMARY KEY (`id_ciri`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `varciri`
--
ALTER TABLE `varciri`
  ADD PRIMARY KEY (`id_varciri`);

--
-- Indexes for table `vargejala`
--
ALTER TABLE `vargejala`
  ADD PRIMARY KEY (`id_vargejala`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ciri`
--
ALTER TABLE `ciri`
  MODIFY `id_ciri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `varciri`
--
ALTER TABLE `varciri`
  MODIFY `id_varciri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `vargejala`
--
ALTER TABLE `vargejala`
  MODIFY `id_vargejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
