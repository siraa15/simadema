-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 12:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `formkonseptema`
--

CREATE TABLE `formkonseptema` (
  `id_konseptema` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `id_substansi` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tanggaldisusun` date NOT NULL,
  `abstraksi` longtext DEFAULT NULL,
  `alur` longtext DEFAULT NULL,
  `statusapprove` varchar(255) NOT NULL,
  `tanggaldisetujui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formkonseptema`
--

INSERT INTO `formkonseptema` (`id_konseptema`, `iduser`, `id_substansi`, `tema`, `tanggaldisusun`, `abstraksi`, `alur`, `statusapprove`, `tanggaldisetujui`) VALUES
(1, 3, 1, 'KTP dan KK', '2022-01-12', '<p>KTP dan KK</p>\r\n', '<p>KTP dan KK</p>\r\n', 'approved', '2022-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `formpemetaanhasil`
--

CREATE TABLE `formpemetaanhasil` (
  `id_pemetaanhasil` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `id_substansi` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tanggaldisusun` date NOT NULL,
  `isi` longtext NOT NULL,
  `statusapprove` varchar(255) NOT NULL,
  `tanggaldisetujui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `formpemetaaninformasi`
--

CREATE TABLE `formpemetaaninformasi` (
  `id_pemetaaninformasi` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `id_substansi` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tanggaldisusun` date NOT NULL,
  `isi` longtext NOT NULL,
  `statusapprove` varchar(255) NOT NULL,
  `tanggaldisetujui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `formpemetaanisupelayananpublik`
--

CREATE TABLE `formpemetaanisupelayananpublik` (
  `id_pemetaanisu` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `id_substansi` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tanggaldisusun` date NOT NULL,
  `isi` longtext NOT NULL,
  `statusapprove` varchar(255) NOT NULL,
  `tanggaldisetujui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formpemetaanisupelayananpublik`
--

INSERT INTO `formpemetaanisupelayananpublik` (`id_pemetaanisu`, `iduser`, `id_substansi`, `tema`, `tanggaldisusun`, `isi`, `statusapprove`, `tanggaldisetujui`) VALUES
(1, 3, 1, 'tes1', '2022-01-11', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>tes</td>\r\n			<td>tes</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 'wait kasisten', '0000-00-00'),
(2, 3, 1, 'Antara Pelayanan Publik Mengurus KTP dan mengurus Kartu Keluarga di Provinsi Kalimantan Selatan ', '2022-01-11', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>KTP</td>\r\n			<td>Kartu Keluarga</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 'wait kasisten', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `formpemetaanlaporan`
--

CREATE TABLE `formpemetaanlaporan` (
  `id_pemetaanlaporan` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `id_substansi` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tanggaldisusun` date NOT NULL,
  `latarbelakang` longtext NOT NULL,
  `pemetaandatalaporan` longtext NOT NULL,
  `hasilpemetaandatalaporan` longtext NOT NULL,
  `statusapprove` varchar(255) NOT NULL,
  `tanggaldisetujui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formpemetaanlaporan`
--

INSERT INTO `formpemetaanlaporan` (`id_pemetaanlaporan`, `iduser`, `id_substansi`, `tema`, `tanggaldisusun`, `latarbelakang`, `pemetaandatalaporan`, `hasilpemetaandatalaporan`, `statusapprove`, `tanggaldisetujui`) VALUES
(1, 3, 1, 'tes1', '2022-01-11', '<p>tes1</p>\r\n', '<p>tes1</p>\r\n', '<p>&nbsp;&nbsp;&nbsp;&nbsp;tes1</p>\r\n', 'wait kasisten', '0000-00-00'),
(2, 1, 1, 'Tanah Adalah Bagian tentang Kerak Bumi Yang tersusun dari mineral dan bahan organik', '2022-01-12', '<p>igikgk</p>\r\n', '<p>kjgk</p>\r\n', '<p>kjhkh</p>\r\n', 'approved', '2022-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `formpemetaanregulasi`
--

CREATE TABLE `formpemetaanregulasi` (
  `id_pemetaanregulasi` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `id_substansi` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tanggaldisusun` date NOT NULL,
  `isi` longtext NOT NULL,
  `statusapprove` varchar(255) NOT NULL,
  `tanggaldisetujui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formpemetaanregulasi`
--

INSERT INTO `formpemetaanregulasi` (`id_pemetaanregulasi`, `iduser`, `id_substansi`, `tema`, `tanggaldisusun`, `isi`, `statusapprove`, `tanggaldisetujui`) VALUES
(1, 1, 9, 'Jamsostek', '2022-01-12', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 'approved', '2022-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `substansi`
--

CREATE TABLE `substansi` (
  `id_substansi` int(11) NOT NULL,
  `jenis_substansi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `substansi`
--

INSERT INTO `substansi` (`id_substansi`, `jenis_substansi`) VALUES
(1, 'Administrasi Kependudukan'),
(2, 'Agraria'),
(3, 'Air'),
(4, 'Asuransi'),
(5, 'Bea dan Cukai'),
(6, 'Energi dan Kelistrikan'),
(7, 'Hak Kekayaan Intelektual'),
(8, 'Hak Sipil dan Politik'),
(9, 'Jaminan Sosial'),
(10, 'Keagamaan'),
(11, 'Kedaruratan'),
(12, 'Kehutanan'),
(13, 'Keimigrasian'),
(14, 'Kejaksaan'),
(15, 'Kepolisian'),
(16, 'Kesehatan'),
(17, 'Kesejahteraan Sosial'),
(18, 'Ketenagakerjaan'),
(19, 'Koperasi'),
(20, 'Lembaga Permasyarakatan'),
(21, 'Lingkungan Hidup'),
(22, 'Pajak'),
(23, 'Pedesaan'),
(24, 'Pegadaian'),
(25, 'Penanaman Modal'),
(26, 'Pendidikan'),
(27, 'Pengadaan Barang, Jasa, dan Lelang'),
(28, 'Peradilan'),
(29, 'Perbankan'),
(30, 'Perdagangan, Industri dan Logistik'),
(31, 'Perhubungan dan Infrastruktur'),
(32, 'Perikanan'),
(33, 'Perizinan'),
(34, 'Permukiman dan Perumahan'),
(35, 'Pertanahan'),
(36, 'Pertambangan'),
(37, 'Pertanian dan Pangan'),
(38, 'Telekomunikasi dan Informatika'),
(39, 'Transmigrasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Asisten Muda','Asisten Pratama','Kepala Perwakilan','Admin') NOT NULL,
  `penyetuju` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama_lengkap`, `email`, `password`, `level`, `penyetuju`, `jabatan`) VALUES
(1, 'Maulana Achmadi, S.Sos., M.A.P.', 'pencegahan01@kalsel.com', '21232f297a57a5a743894a0e4a801fc3', 'Asisten Muda', 'Hadi Rahman, S.I.P., MPA (Mgmt)', 'Kepala Perwakilan Ombudsman RI Provinsi Kalimantan Selatan'),
(2, 'Hadi Rahman, S.I.P., MPA (Mgmt)', 'kepalaperwakilan@kalsel.com', '21232f297a57a5a743894a0e4a801fc3', 'Kepala Perwakilan', '', ''),
(3, 'Rujalinor, S.Pd.I., M.H.', 'pencegahan02@kalsel.com', '21232f297a57a5a743894a0e4a801fc3', 'Asisten Pratama', 'Maulana Achmadi, S.Sos., M.A.P.', 'Kepala Keasistenan Pencegahan Maladminstrasi'),
(4, 'Rizki Arrida, S.S.', 'pencegahan03@kalsel.com', '21232f297a57a5a743894a0e4a801fc3', 'Asisten Pratama', 'Maulana Achmadi, S.Sos., M.A.P.', 'Kepala Keasistenan Pencegahan Maladministrasi'),
(5, 'admin', 'admin@kalsel.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formkonseptema`
--
ALTER TABLE `formkonseptema`
  ADD PRIMARY KEY (`id_konseptema`),
  ADD KEY `id_substansi` (`id_substansi`),
  ADD KEY `id_user` (`iduser`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `formpemetaanhasil`
--
ALTER TABLE `formpemetaanhasil`
  ADD PRIMARY KEY (`id_pemetaanhasil`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `id_substansi` (`id_substansi`);

--
-- Indexes for table `formpemetaaninformasi`
--
ALTER TABLE `formpemetaaninformasi`
  ADD PRIMARY KEY (`id_pemetaaninformasi`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `id_substansi` (`id_substansi`);

--
-- Indexes for table `formpemetaanisupelayananpublik`
--
ALTER TABLE `formpemetaanisupelayananpublik`
  ADD PRIMARY KEY (`id_pemetaanisu`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `id_substansi` (`id_substansi`);

--
-- Indexes for table `formpemetaanlaporan`
--
ALTER TABLE `formpemetaanlaporan`
  ADD PRIMARY KEY (`id_pemetaanlaporan`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `id_substansi` (`id_substansi`);

--
-- Indexes for table `formpemetaanregulasi`
--
ALTER TABLE `formpemetaanregulasi`
  ADD PRIMARY KEY (`id_pemetaanregulasi`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `id_substansi` (`id_substansi`);

--
-- Indexes for table `substansi`
--
ALTER TABLE `substansi`
  ADD PRIMARY KEY (`id_substansi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formkonseptema`
--
ALTER TABLE `formkonseptema`
  MODIFY `id_konseptema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formpemetaanhasil`
--
ALTER TABLE `formpemetaanhasil`
  MODIFY `id_pemetaanhasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formpemetaaninformasi`
--
ALTER TABLE `formpemetaaninformasi`
  MODIFY `id_pemetaaninformasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formpemetaanisupelayananpublik`
--
ALTER TABLE `formpemetaanisupelayananpublik`
  MODIFY `id_pemetaanisu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `formpemetaanlaporan`
--
ALTER TABLE `formpemetaanlaporan`
  MODIFY `id_pemetaanlaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `formpemetaanregulasi`
--
ALTER TABLE `formpemetaanregulasi`
  MODIFY `id_pemetaanregulasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `substansi`
--
ALTER TABLE `substansi`
  MODIFY `id_substansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `formkonseptema`
--
ALTER TABLE `formkonseptema`
  ADD CONSTRAINT `formkonseptema_ibfk_1` FOREIGN KEY (`id_substansi`) REFERENCES `substansi` (`id_substansi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formkonseptema_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `formpemetaanhasil`
--
ALTER TABLE `formpemetaanhasil`
  ADD CONSTRAINT `formpemetaanhasil_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formpemetaanhasil_ibfk_2` FOREIGN KEY (`id_substansi`) REFERENCES `substansi` (`id_substansi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `formpemetaaninformasi`
--
ALTER TABLE `formpemetaaninformasi`
  ADD CONSTRAINT `formpemetaaninformasi_ibfk_1` FOREIGN KEY (`id_substansi`) REFERENCES `substansi` (`id_substansi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formpemetaaninformasi_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `formpemetaanisupelayananpublik`
--
ALTER TABLE `formpemetaanisupelayananpublik`
  ADD CONSTRAINT `formpemetaanisupelayananpublik_ibfk_1` FOREIGN KEY (`id_substansi`) REFERENCES `substansi` (`id_substansi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formpemetaanisupelayananpublik_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Constraints for table `formpemetaanlaporan`
--
ALTER TABLE `formpemetaanlaporan`
  ADD CONSTRAINT `formpemetaanlaporan_ibfk_2` FOREIGN KEY (`id_substansi`) REFERENCES `substansi` (`id_substansi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formpemetaanlaporan_ibfk_3` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `formpemetaanregulasi`
--
ALTER TABLE `formpemetaanregulasi`
  ADD CONSTRAINT `formpemetaanregulasi_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formpemetaanregulasi_ibfk_2` FOREIGN KEY (`id_substansi`) REFERENCES `substansi` (`id_substansi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
