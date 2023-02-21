-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2023 pada 14.30
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`, `jurusan`) VALUES
('D-10', 'X DKV 1', 'Desain Komunikasi Visual'),
('R-10', 'X RPL 1', 'Rekayasa Perangkat Lunak'),
('T-10', 'X TKJ 1', 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
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
-- Dumping data untuk tabel `tb_pembayaran`
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
(181, 'A-00', 5415, 'Mei', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
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
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`nip`, `nama_petugas`, `username`, `password`, `leveluser`, `no_telp`) VALUES
('A-00', '', '', '', '', ''),
('A-01', 'Gungde Solahudin', 'gungdin', 'petugas12', 'admin', '087645322');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
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
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `password`, `id_kelas`, `jenis_kelamin`, `alamat`) VALUES
(5414, 'Rizky Ryan Sahadha', '123456', 'R-10', 'L', 'Jl. Pulau Moyo'),
(5415, 'Inyo Mansur', '123456', 'D-10', 'L', 'Jl. Gatot Subroto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spp`
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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_nis` (`nis`),
  ADD KEY `fk_nip` (`nip`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `fk_id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `fk_nis_spp` (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `fk_nip` FOREIGN KEY (`nip`) REFERENCES `tb_petugas` (`nip`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_nis` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `fk_id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`);

--
-- Ketidakleluasaan untuk tabel `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD CONSTRAINT `fk_nis_spp` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
