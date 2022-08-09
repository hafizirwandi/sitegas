-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 09, 2022 at 05:32 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitegas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_lahan`
--

CREATE TABLE `tb_lahan` (
  `id_lahan` int(11) NOT NULL,
  `kategori` enum('1','2','3','4') DEFAULT NULL,
  `nama` varchar(225) NOT NULL,
  `foto_lahan` varchar(225) NOT NULL,
  `kecamatan` varchar(225) NOT NULL,
  `kelurahan` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `lokasi` varchar(225) NOT NULL,
  `luas_lahan` varchar(225) NOT NULL,
  `batas_utara` varchar(225) NOT NULL,
  `batas_selatan` varchar(225) NOT NULL,
  `batas_barat` varchar(225) NOT NULL,
  `batas_timur` varchar(225) NOT NULL,
  `long_lat` varchar(100) NOT NULL,
  `scan_sertifikat` varchar(225) DEFAULT NULL,
  `no_sertifikat` varchar(100) DEFAULT NULL,
  `tgl_sertifikat` date DEFAULT NULL,
  `keterangan` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_lahan`
--

INSERT INTO `tb_lahan` (`id_lahan`, `kategori`, `nama`, `foto_lahan`, `kecamatan`, `kelurahan`, `alamat`, `lokasi`, `luas_lahan`, `batas_utara`, `batas_selatan`, `batas_barat`, `batas_timur`, `long_lat`, `scan_sertifikat`, `no_sertifikat`, `tgl_sertifikat`, `keterangan`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(4, '2', 'Gereja HKBP', 'de96c7c1070078d083ba31c43e6cc90c.jpg', '', 2, '-', 'Medan', '123m x 230m', 'Rumah Bpak A', 'Rumah Bapak B', 'Rumah Bapak D', 'Rumah Bapak C', '7872874290432,2898273624732', '90bac06515f8bb8b384c7716bee3e67c.pdf', '', '0000-00-00', '-', 1, '2022-08-09 02:06:55', 1, '2022-08-09 04:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `level_login` enum('1') NOT NULL COMMENT '1=superadmin; ',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `password`, `nama`, `level_login`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', '1', NULL, 1, '2022-06-28 11:34:08', '2022-08-09 05:12:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_lahan`
--
ALTER TABLE `tb_lahan`
  ADD PRIMARY KEY (`id_lahan`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_lahan`
--
ALTER TABLE `tb_lahan`
  MODIFY `id_lahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
