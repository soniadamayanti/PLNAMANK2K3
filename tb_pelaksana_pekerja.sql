-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 22 Mar 2019 pada 09.35
-- Versi server: 10.2.21-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u6595816_amank2k3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelaksana_pekerja`
--

CREATE TABLE `tb_pelaksana_pekerja` (
  `kode_pelaksana_pekerja` int(11) NOT NULL,
  `kode_pelaksama` int(11) NOT NULL,
  `nama_pelaksana_pekerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelaksana_pekerja`
--

INSERT INTO `tb_pelaksana_pekerja` (`kode_pelaksana_pekerja`, `kode_pelaksama`, `nama_pelaksana_pekerja`) VALUES
(1, 2, 'Eman'),
(2, 2, 'Tatang'),
(3, 2, 'Asep'),
(4, 2, 'Ramlan'),
(5, 2, 'Hamdan'),
(6, 2, 'Dede'),
(7, 2, 'Ishan'),
(8, 2, 'Dadang'),
(9, 1, 'Yayan Sasmita'),
(10, 1, 'Kosasih'),
(11, 1, 'Deny MR'),
(12, 1, 'Iwan Suryadi'),
(13, 1, 'Cece Kusnadi'),
(14, 1, 'Rida Firmansyah'),
(15, 1, 'Apud'),
(16, 1, 'Junaedi'),
(17, 1, 'Adi Muhamad Yusup'),
(18, 1, 'Iwan Setiawan'),
(19, 1, 'Dudi Supriyadi'),
(20, 1, 'Mulyadi'),
(21, 1, 'Kusnadi SP'),
(22, 1, 'Wahyu Mediawan'),
(23, 1, 'Siti Emi'),
(24, 1, 'Reza'),
(25, 1, 'Yusup Irsyad'),
(26, 1, 'Alfi'),
(27, 1, 'M Sani'),
(28, 1, 'A Taufik'),
(29, 1, 'Iman Harisman'),
(30, 1, 'Yudi Alpayadi'),
(31, 1, 'Iwan Wahyudin'),
(32, 1, 'Didin Sansudin'),
(33, 1, 'Ridwan'),
(34, 1, 'Ujang Dedi'),
(35, 1, 'Agustyo'),
(36, 1, 'Dadan'),
(37, 1, 'Deni Aripin'),
(38, 1, 'M Taufik Ibrahim'),
(39, 1, 'Agus Rusnandi'),
(40, 1, 'Yayat Efendi'),
(41, 1, 'Fauji'),
(42, 1, 'Ruby Prana'),
(43, 1, 'Deni Alamsyah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pelaksana_pekerja`
--
ALTER TABLE `tb_pelaksana_pekerja`
  ADD PRIMARY KEY (`kode_pelaksana_pekerja`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pelaksana_pekerja`
--
ALTER TABLE `tb_pelaksana_pekerja`
  MODIFY `kode_pelaksana_pekerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
