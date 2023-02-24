-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2023 at 12:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id_kelas` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
  `id_pembayaran` int NOT NULL,
  `nis` int NOT NULL,
  `bulan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_bayar` double DEFAULT NULL,
  `angkatan` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `nis`, `bulan`, `tahun`, `jumlah_bayar`, `angkatan`) VALUES
(158, 5414, 'Juli', '', 600000, ''),
(159, 5414, 'Juni', '', 600000, ''),
(160, 5414, 'Agustus', '', 600000, ''),
(161, 5414, 'September', '', 600000, ''),
(162, 5414, 'Oktober', '', 600000, ''),
(163, 5414, 'November', '', 600000, ''),
(164, 5414, 'Desember', '', 600000, ''),
(165, 5414, 'Januari', '', 600000, ''),
(166, 5414, 'Februari', '', 600000, ''),
(167, 5414, 'Maret', '', 600000, ''),
(168, 5414, 'April', '', 600000, ''),
(169, 5414, 'Mei', '', 600000, ''),
(170, 5415, 'Juli', '', 0, ''),
(171, 5415, 'Juni', '', 0, ''),
(172, 5415, 'Agustus', '', 0, ''),
(173, 5415, 'September', '', 0, ''),
(174, 5415, 'Oktober', '', 0, ''),
(175, 5415, 'November', '', 0, ''),
(176, 5415, 'Desember', '', 0, ''),
(177, 5415, 'Januari', '', 0, ''),
(178, 5415, 'Februari', '', 0, ''),
(179, 5415, 'Maret', '', 0, ''),
(180, 5415, 'April', '', 0, ''),
(181, 5415, 'Mei', '', 600000, ''),
(182, 5416, 'Juli', '', 600000, ''),
(183, 5416, 'Juni', '', 600000, ''),
(184, 5416, 'Agustus', '', 600000, ''),
(185, 5416, 'September', '', 600000, ''),
(186, 5416, 'Oktober', '', 600000, ''),
(187, 5416, 'November', '', 600000, ''),
(188, 5416, 'Desember', '', 600000, ''),
(189, 5416, 'Januari', '', 600000, ''),
(190, 5416, 'Februari', '', 600000, ''),
(191, 5416, 'Maret', '', 600000, ''),
(192, 5416, 'April', '', 600000, ''),
(193, 5416, 'Mei', '', 600000, ''),
(194, 5417, 'Juli', '', 0, ''),
(195, 5417, 'Juni', '', 0, ''),
(196, 5417, 'Agustus', '', 0, ''),
(197, 5417, 'September', '', 0, ''),
(198, 5417, 'Oktober', '', 0, ''),
(199, 5417, 'November', '', 0, ''),
(200, 5417, 'Desember', '', 0, ''),
(201, 5417, 'Januari', '', 0, ''),
(202, 5417, 'Februari', '', 0, ''),
(203, 5417, 'Maret', '', 0, ''),
(204, 5417, 'April', '', 0, ''),
(205, 5417, 'Mei', '', 0, ''),
(206, 5413, 'Juli', '', 600000, ''),
(207, 5413, 'Juni', '', 600000, ''),
(208, 5413, 'Agustus', '', 0, ''),
(209, 5413, 'September', '', 0, ''),
(210, 5413, 'Oktober', '', 0, ''),
(211, 5413, 'November', '', 0, ''),
(212, 5413, 'Desember', '', 0, ''),
(213, 5413, 'Januari', '', 0, ''),
(214, 5413, 'Februari', '', 0, ''),
(215, 5413, 'Maret', '', 0, ''),
(216, 5413, 'April', '', 0, ''),
(217, 5413, 'Mei', '', 0, ''),
(218, 5418, 'Juli', '', 600000, ''),
(219, 5418, 'Juni', '', 0, ''),
(220, 5418, 'Agustus', '', 0, ''),
(221, 5418, 'September', '', 0, ''),
(222, 5418, 'Oktober', '', 0, ''),
(223, 5418, 'November', '', 0, ''),
(224, 5418, 'Desember', '', 0, ''),
(225, 5418, 'Januari', '', 0, ''),
(226, 5418, 'Februari', '', 0, ''),
(227, 5418, 'Maret', '', 0, ''),
(228, 5418, 'April', '', 0, ''),
(229, 5418, 'Mei', '', 0, ''),
(230, 5412, 'Juli', '2022/2023', 0, 'I'),
(231, 5412, 'Juni', '2022/2023', 0, 'I'),
(232, 5412, 'Agustus', '2022/2023', 0, 'I'),
(233, 5412, 'September', '2022/2023', 0, 'I'),
(234, 5412, 'Oktober', '2022/2023', 0, 'I'),
(235, 5412, 'November', '2022/2023', 0, 'I'),
(236, 5412, 'Desember', '2022/2023', 0, 'I'),
(237, 5412, 'Januari', '2022/2023', 0, 'I'),
(238, 5412, 'Februari', '2022/2023', 0, 'I'),
(239, 5412, 'Maret', '2022/2023', 0, 'I'),
(240, 5412, 'April', '2022/2023', 0, 'I'),
(241, 5412, 'Mei', '2022/2023', 0, 'I'),
(242, 5410, 'Juni', '2022/2023', 600000, 'I'),
(243, 5410, 'Juli', '2022/2023', 0, 'I'),
(244, 5410, 'Agustus', '2022/2023', 0, 'I'),
(245, 5410, 'September', '2022/2023', 0, 'I'),
(246, 5410, 'Oktober', '2022/2023', 0, 'I'),
(247, 5410, 'November', '2022/2023', 0, 'I'),
(248, 5410, 'Desember', '2022/2023', 0, 'I'),
(249, 5410, 'Januari', '2022/2023', 0, 'I'),
(250, 5410, 'Februari', '2022/2023', 0, 'I'),
(251, 5410, 'Maret', '2022/2023', 0, 'I'),
(252, 5410, 'April', '2022/2023', 0, 'I'),
(253, 5410, 'Mei', '2022/2023', 0, 'I'),
(254, 5410, 'Juni', '2022/2023', 0, 'II'),
(255, 5410, 'Juli', '2022/2023', 0, 'II'),
(256, 5410, 'Agustus', '2022/2023', 0, 'II'),
(257, 5410, 'September', '2022/2023', 0, 'II'),
(258, 5410, 'Oktober', '2022/2023', 0, 'II'),
(259, 5410, 'November', '2022/2023', 0, 'II'),
(260, 5410, 'Desember', '2022/2023', 0, 'II'),
(261, 5410, 'Januari', '2022/2023', 0, 'II'),
(262, 5410, 'Februari', '2022/2023', 0, 'II'),
(263, 5410, 'Maret', '2022/2023', 0, 'II'),
(264, 5410, 'April', '2022/2023', 0, 'II'),
(265, 5410, 'Mei', '2022/2023', 0, 'II'),
(266, 5410, 'Juni', '2022/2023', 0, 'III'),
(267, 5410, 'Juli', '2022/2023', 0, 'III'),
(268, 5410, 'Agustus', '2022/2023', 0, 'III'),
(269, 5410, 'September', '2022/2023', 0, 'III'),
(270, 5410, 'Oktober', '2022/2023', 0, 'III'),
(271, 5410, 'November', '2022/2023', 0, 'III'),
(272, 5410, 'Desember', '2022/2023', 0, 'III'),
(273, 5410, 'Januari', '2022/2023', 0, 'III'),
(274, 5410, 'Februari', '2022/2023', 0, 'III'),
(275, 5410, 'Maret', '2022/2023', 0, 'III'),
(276, 5410, 'April', '2022/2023', 0, 'III'),
(277, 5410, 'Mei', '2022/2023', 0, 'III');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `nip` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_petugas` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `leveluser` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `no_telp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`nip`, `nama_petugas`, `username`, `password`, `leveluser`, `no_telp`) VALUES
('A-01', 'Gungde Solahudin', 'gungdin', 'petugas12', 'admin', '087645322');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int NOT NULL,
  `nama_siswa` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `password`, `id_kelas`, `jenis_kelamin`, `alamat`) VALUES
(5410, 'Ernayato', '123456', 'D-10', 'L', 'Jalan Sidakarya'),
(5411, 'Siswa Tumbal', '123456', 'D-10', 'L', 'Jl. Tumbal'),
(5412, 'Ayu Desiani Ningsih', '123456', 'R-10', 'P', 'Jl. Supratman'),
(5413, 'I Gusti Pangestu', '123456', 'D-10', 'L', 'Jl. Taman Pancing'),
(5414, 'Rizky Ryan Sahadha', '123456', 'R-10', 'L', 'Jl. Pulau Moyo'),
(5415, 'Inyo Mansur', '123456', 'D-10', 'L', 'Jl. Gatot Subroto'),
(5416, 'Raffi Adrian Sahadha', '123456', 'T-10', 'L', 'Jl. Pulau Enggano'),
(5417, 'Arinda Tika Agustin', '123456', 'R-10', 'P', 'Jl. Pemogan'),
(5418, 'Bang Messi', '123456', 'R-10', 'L', 'Jl. Siuuuu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id_spp` int NOT NULL,
  `nip` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `nis` int NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `bayar` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_spp`
--

INSERT INTO `tb_spp` (`id_spp`, `nip`, `nis`, `tgl_bayar`, `bayar`) VALUES
(1, 'A-01', 5414, '2023-02-23 11:36:28', 600000),
(2, 'A-01', 5413, '2023-02-23 11:44:38', 600000),
(3, 'A-01', 5413, '2023-02-23 11:47:46', 600000),
(4, 'A-01', 5418, '2023-02-23 11:49:08', 600000),
(5, 'A-01', 5410, '2023-02-23 12:21:26', 600000);

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
  MODIFY `id_pembayaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `id_spp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
