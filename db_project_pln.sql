-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 04:53 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project_pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_approval`
--

CREATE TABLE `tb_approval` (
  `id` int(11) NOT NULL,
  `kode_project` char(35) NOT NULL,
  `kode_user` char(5) NOT NULL,
  `type` varchar(25) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_approval`
--

INSERT INTO `tb_approval` (`id`, `kode_project`, `kode_user`, `type`, `ket`, `tgl`) VALUES
(1, 'K.001/AMANK2K3/CIANJUR/III/2019', 'U0001', 'new', '', '2019-03-20 11:55:42'),
(2, 'K.002/AMANK2K3/CIANJUR/III/2019', 'U0001', 'new', '', '2019-03-20 14:14:08'),
(3, 'K.003/AMANK2K3/CIANJUR/III/2019', 'U0001', 'new', '', '2019-03-20 15:04:10'),
(6, 'P.001/AMANK2K3/CIANJUR/III/2019', 'U0001', 'new', '', '2019-03-21 16:35:21'),
(7, 'P.001/AMANK2K3/CIANJUR/III/2019', 'U0001', 'send', '', '2019-03-21 16:43:15'),
(8, 'K.002/AMANK2K3/CIANJUR/III/2019', 'U0003', 'approve', '', '2019-03-21 16:54:47'),
(9, 'P.001/AMANK2K3/CIANJUR/III/2019', 'U0002', 'approve', '', '2019-03-21 17:15:40'),
(10, 'P.001/AMANK2K3/CIANJUR/III/2019', 'U0002', 'approve', '', '2019-03-21 18:22:12'),
(11, 'K.004/AMANK2K3/CIANJUR/III/2019', 'U0001', 'new', '', '2019-03-21 18:24:11'),
(12, 'K.005/AMANK2K3/CIANJUR/III/2019', 'U0001', 'new', '', '2019-03-22 13:20:22'),
(13, 'K.004/AMANK2K3/CIANJUR/III/2019', 'U0001', 'approve', '', '2019-03-22 14:09:14'),
(14, 'K.004/AMANK2K3/CIANJUR/III/2019', 'U0001', 'approve', '', '2019-03-22 14:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas_terakhir`
--

CREATE TABLE `tb_berkas_terakhir` (
  `kode_project` char(35) NOT NULL,
  `kode_user` char(5) NOT NULL,
  `divisi_tujuan` char(5) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas_terakhir`
--

INSERT INTO `tb_berkas_terakhir` (`kode_project`, `kode_user`, `divisi_tujuan`, `tgl`) VALUES
('K.001/AMANK2K3/CIANJUR/III/2019', 'U0002', '3', '2019-03-20 12:05:55'),
('K.002/AMANK2K3/CIANJUR/III/2019', 'U0003', '4', '2019-03-20 14:15:30'),
('K.003/AMANK2K3/CIANJUR/III/2019', 'U0007', '0', '2019-03-20 15:05:49'),
('P.001/AMANK2K3/CIANJUR/III/2019', 'U0002', '3', '2019-03-21 17:15:40'),
('K.004/AMANK2K3/CIANJUR/III/2019', 'U0001', '2', '2019-03-22 14:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_klasifikasi`
--

CREATE TABLE `tb_det_klasifikasi` (
  `kode_project` char(35) NOT NULL,
  `kode_klasifikasi_kerja` char(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_det_klasifikasi`
--

INSERT INTO `tb_det_klasifikasi` (`kode_project`, `kode_klasifikasi_kerja`) VALUES
('K.001/AMANK2K3/CIANJUR/III/2019', '23892'),
('K.001/AMANK2K3/CIANJUR/III/2019', '51466'),
('K.001/AMANK2K3/CIANJUR/III/2019', '78501'),
('K.001/AMANK2K3/CIANJUR/III/2019', '82132'),
('K.001/AMANK2K3/CIANJUR/III/2019', '95742'),
('K.001/AMANK2K3/CIANJUR/III/2019', '96360'),
('K.001/AMANK2K3/CIANJUR/III/2019', '99399'),
('K.001/AMANK2K3/CIANJUR/III/2019', '99892'),
('K.002/AMANK2K3/CIANJUR/III/2019', '51466'),
('K.002/AMANK2K3/CIANJUR/III/2019', '82132'),
('K.002/AMANK2K3/CIANJUR/III/2019', '99399'),
('K.003/AMANK2K3/CIANJUR/III/2019', '51466'),
('K.003/AMANK2K3/CIANJUR/III/2019', '78501'),
('K.003/AMANK2K3/CIANJUR/III/2019', '82132'),
('K.003/AMANK2K3/CIANJUR/III/2019', '96360'),
('K.003/AMANK2K3/CIANJUR/III/2019', '99399'),
('P.001/AMANK2K3/CIANJUR/III/2019', '23892'),
('P.001/AMANK2K3/CIANJUR/III/2019', '51466'),
('P.001/AMANK2K3/CIANJUR/III/2019', '70333'),
('P.001/AMANK2K3/CIANJUR/III/2019', '78501'),
('P.001/AMANK2K3/CIANJUR/III/2019', '82132'),
('P.001/AMANK2K3/CIANJUR/III/2019', '95742'),
('P.001/AMANK2K3/CIANJUR/III/2019', '96360'),
('P.001/AMANK2K3/CIANJUR/III/2019', '99399'),
('P.001/AMANK2K3/CIANJUR/III/2019', '99892'),
('K.004/AMANK2K3/CIANJUR/III/2019', '23892'),
('K.004/AMANK2K3/CIANJUR/III/2019', '78501'),
('K.005/AMANK2K3/CIANJUR/III/2019', '23892'),
('K.005/AMANK2K3/CIANJUR/III/2019', '78501');

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_lampiran_izin_kerja`
--

CREATE TABLE `tb_det_lampiran_izin_kerja` (
  `kode_project` char(35) NOT NULL,
  `kode_lampiran_izin_kerja` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_det_lampiran_izin_kerja`
--

INSERT INTO `tb_det_lampiran_izin_kerja` (`kode_project`, `kode_lampiran_izin_kerja`) VALUES
('K.001/AMANK2K3/CIANJUR/III/2019', '22235'),
('K.001/AMANK2K3/CIANJUR/III/2019', '3969'),
('K.002/AMANK2K3/CIANJUR/III/2019', '26038'),
('K.003/AMANK2K3/CIANJUR/III/2019', '22235'),
('K.003/AMANK2K3/CIANJUR/III/2019', '26038'),
('K.003/AMANK2K3/CIANJUR/III/2019', '3969'),
('P.001/AMANK2K3/CIANJUR/III/2019', '22235'),
('P.001/AMANK2K3/CIANJUR/III/2019', '26038'),
('P.001/AMANK2K3/CIANJUR/III/2019', '35449'),
('P.001/AMANK2K3/CIANJUR/III/2019', '3969'),
('K.004/AMANK2K3/CIANJUR/III/2019', '22235'),
('K.004/AMANK2K3/CIANJUR/III/2019', '3969'),
('K.005/AMANK2K3/CIANJUR/III/2019', '22235');

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_pekerja`
--

CREATE TABLE `tb_det_pekerja` (
  `kode_project` char(35) NOT NULL,
  `kode_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_det_pekerja`
--

INSERT INTO `tb_det_pekerja` (`kode_project`, `kode_user`) VALUES
('K.002/AMANK2K3/CIANJUR/III/2019', '2'),
('K.002/AMANK2K3/CIANJUR/III/2019', '3'),
('K.003/AMANK2K3/CIANJUR/III/2019', '3'),
('K.003/AMANK2K3/CIANJUR/III/2019', '5'),
('P.001/AMANK2K3/CIANJUR/III/2019', '1'),
('K.004/AMANK2K3/CIANJUR/III/2019', '2'),
('K.005/AMANK2K3/CIANJUR/III/2019', '30'),
('K.005/AMANK2K3/CIANJUR/III/2019', '12'),
('K.005/AMANK2K3/CIANJUR/III/2019', '35'),
('K.005/AMANK2K3/CIANJUR/III/2019', '10'),
('K.005/AMANK2K3/CIANJUR/III/2019', '42'),
('K.005/AMANK2K3/CIANJUR/III/2019', '17'),
('K.005/AMANK2K3/CIANJUR/III/2019', '1'),
('K.005/AMANK2K3/CIANJUR/III/2019', '4'),
('K.001/AMANK2K3/CIANJUR/III/2019', '3'),
('K.001/AMANK2K3/CIANJUR/III/2019', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_pelaksana`
--

CREATE TABLE `tb_det_pelaksana` (
  `kode_pelaksana` int(11) NOT NULL,
  `kode_project` char(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_det_pelaksana`
--

INSERT INTO `tb_det_pelaksana` (`kode_pelaksana`, `kode_project`) VALUES
(1, 'K.002/AMANK2K3/CIANJUR/III/2019'),
(1, 'K.003/AMANK2K3/CIANJUR/III/2019'),
(3, 'K.003/AMANK2K3/CIANJUR/III/2019'),
(4, 'K.002/AMANK2K3/CIANJUR/III/2019'),
(1, 'P.001/AMANK2K3/CIANJUR/III/2019'),
(2, 'P.001/AMANK2K3/CIANJUR/III/2019'),
(1, 'K.005/AMANK2K3/CIANJUR/III/2019'),
(3, 'K.005/AMANK2K3/CIANJUR/III/2019'),
(2, 'K.005/AMANK2K3/CIANJUR/III/2019'),
(1, 'K.001/AMANK2K3/CIANJUR/III/2019'),
(2, 'K.001/AMANK2K3/CIANJUR/III/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_peralatan_kerja`
--

CREATE TABLE `tb_det_peralatan_kerja` (
  `kode_project` char(35) NOT NULL,
  `kode_peralatan_kerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_det_peralatan_kerja`
--

INSERT INTO `tb_det_peralatan_kerja` (`kode_project`, `kode_peralatan_kerja`) VALUES
('K.001/AMANK2K3/CIANJUR/III/2019', 26912),
('K.001/AMANK2K3/CIANJUR/III/2019', 69929),
('K.001/AMANK2K3/CIANJUR/III/2019', 73528),
('K.001/AMANK2K3/CIANJUR/III/2019', 3332),
('K.001/AMANK2K3/CIANJUR/III/2019', 6493),
('K.001/AMANK2K3/CIANJUR/III/2019', 57694),
('K.002/AMANK2K3/CIANJUR/III/2019', 26912),
('K.002/AMANK2K3/CIANJUR/III/2019', 31556),
('K.002/AMANK2K3/CIANJUR/III/2019', 73528),
('K.002/AMANK2K3/CIANJUR/III/2019', 6493),
('K.002/AMANK2K3/CIANJUR/III/2019', 57694),
('K.003/AMANK2K3/CIANJUR/III/2019', 26912),
('K.003/AMANK2K3/CIANJUR/III/2019', 31556),
('K.003/AMANK2K3/CIANJUR/III/2019', 69929),
('K.003/AMANK2K3/CIANJUR/III/2019', 73528),
('K.003/AMANK2K3/CIANJUR/III/2019', 3332),
('K.003/AMANK2K3/CIANJUR/III/2019', 57694),
('P.001/AMANK2K3/CIANJUR/III/2019', 26912),
('P.001/AMANK2K3/CIANJUR/III/2019', 31556),
('P.001/AMANK2K3/CIANJUR/III/2019', 50142),
('P.001/AMANK2K3/CIANJUR/III/2019', 69929),
('P.001/AMANK2K3/CIANJUR/III/2019', 73528),
('P.001/AMANK2K3/CIANJUR/III/2019', 3332),
('P.001/AMANK2K3/CIANJUR/III/2019', 6493),
('P.001/AMANK2K3/CIANJUR/III/2019', 40824),
('P.001/AMANK2K3/CIANJUR/III/2019', 57694),
('K.004/AMANK2K3/CIANJUR/III/2019', 26912),
('K.004/AMANK2K3/CIANJUR/III/2019', 69929),
('K.005/AMANK2K3/CIANJUR/III/2019', 26912),
('K.005/AMANK2K3/CIANJUR/III/2019', 3332),
('K.005/AMANK2K3/CIANJUR/III/2019', 6493);

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_project`
--

CREATE TABLE `tb_det_project` (
  `kode_project` char(35) NOT NULL,
  `kode_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_det_project`
--

INSERT INTO `tb_det_project` (`kode_project`, `kode_user`) VALUES
('K.002/AMANK2K3/CIANJUR/III/2019', 'U0000'),
('K.002/AMANK2K3/CIANJUR/III/2019', 'U0002'),
('K.002/AMANK2K3/CIANJUR/III/2019', 'U0003'),
('K.002/AMANK2K3/CIANJUR/III/2019', 'U0004'),
('K.003/AMANK2K3/CIANJUR/III/2019', 'U0000'),
('K.003/AMANK2K3/CIANJUR/III/2019', 'U0002'),
('K.003/AMANK2K3/CIANJUR/III/2019', 'U0003'),
('K.003/AMANK2K3/CIANJUR/III/2019', 'U0004'),
('P.001/AMANK2K3/CIANJUR/III/2019', 'U0000'),
('P.001/AMANK2K3/CIANJUR/III/2019', 'U0002'),
('P.001/AMANK2K3/CIANJUR/III/2019', 'U0003'),
('P.001/AMANK2K3/CIANJUR/III/2019', 'U0004'),
('P.002/AMANK2K3/CIANJUR/III/2019', 'U0000'),
('P.002/AMANK2K3/CIANJUR/III/2019', 'U0002'),
('P.002/AMANK2K3/CIANJUR/III/2019', 'U0003'),
('P.002/AMANK2K3/CIANJUR/III/2019', 'U0004'),
('P.001/AMANK2K3/CIANJUR/III/2019', 'U0002'),
('P.001/AMANK2K3/CIANJUR/III/2019', 'U0003'),
('P.001/AMANK2K3/CIANJUR/III/2019', 'U0004'),
('K.004/AMANK2K3/CIANJUR/III/2019', 'U0002'),
('K.004/AMANK2K3/CIANJUR/III/2019', 'U0003'),
('K.004/AMANK2K3/CIANJUR/III/2019', 'U0004'),
('K.005/AMANK2K3/CIANJUR/III/2019', 'U0002'),
('K.005/AMANK2K3/CIANJUR/III/2019', 'U0003'),
('K.005/AMANK2K3/CIANJUR/III/2019', 'U0004');

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_prosedur_kerja`
--

CREATE TABLE `tb_det_prosedur_kerja` (
  `kode_project` char(35) NOT NULL,
  `kode_prosedur_kerja` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_det_prosedur_kerja`
--

INSERT INTO `tb_det_prosedur_kerja` (`kode_project`, `kode_prosedur_kerja`) VALUES
('K.001/AMANK2K3/CIANJUR/III/2019', '20792'),
('K.001/AMANK2K3/CIANJUR/III/2019', '48097'),
('K.001/AMANK2K3/CIANJUR/III/2019', '56289'),
('K.001/AMANK2K3/CIANJUR/III/2019', '78284'),
('K.001/AMANK2K3/CIANJUR/III/2019', '91262'),
('K.002/AMANK2K3/CIANJUR/III/2019', '22132'),
('K.002/AMANK2K3/CIANJUR/III/2019', '56289'),
('K.002/AMANK2K3/CIANJUR/III/2019', '91262'),
('K.003/AMANK2K3/CIANJUR/III/2019', '20792'),
('K.003/AMANK2K3/CIANJUR/III/2019', '48097'),
('K.003/AMANK2K3/CIANJUR/III/2019', '78284'),
('P.001/AMANK2K3/CIANJUR/III/2019', '20792'),
('P.001/AMANK2K3/CIANJUR/III/2019', '22132'),
('P.001/AMANK2K3/CIANJUR/III/2019', '29948'),
('P.001/AMANK2K3/CIANJUR/III/2019', '48097'),
('P.001/AMANK2K3/CIANJUR/III/2019', '56289'),
('P.001/AMANK2K3/CIANJUR/III/2019', '77502'),
('P.001/AMANK2K3/CIANJUR/III/2019', '78284'),
('P.001/AMANK2K3/CIANJUR/III/2019', '91262'),
('P.001/AMANK2K3/CIANJUR/III/2019', '92314'),
('K.004/AMANK2K3/CIANJUR/III/2019', '20792'),
('K.004/AMANK2K3/CIANJUR/III/2019', '56289'),
('K.005/AMANK2K3/CIANJUR/III/2019', '48097'),
('K.005/AMANK2K3/CIANJUR/III/2019', '78284');

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_uraian_pekerjaan`
--

CREATE TABLE `tb_det_uraian_pekerjaan` (
  `kode_uraian_pekerjaan` int(11) NOT NULL,
  `uraian_pekerjaan` varchar(40) NOT NULL,
  `jam` time NOT NULL,
  `keterangan` text NOT NULL,
  `kode_project` char(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_det_uraian_pekerjaan`
--

INSERT INTO `tb_det_uraian_pekerjaan` (`kode_uraian_pekerjaan`, `uraian_pekerjaan`, `jam`, `keterangan`, `kode_project`) VALUES
(1, 'Mulai', '09:10:00', 'asd', 'K.001/AMANK2K3/CIANJUR/III/2019'),
(2, 'Mulai juga', '11:10:00', '', 'K.001/AMANK2K3/CIANJUR/III/2019'),
(3, 'Mulai 1', '09:00:00', '', 'K.003/AMANK2K3/CIANJUR/III/2019'),
(4, 'Mulai 2', '10:00:00', '', 'K.003/AMANK2K3/CIANJUR/III/2019'),
(5, 'Mulai', '08:00:00', 'tes', 'P.001/AMANK2K3/CIANJUR/III/2019'),
(6, 'Selesai', '11:00:00', 'tes', 'P.001/AMANK2K3/CIANJUR/III/2019'),
(7, 'Mulai', '10:00:00', 'mulai ah', 'K.004/AMANK2K3/CIANJUR/III/2019'),
(8, 'Selesai', '00:00:00', 'mulai ah', 'K.004/AMANK2K3/CIANJUR/III/2019'),
(9, 'Mulai', '07:00:00', 'Mulai', 'K.005/AMANK2K3/CIANJUR/III/2019'),
(10, 'Selesai', '08:00:00', 'selesai', 'K.005/AMANK2K3/CIANJUR/III/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `kode_divisi` char(5) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` datetime NOT NULL,
  `tgl_input_divisi` datetime NOT NULL,
  `parent_divisi` char(5) NOT NULL,
  `child_divisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`kode_divisi`, `nama_divisi`, `last_modified`, `last_modified_user`, `tgl_input_divisi`, `parent_divisi`, `child_divisi`) VALUES
('1', 'Staf Teknik ULP', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2', 0),
('100', 'Admin', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2', 0),
('2', 'PKP3L ULP', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '3', 1),
('3', 'Spv. Teknik ULP', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '4', 2),
('4', 'Manager ULP', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '5', 3),
('5', 'Spv. HARJAR', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '6', 4),
('6', 'Spv. OPDIST', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '7', 5),
('7', 'MB. Jaringan', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '0', 6),
('8', 'Dispatcher', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gardu_induk`
--

CREATE TABLE `tb_gardu_induk` (
  `kode_gardu_induk` int(11) NOT NULL,
  `nama_gardu` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gardu_induk`
--

INSERT INTO `tb_gardu_induk` (`kode_gardu_induk`, `nama_gardu`, `tgl`) VALUES
(1, 'Cianjur', '2019-03-21'),
(6, 'Cijoho', '2019-03-21'),
(7, 'Leweng', '2019-03-21'),
(13, 'Bojong', '2019-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_pekerjaan`
--

CREATE TABLE `tb_jenis_pekerjaan` (
  `kode_jenis_pekerjaan` char(5) NOT NULL,
  `nama_jenis_pekerjaan` varchar(50) NOT NULL,
  `tgl_input_pekerjaan` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `kode_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_pekerjaan`
--

INSERT INTO `tb_jenis_pekerjaan` (`kode_jenis_pekerjaan`, `nama_jenis_pekerjaan`, `tgl_input_pekerjaan`, `last_modified`, `last_modified_user`, `kode_user`) VALUES
('H0001', 'HAR KUBIKEL', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '12345', '12345'),
('H0002', 'PEMASANGAN TIANG', '2019-03-15 00:00:00', '2019-03-15 06:00:00', '12345', '12345'),
('H0003', 'PENGGANTIAN ISOLATOR', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '12345', '12345'),
('H0004', 'MUTASI TRAFO', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '12345', '12345'),
('H0005', 'ROWS', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klasifikasi_kerja`
--

CREATE TABLE `tb_klasifikasi_kerja` (
  `kode_klasifikasi_kerja` char(5) NOT NULL,
  `nama_klasifikasi_kerja` varchar(50) NOT NULL,
  `tgl_input_klasifikasi_kerja` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `kode_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_klasifikasi_kerja`
--

INSERT INTO `tb_klasifikasi_kerja` (`kode_klasifikasi_kerja`, `nama_klasifikasi_kerja`, `tgl_input_klasifikasi_kerja`, `last_modified`, `last_modified_user`, `kode_user`) VALUES
('23892', 'Pekerjaan Sipil', '2019-03-18 11:43:43', '2019-03-18 11:43:43', 'U0000', 'U0000'),
('51466', 'Pekerjaan Confined Space', '2019-03-18 11:43:43', '2019-03-18 11:43:43', 'U0000', 'U0000'),
('70333', 'Pekerjaan Panas', '2019-03-18 11:43:43', '2019-03-18 11:43:43', 'U0000', 'U0000'),
('78501', 'Pekerjaan penggalian', '2019-03-18 11:43:43', '2019-03-18 11:43:43', 'U0000', 'U0000'),
('82132', 'Pekerjaan Perampalan Pohon', '2019-03-18 11:43:43', '2019-03-18 11:43:43', 'U0000', 'U0000'),
('95742', 'Pekerjaan di ketinggian', '2019-03-18 11:43:43', '2019-03-18 11:43:43', 'U0000', 'U0000'),
('96360', 'Pekerjaan penanaman Tiang', '2019-03-18 11:43:43', '2019-03-18 11:43:43', 'U0000', 'U0000'),
('99399', 'Pekerjaan Bertenaga Listrik', '2019-03-18 11:43:43', '2019-03-18 11:43:43', 'U0000', 'U0000'),
('99892', 'Pekerjaan Bahan Kimia', '2019-03-18 11:43:43', '2019-03-18 11:43:43', 'U0000', 'U0000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lampiran_izin_kerja`
--

CREATE TABLE `tb_lampiran_izin_kerja` (
  `kode_lampiran_izin_kerja` char(5) NOT NULL,
  `nama_lampiran_izin_kerja` varchar(70) NOT NULL,
  `tgl_input_lampiran_izin_kerja` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `kode_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lampiran_izin_kerja`
--

INSERT INTO `tb_lampiran_izin_kerja` (`kode_lampiran_izin_kerja`, `nama_lampiran_izin_kerja`, `tgl_input_lampiran_izin_kerja`, `last_modified`, `last_modified_user`, `kode_user`) VALUES
('22235', 'Sertifikat Kompetensi Kerja', '2019-03-18 12:06:53', '2019-03-18 12:06:53', 'U0000', 'U0000'),
('26038', 'Prosedur Kerja', '2019-03-18 12:06:53', '2019-03-18 12:06:53', 'U0000', 'U0000'),
('35449', 'Identifikasi Bahaya,penilaian dan pengendalian resiko', '2019-03-18 12:06:53', '2019-03-18 12:06:53', 'U0000', 'U0000'),
('3969', 'Job Safery Analysis', '2019-03-18 12:06:53', '2019-03-18 12:06:53', 'U0000', 'U0000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelaksana`
--

CREATE TABLE `tb_pelaksana` (
  `kode_pelaksana` int(11) NOT NULL,
  `nama_pelaksana` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelaksana`
--

INSERT INTO `tb_pelaksana` (`kode_pelaksana`, `nama_pelaksana`, `tgl`) VALUES
(1, 'PT Mahiza Karya Mandiri', '2019-03-15'),
(2, 'PT. Syaldi', '2019-03-16'),
(3, 'PT Sanjur Trida Raya', '2019-03-16'),
(4, 'PT Ardis', '2019-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelaksana_pekerja`
--

CREATE TABLE `tb_pelaksana_pekerja` (
  `kode_pelaksana_pekerja` int(11) NOT NULL,
  `kode_pelaksana` int(11) NOT NULL,
  `nama_pelaksana_pekerja` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelaksana_pekerja`
--

INSERT INTO `tb_pelaksana_pekerja` (`kode_pelaksana_pekerja`, `kode_pelaksana`, `nama_pelaksana_pekerja`, `tgl`) VALUES
(1, 2, 'Eman', '2019-03-21'),
(2, 2, 'Tatang', '0000-00-00'),
(3, 2, 'Asep', '0000-00-00'),
(4, 2, 'Ramlan', '0000-00-00'),
(5, 2, 'Hamdan', '0000-00-00'),
(6, 2, 'Dede', '0000-00-00'),
(7, 2, 'Ishan', '0000-00-00'),
(8, 2, 'Dadang', '0000-00-00'),
(9, 1, 'Yayan Sasmita', '0000-00-00'),
(10, 1, 'Kosasih', '0000-00-00'),
(11, 1, 'Deny MR', '0000-00-00'),
(12, 1, 'Iwan Suryadi', '0000-00-00'),
(13, 1, 'Cece Kusnadi', '0000-00-00'),
(14, 1, 'Rida Firmansyah', '0000-00-00'),
(15, 1, 'Apud', '0000-00-00'),
(16, 1, 'Junaedi', '0000-00-00'),
(17, 1, 'Adi Muhamad Yusup', '0000-00-00'),
(18, 1, 'Iwan Setiawan', '0000-00-00'),
(19, 1, 'Dudi Supriyadi', '0000-00-00'),
(20, 1, 'Mulyadi', '0000-00-00'),
(21, 1, 'Kusnadi SP', '0000-00-00'),
(22, 1, 'Wahyu Mediawan', '0000-00-00'),
(23, 1, 'Siti Emi', '0000-00-00'),
(24, 1, 'Reza', '0000-00-00'),
(25, 1, 'Yusup Irsyad', '0000-00-00'),
(26, 1, 'Alfi', '0000-00-00'),
(27, 1, 'M Sani', '0000-00-00'),
(28, 1, 'A Taufik', '0000-00-00'),
(29, 1, 'Iman Harisman', '0000-00-00'),
(30, 1, 'Yudi Alpayadi', '0000-00-00'),
(31, 1, 'Iwan Wahyudin', '0000-00-00'),
(32, 1, 'Didin Sansudin', '0000-00-00'),
(33, 1, 'Ridwan', '0000-00-00'),
(34, 1, 'Ujang Dedi', '0000-00-00'),
(35, 1, 'Agustyo', '0000-00-00'),
(36, 1, 'Dadan', '0000-00-00'),
(37, 1, 'Deni Aripin', '0000-00-00'),
(38, 1, 'M Taufik Ibrahim', '0000-00-00'),
(39, 1, 'Agus Rusnandi', '0000-00-00'),
(40, 1, 'Yayat Efendi', '0000-00-00'),
(41, 1, 'Fauji', '0000-00-00'),
(42, 1, 'Ruby Prana', '0000-00-00'),
(43, 1, 'Deni Alamsyah', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peralatan_kerja`
--

CREATE TABLE `tb_peralatan_kerja` (
  `kode_peralatan_kerja` int(11) NOT NULL,
  `nama_peralatan_kerja` varchar(50) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `kode_user` char(5) NOT NULL,
  `type` enum('Keselamatan','Perlindungan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peralatan_kerja`
--

INSERT INTO `tb_peralatan_kerja` (`kode_peralatan_kerja`, `nama_peralatan_kerja`, `tgl_input`, `last_modified`, `last_modified_user`, `kode_user`, `type`) VALUES
(3332, 'Radio', '2019-03-18 16:06:59', '2019-03-18 16:06:59', 'U0000', 'U0000', 'Keselamatan'),
(6493, 'Pemadam Api', '2019-03-18 16:06:59', '2019-03-18 16:06:59', 'U0000', 'U0000', 'Keselamatan'),
(26912, 'Earmuff', '2019-03-18 16:06:59', '2019-03-18 16:06:59', 'U0000', 'U0000', 'Perlindungan'),
(31556, 'Helm', '2019-03-18 16:06:59', '2019-03-18 16:06:59', 'U0000', 'U0000', 'Perlindungan'),
(40824, 'Loto', '2019-03-18 16:06:59', '2019-03-18 16:06:59', 'U0000', 'U0000', 'Keselamatan'),
(50142, 'Tas', '2019-03-18 16:06:59', '2019-03-18 16:06:59', 'U0000', 'U0000', 'Perlindungan'),
(57694, 'Rambu Keselamatan', '2019-03-18 16:06:59', '2019-03-18 16:06:59', 'U0000', 'U0000', 'Keselamatan'),
(69929, 'Sepatu', '2019-03-18 16:06:59', '2019-03-18 16:06:59', 'U0000', 'U0000', 'Perlindungan'),
(73528, 'Peci', '2019-03-18 16:06:59', '2019-03-18 16:06:59', 'U0000', 'U0000', 'Perlindungan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_project`
--

CREATE TABLE `tb_project` (
  `kode_project` char(35) NOT NULL,
  `tgl_project` datetime NOT NULL,
  `tgl_pengajuan` datetime NOT NULL,
  `tgl_pelaksanaan` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `tgl_approval` datetime NOT NULL,
  `tegangan` int(11) NOT NULL,
  `alamat_project` text NOT NULL,
  `jml_tenaga_kerja` int(11) NOT NULL,
  `material` varchar(20) NOT NULL,
  `peralatan_kerja` varchar(20) NOT NULL,
  `gardu` varchar(50) NOT NULL,
  `jenis_project` enum('Preventif','Korektif') NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `kode_user` char(5) NOT NULL,
  `kode_jenis_pekerjaan` char(5) NOT NULL,
  `kode_line` char(5) NOT NULL,
  `segment` varchar(50) NOT NULL,
  `penyelesaian` text NOT NULL,
  `uniqid` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_project`
--

INSERT INTO `tb_project` (`kode_project`, `tgl_project`, `tgl_pengajuan`, `tgl_pelaksanaan`, `tgl_selesai`, `tgl_approval`, `tegangan`, `alamat_project`, `jml_tenaga_kerja`, `material`, `peralatan_kerja`, `gardu`, `jenis_project`, `last_modified`, `last_modified_user`, `kode_user`, `kode_jenis_pekerjaan`, `kode_line`, `segment`, `penyelesaian`, `uniqid`, `status`) VALUES
('K.001/AMANK2K3/CIANJUR/III/2019', '2019-03-20 12:05:55', '2019-03-20 00:00:00', '2019-03-20 09:09:00', '2019-03-20 22:10:00', '0000-00-00 00:00:00', 20, 'jasdakjsbd', 0, 'Lengkap', 'Lengkap', 'sgvb, syaduh, a ,asdyh', 'Korektif', '2019-03-20 12:05:55', 'U0001', 'U0001', 'H0001', 'S0002', '', '', '5c921c2e099ee', 'pending'),
('K.002/AMANK2K3/CIANJUR/III/2019', '2019-03-20 14:15:30', '2019-03-20 00:00:00', '2019-03-20 09:10:00', '2019-03-20 03:10:00', '0000-00-00 00:00:00', 20, 'asdbahskd', 0, 'Lengkap', 'Lengkap', 'jsdjf, dsfhkd, sdfhsdf', 'Korektif', '2019-03-20 14:15:30', 'U0001', 'U0001', 'H0004', 'S0004', '', '', '5c923ca043109', 'pending'),
('K.003/AMANK2K3/CIANJUR/III/2019', '2019-03-20 15:05:49', '2019-03-20 00:00:00', '2019-03-20 09:00:00', '2019-03-20 17:00:00', '0000-00-00 00:00:00', 20, 'Jl. Barisan Banteng', 0, 'Lengkap', 'Lengkap', 'RIZKI, HARDINAS, PERMANA', 'Korektif', '2019-03-20 15:05:49', 'U0001', 'U0001', 'H0005', 'S0002', '', '', '5c92485ad4504', 'success'),
('K.004/AMANK2K3/CIANJUR/III/2019', '2019-03-21 18:33:23', '2019-03-21 00:00:00', '2019-03-21 10:00:00', '2019-03-21 00:00:00', '0000-00-00 00:00:00', 20, 'BARISAN BANTENG', 0, 'Lengkap', 'Lengkap', 'AMA, AKU, KAMU', 'Korektif', '2019-03-21 18:33:23', 'U0001', 'U0001', 'H0002', 'S0002', '', '', '5c93745bd8220', 'pending'),
('K.005/AMANK2K3/CIANJUR/III/2019', '2019-03-22 13:29:58', '2019-03-22 00:00:00', '2019-03-22 07:00:00', '2019-03-22 08:00:00', '0000-00-00 00:00:00', 20, 'JL. AMALLIA', 0, 'Lengkap', 'Lengkap', 'AMB, AD, ASN, ASD', 'Korektif', '2019-03-22 13:29:58', 'U0001', 'U0001', 'H0003', 'S0002', '', '', '5c94d306280eb', 'new'),
('P.001/AMANK2K3/CIANJUR/III/2019', '2019-03-21 16:40:24', '2019-03-21 00:00:00', '2019-03-25 08:00:00', '2019-03-26 11:00:00', '0000-00-00 00:00:00', 20, 'Jl. Sirnagalih', 0, 'Lengkap', 'Lengkap', 'ABC, DEF, GHI, JKL', 'Preventif', '2019-03-21 16:40:24', 'U0001', 'U0001', 'H0002', 'S0004', '', '', '5c935ad903521', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prosedur_kerja`
--

CREATE TABLE `tb_prosedur_kerja` (
  `kode_prosedur_kerja` char(5) NOT NULL,
  `nama_prosedur_kerja` varchar(100) NOT NULL,
  `tgl_input_prosedur_kerja` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `kode_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prosedur_kerja`
--

INSERT INTO `tb_prosedur_kerja` (`kode_prosedur_kerja`, `nama_prosedur_kerja`, `tgl_input_prosedur_kerja`, `last_modified`, `last_modified_user`, `kode_user`) VALUES
('20792', 'Pengerjaan Kubikel Gardu Bangunan', '2019-03-18 11:53:03', '2019-03-18 11:53:03', 'U0000', 'U0000'),
('22132', 'Pemeliharran SUTM ( Perabasan )', '2019-03-18 11:53:03', '2019-03-18 11:53:03', 'U0000', 'U0000'),
('29948', 'Pemeliharran SUTM ( Perbaikan Kawat  terburai)', '2019-03-18 11:53:03', '2019-03-18 11:53:03', 'U0000', 'U0000'),
('48097', 'Pemeriksaan Fure Cut Off', '2019-03-18 11:53:03', '2019-03-18 11:53:03', 'U0000', 'U0000'),
('56289', 'Pemeliharaan LBS dan RECLOSER', '2019-03-18 11:53:03', '2019-03-18 11:53:03', 'U0000', 'U0000'),
('77502', 'Bongkar dan Pasang Tiang Beton', '2019-03-18 11:53:03', '2019-03-18 11:53:03', 'U0000', 'U0000'),
('78284', 'Pemeliharaan Arrester pada gardu', '2019-03-18 11:53:03', '2019-03-18 11:53:03', 'U0000', 'U0000'),
('91262', 'Bongkar Pasang Trafo Portal', '2019-03-18 11:53:03', '2019-03-18 11:53:03', 'U0000', 'U0000'),
('92314', 'Pemeliharaan Isolator', '2019-03-18 11:53:03', '2019-03-18 11:53:03', 'U0000', 'U0000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sld`
--

CREATE TABLE `tb_sld` (
  `kode_sld` char(5) NOT NULL,
  `nama_sld` varchar(50) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `tgl_input_sld` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sld`
--

INSERT INTO `tb_sld` (`kode_sld`, `nama_sld`, `lokasi`, `tgl_input_sld`, `last_modified`, `last_modified_user`, `src`) VALUES
('S0001', 'P.GBRG', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', 'U0000', 'S0001.jpg'),
('S0002', 'P.LAMPEGAN', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', 'U0000', 'S0002.jpg'),
('S0003', 'P.DPRD', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', 'U0000', 'S0003.jpg'),
('S0004', 'P.KOTU', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', 'U0000', 'S0004.jpg'),
('S0005', 'P.BNJT', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', 'U0000', 'S0005.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_project`
--

CREATE TABLE `tb_status_project` (
  `kode_status_project` int(11) NOT NULL,
  `kode_project` char(35) NOT NULL,
  `status_project` varchar(50) NOT NULL,
  `tgl` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `kode_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_project`
--

INSERT INTO `tb_status_project` (`kode_status_project`, `kode_project`, `status_project`, `tgl`, `keterangan`, `kode_user`) VALUES
(1, 'K.001/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 10:55:28', '', 'U0001'),
(2, 'K.003/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 11:26:58', '', 'U0001'),
(3, 'K.001/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 11:55:42', '', 'U0002'),
(4, 'K.001/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 11:55:43', '', 'U0003'),
(5, 'K.001/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-20 11:55:44', '', 'U0004'),
(6, 'K.001/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-20 11:55:45', '', 'U0005'),
(7, 'K.001/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-20 11:55:46', '', 'U0006'),
(8, 'K.001/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-20 11:55:47', '', 'U0007'),
(9, 'K.002/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 14:14:01', '', 'U0001'),
(10, 'K.002/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 14:14:08', '', 'U0002'),
(11, 'K.002/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 14:14:09', '', 'U0003'),
(12, 'K.002/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-20 14:14:10', '', 'U0004'),
(13, 'K.002/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-20 14:14:11', '', 'U0005'),
(14, 'K.002/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-20 14:14:12', '', 'U0006'),
(15, 'K.002/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-20 14:14:13', '', 'U0007'),
(16, 'K.003/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 15:04:11', '', 'U0002'),
(17, 'K.003/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 15:04:12', '', 'U0003'),
(18, 'K.003/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 15:04:13', '', 'U0004'),
(19, 'K.003/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 15:04:14', '', 'U0005'),
(20, 'K.003/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 15:04:16', '', 'U0006'),
(21, 'K.003/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-20 15:04:17', '', 'U0007'),
(28, 'P.001/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-21 16:35:21', '', 'U0002'),
(29, 'P.001/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-21 16:35:21', '', 'U0003'),
(30, 'P.001/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-21 16:35:21', '', 'U0004'),
(31, 'P.001/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-21 16:35:21', '', 'U0005'),
(32, 'P.001/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-21 16:35:21', '', 'U0006'),
(33, 'P.001/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-21 16:35:21', '', 'U0007'),
(34, 'P.001/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-21 16:35:21', '', 'U0001'),
(35, 'K.004/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-21 18:24:12', '', 'U0002'),
(36, 'K.004/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-21 18:24:12', '', 'U0003'),
(37, 'K.004/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-21 18:24:12', '', 'U0004'),
(38, 'K.004/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-21 18:24:12', '', 'U0005'),
(39, 'K.004/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-21 18:24:12', '', 'U0006'),
(40, 'K.004/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-21 18:24:12', '', 'U0007'),
(41, 'K.004/AMANK2K3/CIANJUR/III/2019', 'approve', '2019-03-21 18:24:12', '', 'U0001'),
(42, 'K.005/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-22 13:20:22', '', 'U0002'),
(43, 'K.005/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-22 13:20:22', '', 'U0003'),
(44, 'K.005/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-22 13:20:22', '', 'U0004'),
(45, 'K.005/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-22 13:20:22', '', 'U0005'),
(46, 'K.005/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-22 13:20:22', '', 'U0006'),
(47, 'K.005/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-22 13:20:22', '', 'U0007'),
(48, 'K.005/AMANK2K3/CIANJUR/III/2019', 'pending', '2019-03-22 13:20:22', '', 'U0001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `kode_user` char(5) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `no_telp_user` char(15) NOT NULL,
  `lokasi` varchar(40) NOT NULL,
  `ulp` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ttd` varchar(40) NOT NULL,
  `tgl_input_user` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `kode_divisi` char(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`kode_user`, `nama_user`, `no_telp_user`, `lokasi`, `ulp`, `username`, `password`, `ttd`, `tgl_input_user`, `last_modified`, `last_modified_user`, `kode_divisi`) VALUES
('U0000', 'Admin', '089503800600', '', '', 'admin', 'admin', 'U0000.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '100'),
('U0001', 'Riky Japutra', '081809661255', 'KOTA', 'CIANJUR', 'riky', 'riky', 'U0001.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '1'),
('U0002', 'Virgea Krismanda', '0821755517033', 'KOTA', 'CIANJUR', 'virgea', 'virgea', 'U0002.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '2'),
('U0003', 'Ainul Yaqin', '087742359100', 'KOTA', 'CIANJUR', 'ainul', 'ainul', 'U0003.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '3'),
('U0004', 'Andis Verinda Putra', '082232473311', 'KOTA', 'CIANJUR', 'andis', 'andis', 'U0004.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '4'),
('U0005', 'HARJAR', '089503800600', 'ULP', 'CIANJUR', 'harjar', 'harjar', 'U0005.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '5'),
('U0006', 'OPDIST', '089503800600', 'ULP', 'CIANJUR', 'opoist', 'opoist', 'U0006.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '6'),
('U0007', 'MB', '089503800600', 'ULP', 'CIANJUR', 'mb', 'mb', 'U0006.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '7'),
('U0011', 'WIlly Setiawan', '089503800600', 'KOTA', 'CIANJUR', 'willy', 'willy', 'U0011.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_berkas_terakhir`
-- (See below for the actual view)
--
CREATE TABLE `v_berkas_terakhir` (
`kode_project` char(35)
,`kode_user` char(5)
,`divisi_tujuan` char(5)
,`lokasi` varchar(40)
);

-- --------------------------------------------------------

--
-- Structure for view `v_berkas_terakhir`
--
DROP TABLE IF EXISTS `v_berkas_terakhir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_berkas_terakhir`  AS  select `b`.`kode_project` AS `kode_project`,`b`.`kode_user` AS `kode_user`,`b`.`divisi_tujuan` AS `divisi_tujuan`,`u`.`lokasi` AS `lokasi` from (`tb_berkas_terakhir` `b` join `tb_users` `u` on((`b`.`kode_user` = `u`.`kode_user`))) group by `b`.`kode_project` order by `b`.`tgl` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_approval`
--
ALTER TABLE `tb_approval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_det_uraian_pekerjaan`
--
ALTER TABLE `tb_det_uraian_pekerjaan`
  ADD PRIMARY KEY (`kode_uraian_pekerjaan`);

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`kode_divisi`);

--
-- Indexes for table `tb_gardu_induk`
--
ALTER TABLE `tb_gardu_induk`
  ADD PRIMARY KEY (`kode_gardu_induk`);

--
-- Indexes for table `tb_jenis_pekerjaan`
--
ALTER TABLE `tb_jenis_pekerjaan`
  ADD PRIMARY KEY (`kode_jenis_pekerjaan`);

--
-- Indexes for table `tb_klasifikasi_kerja`
--
ALTER TABLE `tb_klasifikasi_kerja`
  ADD PRIMARY KEY (`kode_klasifikasi_kerja`);

--
-- Indexes for table `tb_lampiran_izin_kerja`
--
ALTER TABLE `tb_lampiran_izin_kerja`
  ADD PRIMARY KEY (`kode_lampiran_izin_kerja`);

--
-- Indexes for table `tb_pelaksana`
--
ALTER TABLE `tb_pelaksana`
  ADD PRIMARY KEY (`kode_pelaksana`);

--
-- Indexes for table `tb_pelaksana_pekerja`
--
ALTER TABLE `tb_pelaksana_pekerja`
  ADD PRIMARY KEY (`kode_pelaksana_pekerja`);

--
-- Indexes for table `tb_peralatan_kerja`
--
ALTER TABLE `tb_peralatan_kerja`
  ADD PRIMARY KEY (`kode_peralatan_kerja`);

--
-- Indexes for table `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`kode_project`);

--
-- Indexes for table `tb_prosedur_kerja`
--
ALTER TABLE `tb_prosedur_kerja`
  ADD PRIMARY KEY (`kode_prosedur_kerja`);

--
-- Indexes for table `tb_sld`
--
ALTER TABLE `tb_sld`
  ADD PRIMARY KEY (`kode_sld`);

--
-- Indexes for table `tb_status_project`
--
ALTER TABLE `tb_status_project`
  ADD PRIMARY KEY (`kode_status_project`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_approval`
--
ALTER TABLE `tb_approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_det_uraian_pekerjaan`
--
ALTER TABLE `tb_det_uraian_pekerjaan`
  MODIFY `kode_uraian_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_gardu_induk`
--
ALTER TABLE `tb_gardu_induk`
  MODIFY `kode_gardu_induk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_pelaksana`
--
ALTER TABLE `tb_pelaksana`
  MODIFY `kode_pelaksana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pelaksana_pekerja`
--
ALTER TABLE `tb_pelaksana_pekerja`
  MODIFY `kode_pelaksana_pekerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tb_status_project`
--
ALTER TABLE `tb_status_project`
  MODIFY `kode_status_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
