--
-- Database: `new_fuzzykulit`
--
CREATE DATABASE IF NOT EXISTS `new_fuzzykulit` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `new_fuzzykulit`;

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
(1, 'C1', 'Kulit bersisik'),
(2, 'C2', 'luka panas'),
(3, 'C3', 'melepuh berair'),
(4, 'C4', 'pembesaran kelenjar limfa'),
(5, 'C5', 'benjolan'),
(6, 'C6', 'bernanah'),
(7, 'C7', 'bintik merah'),
(8, 'C8', 'kulit bintik'),
(9, 'C9', 'kulit lecet'),
(10, 'C10', 'keropeng'),
(11, 'C11', 'bercak putih'),
(12, 'C11', 'bercak putih'),
(13, 'C12', 'berbentuk lingkaran'),
(14, 'C13', 'Bercak merah'),
(15, 'C14', 'luka melebar'),
(16, 'C15', 'kulit berdarah'),
(17, 'C16', 'tahi lalat membesar'),
(18, 'C17', 'pembengkakan'),
(19, 'C18', 'kulit kering');

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
(1, 'Kulit kemerahan', 'G1'),
(2, 'Kulit gatal', 'G2'),
(3, 'Deman', 'G3'),
(4, 'Lemas', 'G4'),
(5, 'Nyeri', 'G5'),
(6, 'Batuk kering', 'G6'),
(7, 'Pilek', 'G7'),
(8, 'Sakit tenggorokan', 'G8'),
(9, 'Radang Mata', 'G9'),
(10, 'Kulit menebal', 'G10'),
(11, 'Tahi lalat berubah warna', 'G11'),
(12, 'Luka Terasa Sakit', 'G12');

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
(1, 'Boy Kurniawan', 'Penyakit Eksim'),
(2, 'Administrator', 'Penyakit Eksim'),
(3, 'Administrator', 'Penyakit Eksim'),
(4, 'Administrator', 'Penyakit Eksim'),
(5, 'Administrator', 'Penyakit Eksim'),
(6, 'Administrator', 'Penyakit Eksim'),
(7, 'Boy Kurniawan', 'Penyakit Eksim'),
(8, 'Boy Kurniawan', 'Penyakit Eksim'),
(9, 'Boy Kurniawan', 'Penyakit Eksim'),
(10, 'Boy Kurniawan', 'Penyakit Eksim');

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
  `g6` varchar(10) DEFAULT NULL,
  `g7` varchar(10) DEFAULT NULL,
  `g8` varchar(10) DEFAULT NULL,
  `g9` varchar(10) DEFAULT NULL,
  `g10` varchar(10) DEFAULT NULL,
  `g11` varchar(10) DEFAULT NULL,
  `g12` varchar(10) DEFAULT NULL,
  `c1` varchar(10) DEFAULT NULL,
  `c2` varchar(10) DEFAULT NULL,
  `c3` varchar(10) DEFAULT NULL,
  `c4` varchar(10) DEFAULT NULL,
  `c5` varchar(10) DEFAULT NULL,
  `c6` varchar(10) DEFAULT NULL,
  `c7` varchar(10) DEFAULT NULL,
  `c8` varchar(10) DEFAULT NULL,
  `c9` varchar(10) DEFAULT NULL,
  `c10` varchar(10) DEFAULT NULL,
  `c11` varchar(10) DEFAULT NULL,
  `c12` varchar(10) DEFAULT NULL,
  `c13` varchar(10) DEFAULT NULL,
  `c14` varchar(10) DEFAULT NULL,
  `c15` varchar(10) DEFAULT NULL,
  `c16` varchar(10) DEFAULT NULL,
  `c17` varchar(10) DEFAULT NULL,
  `c18` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kd_penyakit`, `penyakit`, `gambar`, `solusi`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `g9`, `g10`, `g11`, `g12`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `c11`, `c12`, `c13`, `c14`, `c15`, `c16`, `c17`, `c18`) VALUES
(2, 'P1', 'Eksim', 'penyakit_1507051434.jpg', 'Solusi lainnya yang lebih praktis untuk mengobati eksim adalah Qnc Jelly Gamat. Dengan herbal ini, anda tidak perlu repot-repot untuk membuat ramuan, karena anda hanya perlu mengoleskannya saja pada bagian kulit yang terkena eksim.', 'G1.2', 'G2.1', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'C1.2', 'C2.2', 'C3.1', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada'),
(3, 'P2', 'Herpes', NULL, NULL, 'tidak ada', 'G2.1', 'G3.1', 'G4.2', 'G5.2', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'C4.1', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada'),
(4, 'P3', 'Bisul', NULL, NULL, 'G1.2', 'tidak ada', 'G3.2', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'C2.2', 'tidak ada', 'tidak ada', 'C5.1', 'C6.1', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada'),
(5, 'P4', 'Campak', 'penyakit_15070516242.png', 'Minum banyak air untuk mencegah dehidrasi.\r\nBanyak istirahat dan hindari sinar matahari selama mata masih sensitif terhadap cahaya.\r\nMinum obat penurun demam dan pereda sakit. Jangan berikan aspirin jika anak Anda berusia kurang dari 16 tahun', 'G1.2', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'G6.2', 'G7.3', 'G8.2', 'G9.2', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'C7.1', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada'),
(6, 'P5', 'Kudis', 'penyakit_1507051556.jpg', 'Sifat antiseptic dan anti inflamasi yang terdapat dalam kunyit, sangat berguna untuk mengobati kudis dengan cepat. Caranya, buatlah pasta lembut dengan menumbuk rimpangnya. Campur dengan air lemon, oleskan pada kulit yang timbul kudis.', 'G1.2', 'G2.1', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'C8.2', 'C9.2', 'C10.2', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada');

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
(2, 'Boy Kurniawan', 'boy123', '1', 'user'),
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
(1, 'C1.1', 'parah', 'C1'),
(2, 'C1.2', 'sedang', 'C1'),
(3, 'C1.3', 'ringan', 'C1'),
(4, 'C2.1', 'Parah', 'C2'),
(5, 'C2.2', 'sedang', 'C2'),
(6, 'C2.3', 'ringan', 'C2'),
(7, 'C3.1', 'parah', 'C3'),
(8, 'C3.2', 'sedang', 'C3'),
(9, 'C3.3', 'ringan', 'C3'),
(10, 'C4.1', 'besar', 'C4'),
(11, 'C4.2', 'sedang', 'C4'),
(12, 'C4.3', 'kecil', 'C4'),
(13, 'C5.1', 'besar', 'C5'),
(14, 'C5.2', 'sedang', 'C5'),
(15, 'C5.3', 'kecil', 'C5'),
(16, 'C6.1', 'banyak', 'C6'),
(17, 'C6.2', 'sedang', 'C6'),
(18, 'C6.3', 'sedikit', 'C6'),
(19, 'C7.1', 'banyak', 'C7'),
(20, 'C7.2', 'sedang', 'C7'),
(21, 'C7.3', 'sedikit', 'C7'),
(22, 'C8.1', 'banyak', 'C8'),
(23, 'C8.2', 'sedang', 'C8'),
(24, 'C8.3', 'sedikit', 'C8'),
(25, 'C9.1', 'parah', 'C9'),
(26, 'C9.2', 'sedang', 'C9'),
(27, 'C9.3', 'ringan', 'C9'),
(28, 'C10.1', 'parah', 'C10'),
(29, 'C10.2', 'sedang', 'C10'),
(30, 'C10.3', 'ringan', 'C10'),
(31, 'C11.1', 'parah', 'C11'),
(32, 'C11.2', 'sedang', 'C11'),
(33, 'C11.3', 'ringan', 'C11'),
(34, 'C12.1', 'besar', 'C12'),
(35, 'C12.2', 'sedang', 'C12'),
(36, 'C12.3', 'kecil', 'C12'),
(37, 'C13.1', 'parah', 'C13'),
(38, 'C13.2', 'sedang', 'C13'),
(39, 'C13.3', 'ringan', 'C13'),
(40, 'C14.1', 'parah', 'C14'),
(41, 'C14.2', 'sedang', 'C14'),
(42, 'C14.3', 'ringan', 'C14'),
(43, 'C15.1', 'parah', 'C15'),
(44, 'C15.2', 'sedang', 'C15'),
(45, 'C15.3', 'ringan', 'C15'),
(46, 'C16.1', 'parah', 'C16'),
(47, 'C16.2', 'sedang', 'C16'),
(48, 'C16.3', 'ringan', 'C16'),
(49, 'C17.1', 'parah', 'C17'),
(50, 'C17.2', 'sedang', 'C17'),
(51, 'C17.3', 'ringan', 'C17'),
(52, 'C18.1', 'parah', 'C18'),
(53, 'C18.2', 'sedang', 'C18'),
(54, 'C18.3', 'ringan', 'C18');

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
(1, 'G1.1', 'Merah merona', 'G1'),
(2, 'G1.2', 'merah sedang', 'G1'),
(3, 'G1.3', 'merah biasa', 'G1'),
(4, 'G2.1', 'Parah', 'G2'),
(5, 'G2.2', 'sedang', 'G2'),
(6, 'G2.3', 'ringan', 'G2'),
(7, 'G3.1', 'tinggi', 'G3'),
(8, 'G3.2', 'sedang', 'G3'),
(9, 'G3.3', 'rendah', 'G3'),
(10, 'G4.1', 'parah', 'G4'),
(11, 'G4.2', 'sedang', 'G4'),
(12, 'G4.3', 'ringan', 'G4'),
(13, 'G5.1', 'parah', 'G5'),
(14, 'G5.2', 'sedang', 'G5'),
(15, 'G5.3', 'Ringan', 'G5'),
(16, 'G6.1', 'Parah', 'G6'),
(17, 'G6.2', 'sedang', 'G6'),
(18, 'G6.3', 'ringan', 'G6'),
(19, 'G7.1', 'parah', 'G7'),
(20, 'G7.2', 'sedang', 'G7'),
(21, 'G7.3', 'ringan', 'G7'),
(22, 'G8.1', 'parah', 'G8'),
(23, 'G8.2', 'sedang', 'G8'),
(24, 'G8.3', 'ringan', 'G8'),
(25, 'G9.1', 'parah', 'G9'),
(26, 'G9.2', 'sedang', 'G9'),
(27, 'G9.3', 'ringan', 'G9'),
(28, 'G10.1', 'parah', 'G10'),
(29, 'G10.2', 'sedang', 'G10'),
(30, 'G10.3', 'ringan', 'G10'),
(31, 'G11.1', 'parah', 'G11'),
(32, 'G11.2', 'sedang', 'G11'),
(33, 'G11.3', 'ringan', 'G11'),
(34, 'G11.3', 'ringan', 'G11'),
(35, 'G12.1', 'parah', 'G12'),
(36, 'G12.2', 'sedang', 'G12'),
(37, 'G12.3', 'ringan', 'G12');

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
  MODIFY `id_ciri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `varciri`
--
ALTER TABLE `varciri`
  MODIFY `id_varciri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `vargejala`
--
ALTER TABLE `vargejala`
  MODIFY `id_vargejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
