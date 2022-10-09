-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 01:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ukl`
--

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `id_angkatan` int(11) NOT NULL,
  `nama_angkatan` varchar(255) NOT NULL,
  `tahun_masuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`id_angkatan`, `nama_angkatan`, `tahun_masuk`) VALUES
(4, '30', '2021'),
(5, '31', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `id_angkatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jurusan`, `id_angkatan`) VALUES
(6, 'XI RPL 1', 'RPL', 4),
(7, 'X RPL 1', 'RPL', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `NISN` char(10) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_spp` int(2) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `tahun_spp` int(4) NOT NULL,
  `foto_bukti` varchar(255) NOT NULL,
  `keterangan` enum('lunas','belum lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `NISN`, `jatuh_tempo`, `tgl_bayar`, `bulan_spp`, `id_spp`, `tahun_spp`, `foto_bukti`, `keterangan`) VALUES
(375, 10, '0062304966', '2022-07-10', '2022-10-07', 7, 11, 2022, 'pocongkrtun.jpg', 'lunas'),
(376, 8, '0062304966', '2022-08-10', '2022-10-07', 8, 11, 2022, 'PSSI (Persatuan Sepakbola Seluruh Indonesia) Logo (PNG-1080p) - Vector69Com.png', 'lunas'),
(377, 8, '0062304966', '2022-09-10', '2022-10-07', 9, 11, 2022, '', 'lunas'),
(378, 8, '0062304966', '2022-10-10', '2022-10-07', 10, 11, 2022, '', 'lunas'),
(379, 0, '0062304966', '2022-11-10', '0000-00-00', 11, 11, 2022, '', 'belum lunas'),
(380, 0, '0062304966', '2022-12-10', '0000-00-00', 12, 11, 2022, '', 'belum lunas'),
(381, 0, '0062304966', '2023-01-10', '0000-00-00', 1, 11, 2023, '', 'belum lunas'),
(382, 0, '0062304966', '2023-02-10', '0000-00-00', 2, 11, 2023, '', 'belum lunas'),
(383, 0, '0062304966', '2023-03-10', '0000-00-00', 3, 11, 2023, '', 'belum lunas'),
(384, 0, '0062304966', '2023-04-10', '0000-00-00', 4, 11, 2023, '', 'belum lunas'),
(385, 0, '0062304966', '2023-05-10', '0000-00-00', 5, 11, 2023, '', 'belum lunas'),
(386, 0, '0062304966', '2023-06-10', '0000-00-00', 6, 11, 2023, '', 'belum lunas'),
(387, 0, '0056324562', '2022-07-10', '0000-00-00', 7, 11, 2022, '', 'belum lunas'),
(388, 0, '0056324562', '2022-08-10', '0000-00-00', 8, 11, 2022, '', 'belum lunas'),
(389, 0, '0056324562', '2022-09-10', '0000-00-00', 9, 11, 2022, '', 'belum lunas'),
(390, 0, '0056324562', '2022-10-10', '0000-00-00', 10, 11, 2022, '', 'belum lunas'),
(391, 0, '0056324562', '2022-11-10', '0000-00-00', 11, 11, 2022, '', 'belum lunas'),
(392, 0, '0056324562', '2022-12-10', '0000-00-00', 12, 11, 2022, '', 'belum lunas'),
(393, 0, '0056324562', '2023-01-10', '0000-00-00', 1, 11, 2023, '', 'belum lunas'),
(394, 0, '0056324562', '2023-02-10', '0000-00-00', 2, 11, 2023, '', 'belum lunas'),
(395, 0, '0056324562', '2023-03-10', '0000-00-00', 3, 11, 2023, '', 'belum lunas'),
(396, 0, '0056324562', '2023-04-10', '0000-00-00', 4, 11, 2023, '', 'belum lunas'),
(397, 0, '0056324562', '2023-05-10', '0000-00-00', 5, 11, 2023, '', 'belum lunas'),
(398, 0, '0056324562', '2023-06-10', '0000-00-00', 6, 11, 2023, '', 'belum lunas'),
(399, 0, '0076724671', '2022-07-10', '0000-00-00', 7, 12, 2022, 'pocongkrtun.jpg', 'belum lunas'),
(400, 0, '0076724671', '2022-08-10', '0000-00-00', 8, 12, 2022, '', 'belum lunas'),
(401, 0, '0076724671', '2022-09-10', '0000-00-00', 9, 12, 2022, '', 'belum lunas'),
(402, 0, '0076724671', '2022-10-10', '0000-00-00', 10, 12, 2022, '', 'belum lunas'),
(403, 0, '0076724671', '2022-11-10', '0000-00-00', 11, 12, 2022, '', 'belum lunas'),
(404, 0, '0076724671', '2022-12-10', '0000-00-00', 12, 12, 2022, '', 'belum lunas'),
(405, 0, '0076724671', '2023-01-10', '0000-00-00', 1, 12, 2023, '', 'belum lunas'),
(406, 0, '0076724671', '2023-02-10', '0000-00-00', 2, 12, 2023, '', 'belum lunas'),
(407, 0, '0076724671', '2023-03-10', '0000-00-00', 3, 12, 2023, '', 'belum lunas'),
(408, 0, '0076724671', '2023-04-10', '0000-00-00', 4, 12, 2023, '', 'belum lunas'),
(409, 0, '0076724671', '2023-05-10', '0000-00-00', 5, 12, 2023, '', 'belum lunas'),
(410, 0, '0076724671', '2023-06-10', '0000-00-00', 6, 12, 2023, '', 'belum lunas');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `level` enum('petugas','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(8, 'reyhan22', '202cb962ac59075b964b07152d234b70', 'reyhan', 'admin'),
(10, 'ahmad33', '202cb962ac59075b964b07152d234b70', 'Ahmad petugas', 'petugas'),
(12, 'alfin33', '202cb962ac59075b964b07152d234b70', 'Alfin petugas', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NISN` char(10) NOT NULL,
  `NIS` char(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `foto_siswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NISN`, `NIS`, `nama`, `id_kelas`, `alamat`, `no_tlp`, `password`, `id`, `foto_siswa`) VALUES
('0056324562', '45273572', 'Zidand', 6, 'MLG', '086374828', '202cb962ac59075b964b07152d234b70', 1763359706, ''),
('0062304966', '1241232', 'Reyhan Marsalino Diansa', 6, 'Mlg', '0864627889', '202cb962ac59075b964b07152d234b70', 1894259749, ''),
('0076724671', '21341561', 'Abyan', 7, 'KDR', '0867289112', '202cb962ac59075b964b07152d234b70', 911825727, '');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `id_angkatan`, `tahun`, `nominal`) VALUES
(11, 4, '2022/2023', 600000),
(12, 5, '2022/2023', 700000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `angkatan` (`id_angkatan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `NISN` (`NISN`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NISN`),
  ADD UNIQUE KEY `NIS` (`NIS`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `angkatan` (`id_angkatan`),
  ADD KEY `id_angkatan` (`id_angkatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `id_angkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_angkatan`) REFERENCES `angkatan` (`id_angkatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `spp_ibfk_1` FOREIGN KEY (`id_angkatan`) REFERENCES `angkatan` (`id_angkatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
