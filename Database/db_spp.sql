-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 06:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
-- Table structure for table `tb_angkatan`
--

CREATE TABLE `tb_angkatan` (
  `thn_ajaran` int(11) NOT NULL,
  `nominal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`, `jurusan`) VALUES
('XII-01', 'XII', 'RPL'),
('XII-02', 'XII', 'AN'),
('XII-03', 'XII', 'MM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `nis` int(5) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `jumlah_bayar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `nis`, `bulan`, `tgl_bayar`, `jumlah_bayar`) VALUES
(2, 5415, 'Juli', '2023-02-15 11:59:01', 600000),
(3, 5415, 'Juni', '0000-00-00 00:00:00', 0),
(4, 5415, 'Agustus', '0000-00-00 00:00:00', 0),
(5, 5415, 'September', '0000-00-00 00:00:00', 0),
(6, 5415, 'Oktober', '0000-00-00 00:00:00', 0),
(7, 5415, 'November', '0000-00-00 00:00:00', 0),
(8, 5415, 'Desember', '0000-00-00 00:00:00', 0),
(9, 5415, 'Januari', '0000-00-00 00:00:00', 0),
(10, 5415, 'Februari', '0000-00-00 00:00:00', 0),
(11, 5415, 'Maret', '0000-00-00 00:00:00', 0),
(12, 5415, 'April', '0000-00-00 00:00:00', 0),
(13, 5415, 'Mei', '0000-00-00 00:00:00', 0),
(38, 5455, 'Juli', '0000-00-00 00:00:00', 0),
(39, 5455, 'Juni', '0000-00-00 00:00:00', 0),
(40, 5455, 'Agustus', '0000-00-00 00:00:00', 0),
(41, 5455, 'September', '0000-00-00 00:00:00', 0),
(42, 5455, 'Oktober', '0000-00-00 00:00:00', 0),
(43, 5455, 'November', '0000-00-00 00:00:00', 0),
(44, 5455, 'Desember', '0000-00-00 00:00:00', 0),
(45, 5455, 'Januari', '0000-00-00 00:00:00', 0),
(46, 5455, 'Februari', '0000-00-00 00:00:00', 0),
(47, 5455, 'Maret', '0000-00-00 00:00:00', 0),
(48, 5455, 'April', '0000-00-00 00:00:00', 0),
(49, 5455, 'Mei', '0000-00-00 00:00:00', 0);

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
('A-01', 'Gungde Solahudin', 'gung', 'gung1234', 'Admin', '087627346');

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
(5415, 'Zidan Abraham', 'dandann', 'XII-02', 'L', 'Jl. Janal'),
(5455, 'Ngurah', 'iytyit', 'XII-01', 'L', 'Jl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  ADD PRIMARY KEY (`thn_ajaran`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `fk_nis` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`);

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `fk_id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
