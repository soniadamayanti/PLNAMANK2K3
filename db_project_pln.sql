-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 07:45 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
  `ket` varchar(50) NOT NULL
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

--
-- Dumping data for table `tb_det_pelaksana`
--

INSERT INTO `tb_det_pelaksana` (`kode_pelaksana`, `kode_project`) VALUES
(2, 'K.005/AMANK2K3/CIANJUR/III/2019');

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
  `kode_project` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_det_uraian_pekerjaan`
--

INSERT INTO `tb_det_uraian_pekerjaan` (`kode_uraian_pekerjaan`, `uraian_pekerjaan`, `jam`, `keterangan`, `kode_project`) VALUES
(14, 'Cobaan yah', '09:00:00', 'hehe', 'K.005'),
(15, 'Apalagi yaah', '10:00:00', 'hehe', 'K.005');

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
('2', 'PK3L ULP', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '3', 2),
('3', 'Spv. Teknik ULP', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '4', 3),
('4', 'MULP', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '5', 4),
('5', 'Spv. HARJAR', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '6', 5),
('6', 'Spv. OPOIST', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '7', 6),
('7', 'MB. Jaringan', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '', 0),
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

--
-- Dumping data for table `tb_project`
--

INSERT INTO `tb_project` (`kode_project`, `tgl_project`, `tgl_pelaksanaan`, `tgl_selesai`, `tgl_approval`, `tegangan`, `alamat_project`, `jml_tenaga_kerja`, `material`, `peralatan_kerja`, `gardu`, `jenis_project`, `last_modified`, `last_modified_user`, `kode_user`, `kode_jenis_pekerjaan`, `kode_line`, `uniqid`) VALUES
('K.001/AMANK2K3/CIANJUR/III/2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', 'Korektif', '0000-00-00 00:00:00', '', '', '', '', '5'),
('K.002/AMANK2K3/CIANJUR/III/2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', 'Korektif', '0000-00-00 00:00:00', '', '', '', '', '5c8bf357b139a'),
('K.003/AMANK2K3/CIANJUR/III/2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', 'Korektif', '0000-00-00 00:00:00', '', '', '', '', '5c8db55898ce5'),
('K.004/AMANK2K3/CIANJUR/III/2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', 'Korektif', '0000-00-00 00:00:00', '', '', '', '', '5c8db561230e5'),
('K.005/AMANK2K3/CIANJUR/III/2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', 'Korektif', '0000-00-00 00:00:00', '', 'U0001', '', '', '5c8de8a1d2fc5'),
('P.001/AMANK2K3/CIANJUR/III/2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', 'Preventif', '0000-00-00 00:00:00', '', '', '', '', '5c8bf3b651dbe'),
('P.002/AMANK2K3/CIANJUR/III/2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', 'Preventif', '0000-00-00 00:00:00', '', '', '', '', '5c8db57692f99'),
('P.003/AMANK2K3/CIANJUR/III/2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', 'Preventif', '0000-00-00 00:00:00', '', '', '', '', '5c8db5c431cda'),
('P.004/AMANK2K3/CIANJUR/III/2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', 'Preventif', '0000-00-00 00:00:00', '', 'U0002', '', '', '5c8dba883ab8f'),
('P.005/AMANK2K3/CIANJUR/III/2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', 'Preventif', '0000-00-00 00:00:00', '', 'U0001', '', '', '5c8de560a0fae'),
('P.006/AMANK2K3/CIANJUR/III/2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 0, '', '', '', 'Preventif', '0000-00-00 00:00:00', '', 'U0001', '', '', '5c8de5874df7d');

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
('S0001', 'P.GBRG - REC.LSH', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', '100', 'S0001.jpg'),
('S0002', 'P.LPGN - SP.TBB dan SP.CNA', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', '100', 'S0002.jpg'),
('S0003', 'P.DPRD - SP.PRN', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', '100', 'S0003.jpg'),
('S0004', 'P.KOTU - REC.PNB', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', '100', 'S0004.jpg'),
('S0005', 'P.BNJT - REC.TGA', 'KOTA', '2019-03-16 00:00:00', '2019-03-16 00:00:00', '100', 'S0005.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_temp_pelaksana`
--

CREATE TABLE `tb_temp_pelaksana` (
  `kode_pelaksana` int(11) NOT NULL,
  `kode_project` char(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_temp_pelaksana`
--

INSERT INTO `tb_temp_pelaksana` (`kode_pelaksana`, `kode_project`) VALUES
(2, 'K.005/AMANK2K3/CIANJUR/III/2019'),
(2, 'P.003/AMANK2K3/CIANJUR/III/2019'),
(2, 'P.006/AMANK2K3/CIANJUR/III/2019'),
(3, 'P.006/AMANK2K3/CIANJUR/III/2019'),
(4, 'P.003/AMANK2K3/CIANJUR/III/2019'),
(4, 'P.006/AMANK2K3/CIANJUR/III/2019');

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

--
-- Dumping data for table `tb_temp_uraian_pekerjaan`
--

INSERT INTO `tb_temp_uraian_pekerjaan` (`kode_uraian_pekerjaan`, `uraian_pekerjaan`, `jam`, `keterangan`, `kode_project`) VALUES
(12, '123', '05:00:00', 'hehe', 'P.003/AMANK2K3/CIANJUR/III/2019'),
(13, '123123', '12:23:00', '123123', 'P.006/AMANK2K3/CIANJUR/III/2019'),
(14, 'Cobaan yah', '09:00:00', 'hehe', 'K.005/AMANK2K3/CIANJUR/III/2019'),
(15, 'Apalagi yaah', '10:00:00', 'hehe', 'K.005/AMANK2K3/CIANJUR/III/2019');

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
('U0000', 'Admin', '089503800600', 'Kota', 'admin', 'admin', 'U0000.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '100', '2'),
('U0001', 'Riky Japutra', '081809661255', 'Cianjur', 'riky', 'riky', 'U0001.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '100', '1'),
('U0002', 'Virgea Krismanda', '0821755517033', 'Cianjur', 'virgea', 'virgea', 'U0002.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '100', '2'),
('U0003', 'Ainul Yaqin', '087742359100', 'Cianjur', 'ainul', 'ainul', 'U0003.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '100', '3'),
('U0004', 'Andis Verinda Putra', '082232473311', 'Cianjur', 'andis', 'andis', 'U0004.png', '2019-03-15 00:00:00', '2019-03-15 00:00:00', '100', '4');

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
-- AUTO_INCREMENT for table `tb_temp_uraian_pekerjaan`
--
ALTER TABLE `tb_temp_uraian_pekerjaan`
  MODIFY `kode_uraian_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_uraian_pekerjaan`
--
ALTER TABLE `tb_uraian_pekerjaan`
  MODIFY `kode_uraian_pekerjaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_approval`
--
ALTER TABLE `tb_approval`
  ADD CONSTRAINT `tb_approval_ibfk_1` FOREIGN KEY (`kode_project`) REFERENCES `tb_det_project` (`kode_project`),
  ADD CONSTRAINT `tb_approval_ibfk_2` FOREIGN KEY (`kode_user`) REFERENCES `tb_det_project` (`kode_user`);

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
