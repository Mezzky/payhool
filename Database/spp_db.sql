-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 03:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `id_pembayaran` int(5) NOT NULL,
  `nip` varchar(5) DEFAULT NULL,
  `nis` int(5) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `jumlah_bayar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `nip`, `nis`, `bulan`, `tgl_bayar`, `jumlah_bayar`) VALUES
(158, 'A-00', 5414, 'Juli', '2023-02-21 11:14:22', 600000),
(159, 'A-00', 5414, 'Juni', '2023-02-21 11:14:25', 600000),
(160, 'A-00', 5414, 'Agustus', '2023-02-21 11:14:39', 600000),
(161, 'A-00', 5414, 'September', '2023-02-21 11:19:44', 600000),
(162, 'A-00', 5414, 'Oktober', '2023-02-21 11:41:52', 600000),
(163, 'A-00', 5414, 'November', '2023-02-21 11:42:12', 600000),
(164, 'A-00', 5414, 'Desember', '2023-02-21 11:42:27', 600000),
(165, 'A-00', 5414, 'Januari', '2023-02-21 11:42:33', 600000),
(166, 'A-00', 5414, 'Februari', '2023-02-21 11:42:53', 600000),
(167, 'A-00', 5414, 'Maret', '2023-02-21 11:42:57', 600000),
(168, 'A-00', 5414, 'April', '2023-02-21 11:43:01', 600000),
(169, 'A-00', 5414, 'Mei', '2023-02-21 11:29:54', 600000),
(170, 'A-00', 5415, 'Juli', '0000-00-00 00:00:00', 0),
(171, 'A-00', 5415, 'Juni', '0000-00-00 00:00:00', 0),
(172, 'A-00', 5415, 'Agustus', '0000-00-00 00:00:00', 0),
(173, 'A-00', 5415, 'September', '0000-00-00 00:00:00', 0),
(174, 'A-00', 5415, 'Oktober', '0000-00-00 00:00:00', 0),
(175, 'A-00', 5415, 'November', '0000-00-00 00:00:00', 0),
(176, 'A-00', 5415, 'Desember', '0000-00-00 00:00:00', 0),
(177, 'A-00', 5415, 'Januari', '0000-00-00 00:00:00', 0),
(178, 'A-00', 5415, 'Februari', '0000-00-00 00:00:00', 0),
(179, 'A-00', 5415, 'Maret', '0000-00-00 00:00:00', 0),
(180, 'A-00', 5415, 'April', '0000-00-00 00:00:00', 0),
(181, 'A-00', 5415, 'Mei', '2023-02-21 22:42:27', 600000),
(182, 'A-00', 5416, 'Juli', '2023-02-21 22:37:45', 600000),
(183, 'A-00', 5416, 'Juni', '2023-02-21 22:37:55', 600000),
(184, 'A-00', 5416, 'Agustus', '2023-02-21 22:38:01', 600000),
(185, 'A-00', 5416, 'September', '2023-02-21 22:38:04', 600000),
(186, 'A-00', 5416, 'Oktober', '2023-02-21 22:38:10', 600000),
(187, 'A-00', 5416, 'November', '2023-02-21 22:38:13', 600000),
(188, 'A-00', 5416, 'Desember', '2023-02-21 22:38:19', 600000),
(189, 'A-00', 5416, 'Januari', '2023-02-21 22:38:23', 600000),
(190, 'A-00', 5416, 'Februari', '2023-02-21 22:38:27', 600000),
(191, 'A-00', 5416, 'Maret', '2023-02-21 22:38:52', 600000),
(192, 'A-00', 5416, 'April', '2023-02-21 22:39:01', 600000),
(193, 'A-00', 5416, 'Mei', '2023-02-21 22:39:04', 600000),
(194, 'A-00', 5417, 'Juli', '0000-00-00 00:00:00', 0),
(195, 'A-00', 5417, 'Juni', '0000-00-00 00:00:00', 0),
(196, 'A-00', 5417, 'Agustus', '0000-00-00 00:00:00', 0),
(197, 'A-00', 5417, 'September', '0000-00-00 00:00:00', 0),
(198, 'A-00', 5417, 'Oktober', '0000-00-00 00:00:00', 0),
(199, 'A-00', 5417, 'November', '0000-00-00 00:00:00', 0),
(200, 'A-00', 5417, 'Desember', '0000-00-00 00:00:00', 0),
(201, 'A-00', 5417, 'Januari', '0000-00-00 00:00:00', 0),
(202, 'A-00', 5417, 'Februari', '0000-00-00 00:00:00', 0),
(203, 'A-00', 5417, 'Maret', '0000-00-00 00:00:00', 0),
(204, 'A-00', 5417, 'April', '0000-00-00 00:00:00', 0),
(205, 'A-00', 5417, 'Mei', '0000-00-00 00:00:00', 0),
(206, 'A-00', 5413, 'Juli', '0000-00-00 00:00:00', 0),
(207, 'A-00', 5413, 'Juni', '0000-00-00 00:00:00', 0),
(208, 'A-00', 5413, 'Agustus', '0000-00-00 00:00:00', 0),
(209, 'A-00', 5413, 'September', '0000-00-00 00:00:00', 0),
(210, 'A-00', 5413, 'Oktober', '0000-00-00 00:00:00', 0),
(211, 'A-00', 5413, 'November', '0000-00-00 00:00:00', 0),
(212, 'A-00', 5413, 'Desember', '0000-00-00 00:00:00', 0),
(213, 'A-00', 5413, 'Januari', '0000-00-00 00:00:00', 0),
(214, 'A-00', 5413, 'Februari', '0000-00-00 00:00:00', 0),
(215, 'A-00', 5413, 'Maret', '0000-00-00 00:00:00', 0),
(216, 'A-00', 5413, 'April', '0000-00-00 00:00:00', 0),
(217, 'A-00', 5413, 'Mei', '0000-00-00 00:00:00', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`nip`, `nama_petugas`, `username`, `password`, `leveluser`, `no_telp`) VALUES
('A-00', '', '', '', '', ''),
('A-01', 'Gungde Solahudin', 'gungdin', 'petugas12', 'admin', '087645322');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(5) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `password`, `id_kelas`, `jenis_kelamin`, `alamat`) VALUES
(5413, 'I Gusti Pangestu', '123456', 'D-10', 'L', 'Jl. Taman Pancing'),
(5414, 'Rizky Ryan Sahadha', '123456', 'R-10', 'L', 'Jl. Pulau Moyo'),
(5415, 'Inyo Mansur', '123456', 'D-10', 'L', 'Jl. Gatot Subroto'),
(5416, 'Raffi Adrian Sahadha', '123456', 'T-10', 'L', 'Jl. Pulau Enggano'),
(5417, 'Arinda Tika Agustin', '123456', 'R-10', 'P', 'Jl. Pemogan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id_spp` int(5) NOT NULL,
  `nis` int(4) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `jumlah_bayar` double NOT NULL,
  `angkatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_spp`
--

INSERT INTO `tb_spp` (`id_spp`, `nis`, `bulan`, `tahun`, `jumlah_bayar`, `angkatan`) VALUES
(1, 5414, 'Januari', '2023', 600000, '1');

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
  ADD KEY `fk_nis` (`nis`),
  ADD KEY `fk_nip` (`nip`);

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
  ADD KEY `fk_nis_spp` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `id_spp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `fk_nip` FOREIGN KEY (`nip`) REFERENCES `tb_petugas` (`nip`) ON DELETE CASCADE,
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
  ADD CONSTRAINT `fk_nis_spp` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
