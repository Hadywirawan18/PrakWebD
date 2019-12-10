-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 03 Des 2019 pada 17.20
-- Versi Server: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `nim_mahasiswa` int(10) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `smester` char(3) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `status_mhs` enum('Aktif','Tidak Aktif') NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`nim_mahasiswa`, `nama_mahasiswa`, `smester`, `jurusan`, `alamat`, `no_hp`, `email`, `jenis_kelamin`, `status_mhs`, `foto`) VALUES
(123, 'jkjk', '5', 'S1 ILKOM', 'jhgj', '08967', 'jkhj.@com', 'L', 'Aktif', ''),
(878, 'ff', '5', '6', 'huh', 'hj', 'hbh@g.vom', 'L', 'Aktif', 'jnjnj'),
(11112, 'etdah', '5', 'S1 ILKOM', 'jhjg', '098796', 'hjhj@gmail.com', 'L', 'Aktif', 'gambar/D0176y3U4AABmVc.png'),
(123432, 'kabur', '5', 'S1 ILKOM', 'jgj', '0987676', 'dd@gmail.com', 'L', 'Aktif', NULL),
(787878, 'Jamal', '5', 'S1 ILKOM', 'Kabur', '0978897', 'dobleh@gmail.com', 'L', 'Aktif', 'gambar/fire-archangel-velajuel.png'),
(1710520196, 'Muhammad Hadi Wirawan', '5', 'S1 ILKOM', 'Sandik', '82340371882', 'hadywirawan_18@hotmail.com', 'L', 'Aktif', NULL),
(1710520197, 'Muhammad Hadi Kuswari', '5', 'S1 ILKOM', 'Lotim', '082340371883', 'kus_@hotmail.com', 'L', 'Aktif', NULL),
(1710520200, 'Thalia Acia Eroflan', '5', 'S1 ILKOM', 'Pejeruk', '', 'thalia.acia@gmail.com', 'P', 'Aktif', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`nim_mahasiswa`),
  ADD UNIQUE KEY `nim_mahasiswa` (`nim_mahasiswa`),
  ADD UNIQUE KEY `no_hp` (`no_hp`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
