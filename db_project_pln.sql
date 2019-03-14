-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 01:13 PM
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
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `kode_divisi` char(5) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` datetime NOT NULL,
  `tgl_input_divisi` datetime NOT NULL,
  `parent_divisi` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_project`
--

CREATE TABLE `tb_jenis_project` (
  `kode_jenis_project` char(5) NOT NULL,
  `nama_jenis_project` varchar(50) NOT NULL,
  `tgl_input_jenis_project` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `kode_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tb_line`
--

CREATE TABLE `tb_line` (
  `kode_line` char(5) NOT NULL,
  `nama_line` varchar(50) NOT NULL,
  `tgl_input_line` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `pelaksana` varchar(30) NOT NULL,
  `peralatan_kerja` varchar(20) NOT NULL,
  `gardu` varchar(50) NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `kode_user` char(5) NOT NULL,
  `kode_jenis_pekerjaan` char(5) NOT NULL,
  `kode_line` char(5) NOT NULL,
  `kode_jenis_project` char(5) NOT NULL
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
  `kota_user` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ttd` varchar(40) NOT NULL,
  `tgl_input_user` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_modified_user` char(5) NOT NULL,
  `kode_divisi` char(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_approval`
--
ALTER TABLE `tb_approval`
  ADD PRIMARY KEY (`kode_project`,`kode_user`),
  ADD KEY `kode_user` (`kode_user`);

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
-- Indexes for table `tb_jenis_project`
--
ALTER TABLE `tb_jenis_project`
  ADD PRIMARY KEY (`kode_jenis_project`),
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
-- Indexes for table `tb_line`
--
ALTER TABLE `tb_line`
  ADD PRIMARY KEY (`kode_line`),
  ADD KEY `last_modified_user` (`last_modified_user`);

--
-- Indexes for table `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`kode_project`),
  ADD KEY `kode_jenis_project` (`kode_jenis_project`),
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
-- Constraints for table `tb_project`
--
ALTER TABLE `tb_project`
  ADD CONSTRAINT `tb_project_ibfk_1` FOREIGN KEY (`kode_jenis_project`) REFERENCES `tb_jenis_project` (`kode_jenis_project`),
  ADD CONSTRAINT `tb_project_ibfk_2` FOREIGN KEY (`kode_line`) REFERENCES `tb_line` (`kode_line`),
  ADD CONSTRAINT `tb_project_ibfk_3` FOREIGN KEY (`kode_jenis_pekerjaan`) REFERENCES `tb_jenis_pekerjaan` (`kode_jenis_pekerjaan`);

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
