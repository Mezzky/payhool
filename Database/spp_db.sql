-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 04:20 AM
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
  `id_pembayaran` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `jumlah_bayar` double DEFAULT NULL,
  `angkatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `nis`, `bulan`, `tahun`, `jumlah_bayar`, `angkatan`) VALUES
(638, 5411, 'Juni', '2023/2024', 0, 'I'),
(639, 5411, 'Juli', '2023/2024', 0, 'I'),
(640, 5411, 'Agustus', '2023/2024', 0, 'I'),
(641, 5411, 'September', '2023/2024', 0, 'I'),
(642, 5411, 'Oktober', '2023/2024', 0, 'I'),
(643, 5411, 'November', '2023/2024', 0, 'I'),
(644, 5411, 'Desember', '2023/2024', 0, 'I'),
(645, 5411, 'Januari', '2023/2024', 0, 'I'),
(646, 5411, 'Februari', '2023/2024', 0, 'I'),
(647, 5411, 'Maret', '2023/2024', 0, 'I'),
(648, 5411, 'April', '2023/2024', 0, 'I'),
(649, 5411, 'Mei', '2023/2024', 0, 'I'),
(650, 5411, 'Juni', '2024/2025', 0, 'II'),
(651, 5411, 'Juli', '2024/2025', 0, 'II'),
(652, 5411, 'Agustus', '2024/2025', 0, 'II'),
(653, 5411, 'September', '2024/2025', 0, 'II'),
(654, 5411, 'Oktober', '2024/2025', 0, 'II'),
(655, 5411, 'November', '2024/2025', 0, 'II'),
(656, 5411, 'Desember', '2024/2025', 0, 'II'),
(657, 5411, 'Januari', '2024/2025', 0, 'II'),
(658, 5411, 'Februari', '2024/2025', 0, 'II'),
(659, 5411, 'Maret', '2024/2025', 0, 'II'),
(660, 5411, 'April', '2024/2025', 0, 'II'),
(661, 5411, 'Mei', '2024/2025', 0, 'II'),
(662, 5411, 'Juni', '2025/2026', 0, 'III'),
(663, 5411, 'Juli', '2025/2026', 0, 'III'),
(664, 5411, 'Agustus', '2025/2026', 0, 'III'),
(665, 5411, 'September', '2025/2026', 0, 'III'),
(666, 5411, 'Oktober', '2025/2026', 0, 'III'),
(667, 5411, 'November', '2025/2026', 0, 'III'),
(668, 5411, 'Desember', '2025/2026', 0, 'III'),
(669, 5411, 'Januari', '2025/2026', 0, 'III'),
(670, 5411, 'Februari', '2025/2026', 0, 'III'),
(671, 5411, 'Maret', '2025/2026', 0, 'III'),
(672, 5411, 'April', '2025/2026', 0, 'III'),
(673, 5411, 'Mei', '2025/2026', 0, 'III'),
(674, 5410, 'Juni', '2023/2024', 0, 'I'),
(675, 5410, 'Juli', '2023/2024', 0, 'I'),
(676, 5410, 'Agustus', '2023/2024', 0, 'I'),
(677, 5410, 'September', '2023/2024', 0, 'I'),
(678, 5410, 'Oktober', '2023/2024', 0, 'I'),
(679, 5410, 'November', '2023/2024', 0, 'I'),
(680, 5410, 'Desember', '2023/2024', 0, 'I'),
(681, 5410, 'Januari', '2023/2024', 0, 'I'),
(682, 5410, 'Februari', '2023/2024', 0, 'I'),
(683, 5410, 'Maret', '2023/2024', 0, 'I'),
(684, 5410, 'April', '2023/2024', 0, 'I'),
(685, 5410, 'Mei', '2023/2024', 0, 'I'),
(686, 5410, 'Juni', '2024/2025', 0, 'II'),
(687, 5410, 'Juli', '2024/2025', 0, 'II'),
(688, 5410, 'Agustus', '2024/2025', 0, 'II'),
(689, 5410, 'September', '2024/2025', 0, 'II'),
(690, 5410, 'Oktober', '2024/2025', 0, 'II'),
(691, 5410, 'November', '2024/2025', 0, 'II'),
(692, 5410, 'Desember', '2024/2025', 0, 'II'),
(693, 5410, 'Januari', '2024/2025', 0, 'II'),
(694, 5410, 'Februari', '2024/2025', 0, 'II'),
(695, 5410, 'Maret', '2024/2025', 0, 'II'),
(696, 5410, 'April', '2024/2025', 0, 'II'),
(697, 5410, 'Mei', '2024/2025', 0, 'II'),
(698, 5410, 'Juni', '2025/2026', 0, 'III'),
(699, 5410, 'Juli', '2025/2026', 0, 'III'),
(700, 5410, 'Agustus', '2025/2026', 0, 'III'),
(701, 5410, 'September', '2025/2026', 0, 'III'),
(702, 5410, 'Oktober', '2025/2026', 0, 'III'),
(703, 5410, 'November', '2025/2026', 0, 'III'),
(704, 5410, 'Desember', '2025/2026', 0, 'III'),
(705, 5410, 'Januari', '2025/2026', 0, 'III'),
(706, 5410, 'Februari', '2025/2026', 0, 'III'),
(707, 5410, 'Maret', '2025/2026', 0, 'III'),
(708, 5410, 'April', '2025/2026', 0, 'III'),
(709, 5410, 'Mei', '2025/2026', 0, 'III'),
(710, 5409, 'Juni', '2023/2024', 0, 'I'),
(711, 5409, 'Juli', '2023/2024', 0, 'I'),
(712, 5409, 'Agustus', '2023/2024', 0, 'I'),
(713, 5409, 'September', '2023/2024', 0, 'I'),
(714, 5409, 'Oktober', '2023/2024', 0, 'I'),
(715, 5409, 'November', '2023/2024', 0, 'I'),
(716, 5409, 'Desember', '2023/2024', 0, 'I'),
(717, 5409, 'Januari', '2023/2024', 0, 'I'),
(718, 5409, 'Februari', '2023/2024', 0, 'I'),
(719, 5409, 'Maret', '2023/2024', 0, 'I'),
(720, 5409, 'April', '2023/2024', 0, 'I'),
(721, 5409, 'Mei', '2023/2024', 0, 'I'),
(722, 5409, 'Juni', '2024/2025', 0, 'II'),
(723, 5409, 'Juli', '2024/2025', 0, 'II'),
(724, 5409, 'Agustus', '2024/2025', 0, 'II'),
(725, 5409, 'September', '2024/2025', 0, 'II'),
(726, 5409, 'Oktober', '2024/2025', 0, 'II'),
(727, 5409, 'November', '2024/2025', 0, 'II'),
(728, 5409, 'Desember', '2024/2025', 0, 'II'),
(729, 5409, 'Januari', '2024/2025', 0, 'II'),
(730, 5409, 'Februari', '2024/2025', 0, 'II'),
(731, 5409, 'Maret', '2024/2025', 0, 'II'),
(732, 5409, 'April', '2024/2025', 0, 'II'),
(733, 5409, 'Mei', '2024/2025', 0, 'II'),
(734, 5409, 'Juni', '2025/2026', 0, 'III'),
(735, 5409, 'Juli', '2025/2026', 0, 'III'),
(736, 5409, 'Agustus', '2025/2026', 0, 'III'),
(737, 5409, 'September', '2025/2026', 0, 'III'),
(738, 5409, 'Oktober', '2025/2026', 0, 'III'),
(739, 5409, 'November', '2025/2026', 0, 'III'),
(740, 5409, 'Desember', '2025/2026', 0, 'III'),
(741, 5409, 'Januari', '2025/2026', 0, 'III'),
(742, 5409, 'Februari', '2025/2026', 0, 'III'),
(743, 5409, 'Maret', '2025/2026', 0, 'III'),
(744, 5409, 'April', '2025/2026', 0, 'III'),
(745, 5409, 'Mei', '2025/2026', 0, 'III'),
(746, 5408, 'Juni', '2023/2024', 0, 'I'),
(747, 5408, 'Juli', '2023/2024', 0, 'I'),
(748, 5408, 'Agustus', '2023/2024', 0, 'I'),
(749, 5408, 'September', '2023/2024', 0, 'I'),
(750, 5408, 'Oktober', '2023/2024', 0, 'I'),
(751, 5408, 'November', '2023/2024', 0, 'I'),
(752, 5408, 'Desember', '2023/2024', 0, 'I'),
(753, 5408, 'Januari', '2023/2024', 0, 'I'),
(754, 5408, 'Februari', '2023/2024', 0, 'I'),
(755, 5408, 'Maret', '2023/2024', 0, 'I'),
(756, 5408, 'April', '2023/2024', 0, 'I'),
(757, 5408, 'Mei', '2023/2024', 0, 'I'),
(758, 5408, 'Juni', '2024/2025', 0, 'II'),
(759, 5408, 'Juli', '2024/2025', 0, 'II'),
(760, 5408, 'Agustus', '2024/2025', 0, 'II'),
(761, 5408, 'September', '2024/2025', 0, 'II'),
(762, 5408, 'Oktober', '2024/2025', 0, 'II'),
(763, 5408, 'November', '2024/2025', 0, 'II'),
(764, 5408, 'Desember', '2024/2025', 0, 'II'),
(765, 5408, 'Januari', '2024/2025', 0, 'II'),
(766, 5408, 'Februari', '2024/2025', 0, 'II'),
(767, 5408, 'Maret', '2024/2025', 0, 'II'),
(768, 5408, 'April', '2024/2025', 0, 'II'),
(769, 5408, 'Mei', '2024/2025', 0, 'II'),
(770, 5408, 'Juni', '2025/2026', 0, 'III'),
(771, 5408, 'Juli', '2025/2026', 0, 'III'),
(772, 5408, 'Agustus', '2025/2026', 0, 'III'),
(773, 5408, 'September', '2025/2026', 0, 'III'),
(774, 5408, 'Oktober', '2025/2026', 0, 'III'),
(775, 5408, 'November', '2025/2026', 0, 'III'),
(776, 5408, 'Desember', '2025/2026', 0, 'III'),
(777, 5408, 'Januari', '2025/2026', 0, 'III'),
(778, 5408, 'Februari', '2025/2026', 0, 'III'),
(779, 5408, 'Maret', '2025/2026', 0, 'III'),
(780, 5408, 'April', '2025/2026', 0, 'III'),
(781, 5408, 'Mei', '2025/2026', 0, 'III'),
(782, 5407, 'Juni', '2023/2024', 0, 'I'),
(783, 5407, 'Juli', '2023/2024', 0, 'I'),
(784, 5407, 'Agustus', '2023/2024', 0, 'I'),
(785, 5407, 'September', '2023/2024', 0, 'I'),
(786, 5407, 'Oktober', '2023/2024', 0, 'I'),
(787, 5407, 'November', '2023/2024', 0, 'I'),
(788, 5407, 'Desember', '2023/2024', 0, 'I'),
(789, 5407, 'Januari', '2023/2024', 0, 'I'),
(790, 5407, 'Februari', '2023/2024', 0, 'I'),
(791, 5407, 'Maret', '2023/2024', 0, 'I'),
(792, 5407, 'April', '2023/2024', 0, 'I'),
(793, 5407, 'Mei', '2023/2024', 0, 'I'),
(794, 5407, 'Juni', '2024/2025', 0, 'II'),
(795, 5407, 'Juli', '2024/2025', 0, 'II'),
(796, 5407, 'Agustus', '2024/2025', 0, 'II'),
(797, 5407, 'September', '2024/2025', 0, 'II'),
(798, 5407, 'Oktober', '2024/2025', 0, 'II'),
(799, 5407, 'November', '2024/2025', 0, 'II'),
(800, 5407, 'Desember', '2024/2025', 0, 'II'),
(801, 5407, 'Januari', '2024/2025', 0, 'II'),
(802, 5407, 'Februari', '2024/2025', 0, 'II'),
(803, 5407, 'Maret', '2024/2025', 0, 'II'),
(804, 5407, 'April', '2024/2025', 0, 'II'),
(805, 5407, 'Mei', '2024/2025', 0, 'II'),
(806, 5407, 'Juni', '2025/2026', 0, 'III'),
(807, 5407, 'Juli', '2025/2026', 0, 'III'),
(808, 5407, 'Agustus', '2025/2026', 0, 'III'),
(809, 5407, 'September', '2025/2026', 0, 'III'),
(810, 5407, 'Oktober', '2025/2026', 0, 'III'),
(811, 5407, 'November', '2025/2026', 0, 'III'),
(812, 5407, 'Desember', '2025/2026', 0, 'III'),
(813, 5407, 'Januari', '2025/2026', 0, 'III'),
(814, 5407, 'Februari', '2025/2026', 0, 'III'),
(815, 5407, 'Maret', '2025/2026', 0, 'III'),
(816, 5407, 'April', '2025/2026', 0, 'III'),
(817, 5407, 'Mei', '2025/2026', 0, 'III'),
(818, 5406, 'Juni', '2023/2024', 0, 'I'),
(819, 5406, 'Juli', '2023/2024', 0, 'I'),
(820, 5406, 'Agustus', '2023/2024', 0, 'I'),
(821, 5406, 'September', '2023/2024', 0, 'I'),
(822, 5406, 'Oktober', '2023/2024', 0, 'I'),
(823, 5406, 'November', '2023/2024', 0, 'I'),
(824, 5406, 'Desember', '2023/2024', 0, 'I'),
(825, 5406, 'Januari', '2023/2024', 0, 'I'),
(826, 5406, 'Februari', '2023/2024', 0, 'I'),
(827, 5406, 'Maret', '2023/2024', 0, 'I'),
(828, 5406, 'April', '2023/2024', 0, 'I'),
(829, 5406, 'Mei', '2023/2024', 0, 'I'),
(830, 5406, 'Juni', '2024/2025', 0, 'II'),
(831, 5406, 'Juli', '2024/2025', 0, 'II'),
(832, 5406, 'Agustus', '2024/2025', 0, 'II'),
(833, 5406, 'September', '2024/2025', 0, 'II'),
(834, 5406, 'Oktober', '2024/2025', 0, 'II'),
(835, 5406, 'November', '2024/2025', 0, 'II'),
(836, 5406, 'Desember', '2024/2025', 0, 'II'),
(837, 5406, 'Januari', '2024/2025', 0, 'II'),
(838, 5406, 'Februari', '2024/2025', 0, 'II'),
(839, 5406, 'Maret', '2024/2025', 0, 'II'),
(840, 5406, 'April', '2024/2025', 0, 'II'),
(841, 5406, 'Mei', '2024/2025', 0, 'II'),
(842, 5406, 'Juni', '2025/2026', 0, 'III'),
(843, 5406, 'Juli', '2025/2026', 0, 'III'),
(844, 5406, 'Agustus', '2025/2026', 0, 'III'),
(845, 5406, 'September', '2025/2026', 0, 'III'),
(846, 5406, 'Oktober', '2025/2026', 0, 'III'),
(847, 5406, 'November', '2025/2026', 0, 'III'),
(848, 5406, 'Desember', '2025/2026', 0, 'III'),
(849, 5406, 'Januari', '2025/2026', 0, 'III'),
(850, 5406, 'Februari', '2025/2026', 0, 'III'),
(851, 5406, 'Maret', '2025/2026', 0, 'III'),
(852, 5406, 'April', '2025/2026', 0, 'III'),
(853, 5406, 'Mei', '2025/2026', 0, 'III'),
(854, 5405, 'Juni', '2023/2024', 0, 'I'),
(855, 5405, 'Juli', '2023/2024', 0, 'I'),
(856, 5405, 'Agustus', '2023/2024', 0, 'I'),
(857, 5405, 'September', '2023/2024', 0, 'I'),
(858, 5405, 'Oktober', '2023/2024', 0, 'I'),
(859, 5405, 'November', '2023/2024', 0, 'I'),
(860, 5405, 'Desember', '2023/2024', 0, 'I'),
(861, 5405, 'Januari', '2023/2024', 0, 'I'),
(862, 5405, 'Februari', '2023/2024', 0, 'I'),
(863, 5405, 'Maret', '2023/2024', 0, 'I'),
(864, 5405, 'April', '2023/2024', 0, 'I'),
(865, 5405, 'Mei', '2023/2024', 0, 'I'),
(866, 5405, 'Juni', '2024/2025', 0, 'II'),
(867, 5405, 'Juli', '2024/2025', 0, 'II'),
(868, 5405, 'Agustus', '2024/2025', 0, 'II'),
(869, 5405, 'September', '2024/2025', 0, 'II'),
(870, 5405, 'Oktober', '2024/2025', 0, 'II'),
(871, 5405, 'November', '2024/2025', 0, 'II'),
(872, 5405, 'Desember', '2024/2025', 0, 'II'),
(873, 5405, 'Januari', '2024/2025', 0, 'II'),
(874, 5405, 'Februari', '2024/2025', 0, 'II'),
(875, 5405, 'Maret', '2024/2025', 0, 'II'),
(876, 5405, 'April', '2024/2025', 0, 'II'),
(877, 5405, 'Mei', '2024/2025', 0, 'II'),
(878, 5405, 'Juni', '2025/2026', 0, 'III'),
(879, 5405, 'Juli', '2025/2026', 0, 'III'),
(880, 5405, 'Agustus', '2025/2026', 0, 'III'),
(881, 5405, 'September', '2025/2026', 0, 'III'),
(882, 5405, 'Oktober', '2025/2026', 0, 'III'),
(883, 5405, 'November', '2025/2026', 0, 'III'),
(884, 5405, 'Desember', '2025/2026', 0, 'III'),
(885, 5405, 'Januari', '2025/2026', 0, 'III'),
(886, 5405, 'Februari', '2025/2026', 0, 'III'),
(887, 5405, 'Maret', '2025/2026', 0, 'III'),
(888, 5405, 'April', '2025/2026', 0, 'III'),
(889, 5405, 'Mei', '2025/2026', 0, 'III'),
(890, 5404, 'Juni', '2023/2024', 0, 'I'),
(891, 5404, 'Juli', '2023/2024', 0, 'I'),
(892, 5404, 'Agustus', '2023/2024', 0, 'I'),
(893, 5404, 'September', '2023/2024', 0, 'I'),
(894, 5404, 'Oktober', '2023/2024', 0, 'I'),
(895, 5404, 'November', '2023/2024', 0, 'I'),
(896, 5404, 'Desember', '2023/2024', 0, 'I'),
(897, 5404, 'Januari', '2023/2024', 0, 'I'),
(898, 5404, 'Februari', '2023/2024', 0, 'I'),
(899, 5404, 'Maret', '2023/2024', 0, 'I'),
(900, 5404, 'April', '2023/2024', 0, 'I'),
(901, 5404, 'Mei', '2023/2024', 0, 'I'),
(902, 5404, 'Juni', '2024/2025', 0, 'II'),
(903, 5404, 'Juli', '2024/2025', 0, 'II'),
(904, 5404, 'Agustus', '2024/2025', 0, 'II'),
(905, 5404, 'September', '2024/2025', 0, 'II'),
(906, 5404, 'Oktober', '2024/2025', 0, 'II'),
(907, 5404, 'November', '2024/2025', 0, 'II'),
(908, 5404, 'Desember', '2024/2025', 0, 'II'),
(909, 5404, 'Januari', '2024/2025', 0, 'II'),
(910, 5404, 'Februari', '2024/2025', 0, 'II'),
(911, 5404, 'Maret', '2024/2025', 0, 'II'),
(912, 5404, 'April', '2024/2025', 0, 'II'),
(913, 5404, 'Mei', '2024/2025', 0, 'II'),
(914, 5404, 'Juni', '2025/2026', 0, 'III'),
(915, 5404, 'Juli', '2025/2026', 0, 'III'),
(916, 5404, 'Agustus', '2025/2026', 0, 'III'),
(917, 5404, 'September', '2025/2026', 0, 'III'),
(918, 5404, 'Oktober', '2025/2026', 0, 'III'),
(919, 5404, 'November', '2025/2026', 0, 'III'),
(920, 5404, 'Desember', '2025/2026', 0, 'III'),
(921, 5404, 'Januari', '2025/2026', 0, 'III'),
(922, 5404, 'Februari', '2025/2026', 0, 'III'),
(923, 5404, 'Maret', '2025/2026', 0, 'III'),
(924, 5404, 'April', '2025/2026', 0, 'III'),
(925, 5404, 'Mei', '2025/2026', 0, 'III'),
(926, 5403, 'Juni', '2023/2024', 0, 'I'),
(927, 5403, 'Juli', '2023/2024', 0, 'I'),
(928, 5403, 'Agustus', '2023/2024', 0, 'I'),
(929, 5403, 'September', '2023/2024', 0, 'I'),
(930, 5403, 'Oktober', '2023/2024', 0, 'I'),
(931, 5403, 'November', '2023/2024', 0, 'I'),
(932, 5403, 'Desember', '2023/2024', 0, 'I'),
(933, 5403, 'Januari', '2023/2024', 0, 'I'),
(934, 5403, 'Februari', '2023/2024', 0, 'I'),
(935, 5403, 'Maret', '2023/2024', 0, 'I'),
(936, 5403, 'April', '2023/2024', 0, 'I'),
(937, 5403, 'Mei', '2023/2024', 0, 'I'),
(938, 5403, 'Juni', '2024/2025', 0, 'II'),
(939, 5403, 'Juli', '2024/2025', 0, 'II'),
(940, 5403, 'Agustus', '2024/2025', 0, 'II'),
(941, 5403, 'September', '2024/2025', 0, 'II'),
(942, 5403, 'Oktober', '2024/2025', 0, 'II'),
(943, 5403, 'November', '2024/2025', 0, 'II'),
(944, 5403, 'Desember', '2024/2025', 0, 'II'),
(945, 5403, 'Januari', '2024/2025', 0, 'II'),
(946, 5403, 'Februari', '2024/2025', 0, 'II'),
(947, 5403, 'Maret', '2024/2025', 0, 'II'),
(948, 5403, 'April', '2024/2025', 0, 'II'),
(949, 5403, 'Mei', '2024/2025', 0, 'II'),
(950, 5403, 'Juni', '2025/2026', 0, 'III'),
(951, 5403, 'Juli', '2025/2026', 0, 'III'),
(952, 5403, 'Agustus', '2025/2026', 0, 'III'),
(953, 5403, 'September', '2025/2026', 0, 'III'),
(954, 5403, 'Oktober', '2025/2026', 0, 'III'),
(955, 5403, 'November', '2025/2026', 0, 'III'),
(956, 5403, 'Desember', '2025/2026', 0, 'III'),
(957, 5403, 'Januari', '2025/2026', 0, 'III'),
(958, 5403, 'Februari', '2025/2026', 0, 'III'),
(959, 5403, 'Maret', '2025/2026', 0, 'III'),
(960, 5403, 'April', '2025/2026', 0, 'III'),
(961, 5403, 'Mei', '2025/2026', 0, 'III'),
(962, 5402, 'Juni', '2023/2024', 0, 'I'),
(963, 5402, 'Juli', '2023/2024', 0, 'I'),
(964, 5402, 'Agustus', '2023/2024', 0, 'I'),
(965, 5402, 'September', '2023/2024', 0, 'I'),
(966, 5402, 'Oktober', '2023/2024', 0, 'I'),
(967, 5402, 'November', '2023/2024', 0, 'I'),
(968, 5402, 'Desember', '2023/2024', 0, 'I'),
(969, 5402, 'Januari', '2023/2024', 0, 'I'),
(970, 5402, 'Februari', '2023/2024', 0, 'I'),
(971, 5402, 'Maret', '2023/2024', 0, 'I'),
(972, 5402, 'April', '2023/2024', 0, 'I'),
(973, 5402, 'Mei', '2023/2024', 0, 'I'),
(974, 5402, 'Juni', '2024/2025', 0, 'II'),
(975, 5402, 'Juli', '2024/2025', 0, 'II'),
(976, 5402, 'Agustus', '2024/2025', 0, 'II'),
(977, 5402, 'September', '2024/2025', 0, 'II'),
(978, 5402, 'Oktober', '2024/2025', 0, 'II'),
(979, 5402, 'November', '2024/2025', 0, 'II'),
(980, 5402, 'Desember', '2024/2025', 0, 'II'),
(981, 5402, 'Januari', '2024/2025', 0, 'II'),
(982, 5402, 'Februari', '2024/2025', 0, 'II'),
(983, 5402, 'Maret', '2024/2025', 0, 'II'),
(984, 5402, 'April', '2024/2025', 0, 'II'),
(985, 5402, 'Mei', '2024/2025', 0, 'II'),
(986, 5402, 'Juni', '2025/2026', 0, 'III'),
(987, 5402, 'Juli', '2025/2026', 0, 'III'),
(988, 5402, 'Agustus', '2025/2026', 0, 'III'),
(989, 5402, 'September', '2025/2026', 0, 'III'),
(990, 5402, 'Oktober', '2025/2026', 0, 'III'),
(991, 5402, 'November', '2025/2026', 0, 'III'),
(992, 5402, 'Desember', '2025/2026', 0, 'III'),
(993, 5402, 'Januari', '2025/2026', 0, 'III'),
(994, 5402, 'Februari', '2025/2026', 0, 'III'),
(995, 5402, 'Maret', '2025/2026', 0, 'III'),
(996, 5402, 'April', '2025/2026', 0, 'III'),
(997, 5402, 'Mei', '2025/2026', 0, 'III'),
(1106, 5401, 'Juni', '2023/2024', 0, 'I'),
(1107, 5401, 'Juli', '2023/2024', 0, 'I'),
(1108, 5401, 'Agustus', '2023/2024', 0, 'I'),
(1109, 5401, 'September', '2023/2024', 0, 'I'),
(1110, 5401, 'Oktober', '2023/2024', 0, 'I'),
(1111, 5401, 'November', '2023/2024', 0, 'I'),
(1112, 5401, 'Desember', '2023/2024', 0, 'I'),
(1113, 5401, 'Januari', '2023/2024', 0, 'I'),
(1114, 5401, 'Februari', '2023/2024', 0, 'I'),
(1115, 5401, 'Maret', '2023/2024', 0, 'I'),
(1116, 5401, 'April', '2023/2024', 0, 'I'),
(1117, 5401, 'Mei', '2023/2024', 0, 'I'),
(1118, 5401, 'Juni', '2024/2025', 0, 'II'),
(1119, 5401, 'Juli', '2024/2025', 0, 'II'),
(1120, 5401, 'Agustus', '2024/2025', 0, 'II'),
(1121, 5401, 'September', '2024/2025', 0, 'II'),
(1122, 5401, 'Oktober', '2024/2025', 0, 'II'),
(1123, 5401, 'November', '2024/2025', 0, 'II'),
(1124, 5401, 'Desember', '2024/2025', 0, 'II'),
(1125, 5401, 'Januari', '2024/2025', 0, 'II'),
(1126, 5401, 'Februari', '2024/2025', 0, 'II'),
(1127, 5401, 'Maret', '2024/2025', 0, 'II'),
(1128, 5401, 'April', '2024/2025', 0, 'II'),
(1129, 5401, 'Mei', '2024/2025', 0, 'II'),
(1130, 5401, 'Juni', '2025/2026', 0, 'III'),
(1131, 5401, 'Juli', '2025/2026', 0, 'III'),
(1132, 5401, 'Agustus', '2025/2026', 0, 'III'),
(1133, 5401, 'September', '2025/2026', 0, 'III'),
(1134, 5401, 'Oktober', '2025/2026', 0, 'III'),
(1135, 5401, 'November', '2025/2026', 0, 'III'),
(1136, 5401, 'Desember', '2025/2026', 0, 'III'),
(1137, 5401, 'Januari', '2025/2026', 0, 'III'),
(1138, 5401, 'Februari', '2025/2026', 0, 'III'),
(1139, 5401, 'Maret', '2025/2026', 0, 'III'),
(1140, 5401, 'April', '2025/2026', 0, 'III'),
(1141, 5401, 'Mei', '2025/2026', 0, 'III'),
(1142, 5412, 'Juni', '2023/2024', 0, 'I'),
(1143, 5412, 'Juli', '2023/2024', 0, 'I'),
(1144, 5412, 'Agustus', '2023/2024', 0, 'I'),
(1145, 5412, 'September', '2023/2024', 0, 'I'),
(1146, 5412, 'Oktober', '2023/2024', 0, 'I'),
(1147, 5412, 'November', '2023/2024', 0, 'I'),
(1148, 5412, 'Desember', '2023/2024', 0, 'I'),
(1149, 5412, 'Januari', '2023/2024', 0, 'I'),
(1150, 5412, 'Februari', '2023/2024', 0, 'I'),
(1151, 5412, 'Maret', '2023/2024', 0, 'I'),
(1152, 5412, 'April', '2023/2024', 0, 'I'),
(1153, 5412, 'Mei', '2023/2024', 0, 'I'),
(1154, 5412, 'Juni', '2024/2025', 0, 'II'),
(1155, 5412, 'Juli', '2024/2025', 0, 'II'),
(1156, 5412, 'Agustus', '2024/2025', 0, 'II'),
(1157, 5412, 'September', '2024/2025', 0, 'II'),
(1158, 5412, 'Oktober', '2024/2025', 0, 'II'),
(1159, 5412, 'November', '2024/2025', 0, 'II'),
(1160, 5412, 'Desember', '2024/2025', 0, 'II'),
(1161, 5412, 'Januari', '2024/2025', 0, 'II'),
(1162, 5412, 'Februari', '2024/2025', 0, 'II'),
(1163, 5412, 'Maret', '2024/2025', 0, 'II'),
(1164, 5412, 'April', '2024/2025', 0, 'II'),
(1165, 5412, 'Mei', '2024/2025', 0, 'II'),
(1166, 5412, 'Juni', '2025/2026', 0, 'III'),
(1167, 5412, 'Juli', '2025/2026', 0, 'III'),
(1168, 5412, 'Agustus', '2025/2026', 0, 'III'),
(1169, 5412, 'September', '2025/2026', 0, 'III'),
(1170, 5412, 'Oktober', '2025/2026', 0, 'III'),
(1171, 5412, 'November', '2025/2026', 0, 'III'),
(1172, 5412, 'Desember', '2025/2026', 0, 'III'),
(1173, 5412, 'Januari', '2025/2026', 0, 'III'),
(1174, 5412, 'Februari', '2025/2026', 0, 'III'),
(1175, 5412, 'Maret', '2025/2026', 0, 'III'),
(1176, 5412, 'April', '2025/2026', 0, 'III'),
(1177, 5412, 'Mei', '2025/2026', 0, 'III'),
(1178, 5413, 'Juni', '2023/2024', 0, 'I'),
(1179, 5413, 'Juli', '2023/2024', 0, 'I'),
(1180, 5413, 'Agustus', '2023/2024', 0, 'I'),
(1181, 5413, 'September', '2023/2024', 0, 'I'),
(1182, 5413, 'Oktober', '2023/2024', 0, 'I'),
(1183, 5413, 'November', '2023/2024', 0, 'I'),
(1184, 5413, 'Desember', '2023/2024', 0, 'I'),
(1185, 5413, 'Januari', '2023/2024', 0, 'I'),
(1186, 5413, 'Februari', '2023/2024', 0, 'I'),
(1187, 5413, 'Maret', '2023/2024', 0, 'I'),
(1188, 5413, 'April', '2023/2024', 0, 'I'),
(1189, 5413, 'Mei', '2023/2024', 0, 'I'),
(1190, 5413, 'Juni', '2024/2025', 0, 'II'),
(1191, 5413, 'Juli', '2024/2025', 0, 'II'),
(1192, 5413, 'Agustus', '2024/2025', 0, 'II'),
(1193, 5413, 'September', '2024/2025', 0, 'II'),
(1194, 5413, 'Oktober', '2024/2025', 0, 'II'),
(1195, 5413, 'November', '2024/2025', 0, 'II'),
(1196, 5413, 'Desember', '2024/2025', 0, 'II'),
(1197, 5413, 'Januari', '2024/2025', 0, 'II'),
(1198, 5413, 'Februari', '2024/2025', 0, 'II'),
(1199, 5413, 'Maret', '2024/2025', 0, 'II'),
(1200, 5413, 'April', '2024/2025', 0, 'II'),
(1201, 5413, 'Mei', '2024/2025', 0, 'II'),
(1202, 5413, 'Juni', '2025/2026', 0, 'III'),
(1203, 5413, 'Juli', '2025/2026', 0, 'III'),
(1204, 5413, 'Agustus', '2025/2026', 0, 'III'),
(1205, 5413, 'September', '2025/2026', 0, 'III'),
(1206, 5413, 'Oktober', '2025/2026', 0, 'III'),
(1207, 5413, 'November', '2025/2026', 0, 'III'),
(1208, 5413, 'Desember', '2025/2026', 0, 'III'),
(1209, 5413, 'Januari', '2025/2026', 0, 'III'),
(1210, 5413, 'Februari', '2025/2026', 0, 'III'),
(1211, 5413, 'Maret', '2025/2026', 0, 'III'),
(1212, 5413, 'April', '2025/2026', 0, 'III'),
(1213, 5413, 'Mei', '2025/2026', 0, 'III'),
(1214, 5414, 'Juni', '2023/2024', 0, 'I'),
(1215, 5414, 'Juli', '2023/2024', 0, 'I'),
(1216, 5414, 'Agustus', '2023/2024', 0, 'I'),
(1217, 5414, 'September', '2023/2024', 0, 'I'),
(1218, 5414, 'Oktober', '2023/2024', 0, 'I'),
(1219, 5414, 'November', '2023/2024', 0, 'I'),
(1220, 5414, 'Desember', '2023/2024', 0, 'I'),
(1221, 5414, 'Januari', '2023/2024', 0, 'I'),
(1222, 5414, 'Februari', '2023/2024', 0, 'I'),
(1223, 5414, 'Maret', '2023/2024', 0, 'I'),
(1224, 5414, 'April', '2023/2024', 0, 'I'),
(1225, 5414, 'Mei', '2023/2024', 0, 'I'),
(1226, 5414, 'Juni', '2024/2025', 0, 'II'),
(1227, 5414, 'Juli', '2024/2025', 0, 'II'),
(1228, 5414, 'Agustus', '2024/2025', 0, 'II'),
(1229, 5414, 'September', '2024/2025', 0, 'II'),
(1230, 5414, 'Oktober', '2024/2025', 0, 'II'),
(1231, 5414, 'November', '2024/2025', 0, 'II'),
(1232, 5414, 'Desember', '2024/2025', 0, 'II'),
(1233, 5414, 'Januari', '2024/2025', 0, 'II'),
(1234, 5414, 'Februari', '2024/2025', 0, 'II'),
(1235, 5414, 'Maret', '2024/2025', 0, 'II'),
(1236, 5414, 'April', '2024/2025', 0, 'II'),
(1237, 5414, 'Mei', '2024/2025', 0, 'II'),
(1238, 5414, 'Juni', '2025/2026', 0, 'III'),
(1239, 5414, 'Juli', '2025/2026', 0, 'III'),
(1240, 5414, 'Agustus', '2025/2026', 0, 'III'),
(1241, 5414, 'September', '2025/2026', 0, 'III'),
(1242, 5414, 'Oktober', '2025/2026', 0, 'III'),
(1243, 5414, 'November', '2025/2026', 0, 'III'),
(1244, 5414, 'Desember', '2025/2026', 0, 'III'),
(1245, 5414, 'Januari', '2025/2026', 0, 'III'),
(1246, 5414, 'Februari', '2025/2026', 0, 'III'),
(1247, 5414, 'Maret', '2025/2026', 0, 'III'),
(1248, 5414, 'April', '2025/2026', 0, 'III'),
(1249, 5414, 'Mei', '2025/2026', 0, 'III');

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
('01', 'Gungde Solahudin', 'gungdin', 'petugas12', 'Admin', '087645322234'),
('02', 'Arta Wijaya', 'artawi', 'art123', 'Petugas', '087352625415');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `password`, `id_kelas`, `jenis_kelamin`, `alamat`) VALUES
(5401, 'Agus Eka Wijaya', '123456', 'R-10', 'L', 'Jl. Pulau Sunco'),
(5402, 'I Noman Putra Palguna', '123456', 'R-10', 'L', 'Jl.Raya Sesetan'),
(5403, 'Made Lingga Wiranata', '123456', 'R-10', 'L', 'Jl.Renon'),
(5404, 'Arinda Tika agustin', '123456', 'R-10', 'P', 'jl.Isekai'),
(5405, 'Muhamad Cok Bagus', '123456', 'R-10', 'L', 'jl.Tukad Citarum'),
(5406, 'Dony Salmanan', '123456', 'R-10', 'L', 'Jl.Sudirman'),
(5407, 'I Gede Radirya', '123456', 'R-10', 'L', 'jl.sanur'),
(5408, 'Dewi Turmini', '123456', 'R-10', 'P', 'Jl. Kikukik Sawah'),
(5409, 'Salma Febriyanti', '123456', 'R-10', 'P', 'Jl. Gatot Kayu'),
(5410, 'Salsabilla Gusnia', '123456', 'R-10', 'P', 'Jl. Tukad Citarum'),
(5411, 'Dewa Krsna Yanas', '123456', 'R-10', 'L', 'Jl. Akasia Timur'),
(5412, 'Inyo Mansur Yadana', '123456', 'R-10', 'L', 'Jl. Pulau Bungin'),
(5413, 'I Kadek Ryan', '123456', 'R-10', 'L', 'Jl. Sesetan'),
(5414, 'Rizky Ryan Sahadha', '123456', 'R-10', 'L', 'Jl. Pulau Moyo');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1250;

--
-- AUTO_INCREMENT for table `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  ADD CONSTRAINT `fk_nip` FOREIGN KEY (`nip`) REFERENCES `tb_petugas` (`nip`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nis_spp` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
