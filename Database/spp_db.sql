-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 02:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`, `jurusan`) VALUES
('D-10', 'X DKV 1', 'Desain Komunikasi Visual'),
('R-10', 'X RPL 1', 'Rekayasa Perangkat Lunak'),
('T-10', 'X TKJ 1', 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `jumlah_bayar` double DEFAULT NULL,
  `angkatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `nis`, `bulan`, `tahun`, `jumlah_bayar`, `angkatan`) VALUES
(386, 5417, 'Juni', '2023/2024', 600000, 'I'),
(387, 5417, 'Juli', '2023/2024', 0, 'I'),
(388, 5417, 'Agustus', '2023/2024', 0, 'I'),
(389, 5417, 'September', '2023/2024', 0, 'I'),
(390, 5417, 'Oktober', '2023/2024', 0, 'I'),
(391, 5417, 'November', '2023/2024', 0, 'I'),
(392, 5417, 'Desember', '2023/2024', 0, 'I'),
(393, 5417, 'Januari', '2023/2024', 0, 'I'),
(394, 5417, 'Februari', '2023/2024', 0, 'I'),
(395, 5417, 'Maret', '2023/2024', 0, 'I'),
(396, 5417, 'April', '2023/2024', 0, 'I'),
(397, 5417, 'Mei', '2023/2024', 0, 'I'),
(398, 5417, 'Juni', '2024/2025', 0, 'II'),
(399, 5417, 'Juli', '2024/2025', 0, 'II'),
(400, 5417, 'Agustus', '2024/2025', 0, 'II'),
(401, 5417, 'September', '2024/2025', 0, 'II'),
(402, 5417, 'Oktober', '2024/2025', 0, 'II'),
(403, 5417, 'November', '2024/2025', 0, 'II'),
(404, 5417, 'Desember', '2024/2025', 0, 'II'),
(405, 5417, 'Januari', '2024/2025', 0, 'II'),
(406, 5417, 'Februari', '2024/2025', 0, 'II'),
(407, 5417, 'Maret', '2024/2025', 0, 'II'),
(408, 5417, 'April', '2024/2025', 0, 'II'),
(409, 5417, 'Mei', '2024/2025', 0, 'II'),
(410, 5417, 'Juni', '2025/2026', 0, 'III'),
(411, 5417, 'Juli', '2025/2026', 0, 'III'),
(412, 5417, 'Agustus', '2025/2026', 0, 'III'),
(413, 5417, 'September', '2025/2026', 0, 'III'),
(414, 5417, 'Oktober', '2025/2026', 0, 'III'),
(415, 5417, 'November', '2025/2026', 0, 'III'),
(416, 5417, 'Desember', '2025/2026', 0, 'III'),
(417, 5417, 'Januari', '2025/2026', 0, 'III'),
(418, 5417, 'Februari', '2025/2026', 0, 'III'),
(419, 5417, 'Maret', '2025/2026', 0, 'III'),
(420, 5417, 'April', '2025/2026', 0, 'III'),
(421, 5417, 'Mei', '2025/2026', 0, 'III');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `nip` varchar(5) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `leveluser` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`nip`, `nama_petugas`, `username`, `password`, `leveluser`, `no_telp`) VALUES
('A-01', 'Gungde Solahudin', 'gungdin', 'petugas12', 'Admin', '087645322'),
('P-01', 'Arta Wijaya', 'artawi', 'art123', 'Petugas', '087352625415');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `password`, `id_kelas`, `jenis_kelamin`, `alamat`) VALUES
(5417, 'Inyo Mansurda', '123456', 'D-10', 'L', 'Jl. Gatot Kayu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id_spp` int(11) NOT NULL,
  `nip` varchar(5) NOT NULL,
  `nis` int(11) NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `bayar` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_spp`
--

INSERT INTO `tb_spp` (`id_spp`, `nip`, `nis`, `tgl_bayar`, `bayar`) VALUES
(12, 'A-01', 5417, '2023-02-24 09:30:31', 600000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_nis` (`nis`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `fk_id_kelas` (`id_kelas`);

--
-- Indexes for table `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `fk_nis_spp` (`nis`),
  ADD KEY `fk_nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=458;

--
-- AUTO_INCREMENT for table `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `fk_nis` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `fk_id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`);

--
-- Constraints for table `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD CONSTRAINT `fk_nip` FOREIGN KEY (`nip`) REFERENCES `tb_petugas` (`nip`),
  ADD CONSTRAINT `fk_nis_spp` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
