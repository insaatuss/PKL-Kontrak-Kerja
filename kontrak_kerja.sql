-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 08:37 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kontrak_kerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan_kontrak`
--

CREATE TABLE `data_karyawan_kontrak` (
  `id` int(11) NOT NULL,
  `Pers.No` varchar(11) NOT NULL,
  `Nama` varchar(60) NOT NULL,
  `Posisi` set('AKUPG','AKUPG-SATPAM','PELTEK-POMKEB','PELTEK-TRAKTOR','QA','TANAMAN','TNA-TMA','TEK-BANGUNAN','TEK-BESALI','TEK-GILINGAN','TEK-KETEL','TEK-LISTRIK','TEK-PEMURNIAN','TEK-PENDINGIN','TEK-PENGUAPAN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_kontrak_kerja`
--

CREATE TABLE `informasi_kontrak_kerja` (
  `nama_karyawan` varchar(200) NOT NULL,
  `posisi` set('AKUPG','AKUPG-SATPAM','PELTEK-POMKEB','PELTEK-TRAKTOR','QA','TANAMAN','TAN-TMA','TEK-BANGUNAN','TEK-BESALI','TEK-GILINGAN','TEK-KETEL','TEK-LISTRIK','TEK-PEMURNIAN','TEK-PENDINGIN','TEK-PENGUAPAN') NOT NULL,
  `tenggat_waktu` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profil_karyawan`
--

CREATE TABLE `profil_karyawan` (
  `id` int(11) NOT NULL,
  `Nama` varchar(60) NOT NULL,
  `Alamat` text NOT NULL,
  `Jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `scan_KTP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(60) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` set('admin','GM','karyawan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karyawan_kontrak`
--
ALTER TABLE `data_karyawan_kontrak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi_kontrak_kerja`
--
ALTER TABLE `informasi_kontrak_kerja`
  ADD PRIMARY KEY (`nama_karyawan`);

--
-- Indexes for table `profil_karyawan`
--
ALTER TABLE `profil_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_karyawan_kontrak`
--
ALTER TABLE `data_karyawan_kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil_karyawan`
--
ALTER TABLE `profil_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
