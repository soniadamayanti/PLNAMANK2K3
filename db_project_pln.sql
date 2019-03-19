-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 08:28 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas_terakhir`
--

CREATE TABLE `tb_berkas_terakhir` (
  `kode_project` char(35) NOT NULL,
  `kode_divisi` char(5) NOT NULL,
  `parent_divisi` char(5) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_klasifikasi`
--

CREATE TABLE `tb_det_klasifikasi` (
  `kode_project` char(35) NOT NULL,
  `kode_klasifikasi_kerja` char(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_lampiran_izin_kerja`
--

CREATE TABLE `tb_det_lampiran_izin_kerja` (
  `kode_project` char(35) NOT NULL,
  `kode_lampiran_izin_kerja` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_pelaksana`
--

CREATE TABLE `tb_det_pelaksana` (
  `kode_pelaksana` int(11) NOT NULL,
  `kode_project` char(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_peralatan_kerja`
--

CREATE TABLE `tb_det_peralatan_kerja` (
  `kode_project` char(35) NOT NULL,
  `kode_peralatan_kerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_project`
--

CREATE TABLE `tb_det_project` (
  `kode_project` char(35) NOT NULL,
  `kode_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_prosedur_kerja`
--

CREATE TABLE `tb_det_prosedur_kerja` (
  `kode_project` char(35) NOT NULL,
  `kode_prosedur_kerja` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('1', 'Staff Teknisi ULP', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2', 0),
('100', 'Admin', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2', 0),
('2', 'PK3L ULP', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '3', 1),
('3', 'Spv. Teknik ULP', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '4', 2),
('4', 'MULP', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '5', 3),
('5', 'Spv. HARJAR', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '6', 4),
('6', 'Spv. OPOIST', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '7', 5),
('7', 'MB. Jaringan', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '0', 6),
('8', 'Dispatcher', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '', 0);

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
-- Table structure for table `tb_pekerja`
--

CREATE TABLE `tb_pekerja` (
  `kode_project` char(35) NOT NULL,
  `kode_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelaksana`
--

CREATE TABLE `tb_pelaksana` (
  `kode_pelaksana` int(11) NOT NULL,
  `nama_pelaksana` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelaksana`
--

INSERT INTO `tb_pelaksana` (`kode_pelaksana`, `nama_pelaksana`) VALUES
(1, 'PT Mahiza Karya Mandiri'),
(2, 'PT. Syaldi'),
(3, 'PT Sanjur Trida Raya'),
(4, 'PT Ardis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelaksana_pekerja`
--

CREATE TABLE `tb_pelaksana_pekerja` (
  `kode_pelaksana_pekerja` int(11) NOT NULL,
  `kode_pelaksama` int(11) NOT NULL,
  `nama_pelaksana_pekerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `uniqid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('S0001', 'P.GBRG - REC.LSH', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', 'U0000', 'S0001.jpg'),
('S0002', 'P.LPGN - SP.TBB dan SP.CNA', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', 'U0000', 'S0002.jpg'),
('S0003', 'P.DPRD - SP.PRN', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', 'U0000', 'S0003.jpg'),
('S0004', 'P.KOTU - REC.PNB', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', 'U0000', 'S0004.jpg'),
('S0005', 'P.BNJT - REC.TGA', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', 'U0000', 'S0005.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_project`
--

CREATE TABLE `tb_status_project` (
  `kode_project` char(35) NOT NULL,
  `status_project` varchar(50) NOT NULL,
  `tgl` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `kode_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_temp_pelaksana`
--

CREATE TABLE `tb_temp_pelaksana` (
  `kode_pelaksana` int(11) NOT NULL,
  `kode_project` char(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_temp_uraian_pekerjaan`
--

CREATE TABLE `tb_temp_uraian_pekerjaan` (
  `kode_uraian_pekerjaan` int(11) NOT NULL,
  `uraian_pekerjaan` varchar(40) NOT NULL,
  `jam` time NOT NULL,
  `keterangan` text NOT NULL,
  `kode_project` char(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_uraian_pekerjaan`
--

CREATE TABLE `tb_uraian_pekerjaan` (
  `kode_uraian_pekerjaan` int(11) NOT NULL,
  `uraian_pekerjaan` varchar(40) NOT NULL,
  `jam` time NOT NULL,
  `keterangan` text NOT NULL,
  `kode_project` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `kode_user` char(5) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `no_telp_user` char(15) NOT NULL,
  `lokasi` varchar(40) NOT NULL,
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

INSERT INTO `tb_users` (`kode_user`, `nama_user`, `no_telp_user`, `lokasi`, `username`, `password`, `ttd`, `tgl_input_user`, `last_modified`, `last_modified_user`, `kode_divisi`) VALUES
('U0000', 'Admin', '089503800600', 'Kota', 'admin', 'admin', 'U0000.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '2'),
('U0001', 'Riky Japutra', '081809661255', 'Cianjur', 'riky', 'riky', 'U0001.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '1'),
('U0002', 'Virgea Krismanda', '0821755517033', 'Cianjur', 'virgea', 'virgea', 'U0002.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '2'),
('U0003', 'Ainul Yaqin', '087742359100', 'Cianjur', 'ainul', 'ainul', 'U0003.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '3'),
('U0004', 'Andis Verinda Putra', '082232473311', 'Cianjur', 'andis', 'andis', 'U0004.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '4'),
('U0011', 'WIlly Setiawan', '089503800600', 'Cianjur', 'willy', 'willy', 'U0011.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', 'U0000', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_approval`
--
ALTER TABLE `tb_approval`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_user` (`kode_user`),
  ADD KEY `kode_project` (`kode_project`,`kode_user`) USING BTREE;

--
-- Indexes for table `tb_det_klasifikasi`
--
ALTER TABLE `tb_det_klasifikasi`
  ADD PRIMARY KEY (`kode_project`,`kode_klasifikasi_kerja`),
  ADD KEY `kode_klasifikasi_kerja` (`kode_klasifikasi_kerja`);

--
-- Indexes for table `tb_det_lampiran_izin_kerja`
--
ALTER TABLE `tb_det_lampiran_izin_kerja`
  ADD PRIMARY KEY (`kode_project`,`kode_lampiran_izin_kerja`),
  ADD KEY `kode_lampiran_izin_kerja` (`kode_lampiran_izin_kerja`);

--
-- Indexes for table `tb_det_pelaksana`
--
ALTER TABLE `tb_det_pelaksana`
  ADD PRIMARY KEY (`kode_pelaksana`,`kode_project`),
  ADD KEY `kode_project` (`kode_project`);

--
-- Indexes for table `tb_det_project`
--
ALTER TABLE `tb_det_project`
  ADD PRIMARY KEY (`kode_project`,`kode_user`),
  ADD KEY `kode_user` (`kode_user`);

--
-- Indexes for table `tb_det_prosedur_kerja`
--
ALTER TABLE `tb_det_prosedur_kerja`
  ADD PRIMARY KEY (`kode_project`,`kode_prosedur_kerja`),
  ADD KEY `kode_prosedur_kerja` (`kode_prosedur_kerja`);

--
-- Indexes for table `tb_det_uraian_pekerjaan`
--
ALTER TABLE `tb_det_uraian_pekerjaan`
  ADD PRIMARY KEY (`kode_uraian_pekerjaan`,`kode_project`);

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`kode_divisi`);

--
-- Indexes for table `tb_jenis_pekerjaan`
--
ALTER TABLE `tb_jenis_pekerjaan`
  ADD PRIMARY KEY (`kode_jenis_pekerjaan`),
  ADD KEY `kode_user` (`kode_user`);

--
-- Indexes for table `tb_klasifikasi_kerja`
--
ALTER TABLE `tb_klasifikasi_kerja`
  ADD PRIMARY KEY (`kode_klasifikasi_kerja`),
  ADD KEY `kode_user` (`kode_user`),
  ADD KEY `last_modified_user` (`last_modified_user`);

--
-- Indexes for table `tb_lampiran_izin_kerja`
--
ALTER TABLE `tb_lampiran_izin_kerja`
  ADD PRIMARY KEY (`kode_lampiran_izin_kerja`),
  ADD KEY `kode_user` (`kode_user`),
  ADD KEY `last_modified_user` (`last_modified_user`);

--
-- Indexes for table `tb_pelaksana`
--
ALTER TABLE `tb_pelaksana`
  ADD PRIMARY KEY (`kode_pelaksana`);

--
-- Indexes for table `tb_peralatan_kerja`
--
ALTER TABLE `tb_peralatan_kerja`
  ADD PRIMARY KEY (`kode_peralatan_kerja`);

--
-- Indexes for table `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`kode_project`),
  ADD KEY `kode_line` (`kode_line`),
  ADD KEY `last_modified_user` (`last_modified_user`),
  ADD KEY `kode_user` (`kode_user`),
  ADD KEY `kode_jenis_pekerjaan` (`kode_jenis_pekerjaan`);

--
-- Indexes for table `tb_prosedur_kerja`
--
ALTER TABLE `tb_prosedur_kerja`
  ADD PRIMARY KEY (`kode_prosedur_kerja`),
  ADD KEY `last_modified_user` (`last_modified_user`,`kode_user`);

--
-- Indexes for table `tb_sld`
--
ALTER TABLE `tb_sld`
  ADD PRIMARY KEY (`kode_sld`),
  ADD KEY `last_modified_user` (`last_modified_user`);

--
-- Indexes for table `tb_temp_pelaksana`
--
ALTER TABLE `tb_temp_pelaksana`
  ADD PRIMARY KEY (`kode_pelaksana`,`kode_project`);

--
-- Indexes for table `tb_temp_uraian_pekerjaan`
--
ALTER TABLE `tb_temp_uraian_pekerjaan`
  ADD PRIMARY KEY (`kode_uraian_pekerjaan`),
  ADD KEY `kode_project` (`kode_project`);

--
-- Indexes for table `tb_uraian_pekerjaan`
--
ALTER TABLE `tb_uraian_pekerjaan`
  ADD PRIMARY KEY (`kode_uraian_pekerjaan`),
  ADD KEY `kode_project` (`kode_project`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`kode_user`),
  ADD KEY `kode_divisi` (`kode_divisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_approval`
--
ALTER TABLE `tb_approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pelaksana`
--
ALTER TABLE `tb_pelaksana`
  MODIFY `kode_pelaksana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_peralatan_kerja`
--
ALTER TABLE `tb_peralatan_kerja`
  MODIFY `kode_peralatan_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73529;
--
-- AUTO_INCREMENT for table `tb_temp_uraian_pekerjaan`
--
ALTER TABLE `tb_temp_uraian_pekerjaan`
  MODIFY `kode_uraian_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_uraian_pekerjaan`
--
ALTER TABLE `tb_uraian_pekerjaan`
  MODIFY `kode_uraian_pekerjaan` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_det_klasifikasi`
--
ALTER TABLE `tb_det_klasifikasi`
  ADD CONSTRAINT `tb_det_klasifikasi_ibfk_1` FOREIGN KEY (`kode_klasifikasi_kerja`) REFERENCES `tb_klasifikasi_kerja` (`kode_klasifikasi_kerja`),
  ADD CONSTRAINT `tb_det_klasifikasi_ibfk_2` FOREIGN KEY (`kode_project`) REFERENCES `tb_project` (`kode_project`);

--
-- Constraints for table `tb_det_lampiran_izin_kerja`
--
ALTER TABLE `tb_det_lampiran_izin_kerja`
  ADD CONSTRAINT `tb_det_lampiran_izin_kerja_ibfk_1` FOREIGN KEY (`kode_lampiran_izin_kerja`) REFERENCES `tb_lampiran_izin_kerja` (`kode_lampiran_izin_kerja`),
  ADD CONSTRAINT `tb_det_lampiran_izin_kerja_ibfk_2` FOREIGN KEY (`kode_project`) REFERENCES `tb_project` (`kode_project`);

--
-- Constraints for table `tb_det_pelaksana`
--
ALTER TABLE `tb_det_pelaksana`
  ADD CONSTRAINT `tb_det_pelaksana_ibfk_1` FOREIGN KEY (`kode_pelaksana`) REFERENCES `tb_pelaksana` (`kode_pelaksana`),
  ADD CONSTRAINT `tb_det_pelaksana_ibfk_2` FOREIGN KEY (`kode_project`) REFERENCES `tb_project` (`kode_project`);

--
-- Constraints for table `tb_det_project`
--
ALTER TABLE `tb_det_project`
  ADD CONSTRAINT `tb_det_project_ibfk_1` FOREIGN KEY (`kode_user`) REFERENCES `tb_users` (`kode_user`),
  ADD CONSTRAINT `tb_det_project_ibfk_2` FOREIGN KEY (`kode_project`) REFERENCES `tb_project` (`kode_project`);

--
-- Constraints for table `tb_det_prosedur_kerja`
--
ALTER TABLE `tb_det_prosedur_kerja`
  ADD CONSTRAINT `tb_det_prosedur_kerja_ibfk_1` FOREIGN KEY (`kode_project`) REFERENCES `tb_project` (`kode_project`),
  ADD CONSTRAINT `tb_det_prosedur_kerja_ibfk_2` FOREIGN KEY (`kode_prosedur_kerja`) REFERENCES `tb_prosedur_kerja` (`kode_prosedur_kerja`);

--
-- Constraints for table `tb_uraian_pekerjaan`
--
ALTER TABLE `tb_uraian_pekerjaan`
  ADD CONSTRAINT `tb_uraian_pekerjaan_ibfk_1` FOREIGN KEY (`kode_project`) REFERENCES `tb_project` (`kode_project`);

--
-- Constraints for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `tb_users_ibfk_1` FOREIGN KEY (`kode_divisi`) REFERENCES `tb_divisi` (`kode_divisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
