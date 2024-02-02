-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 02, 2024 at 03:03 AM
-- Server version: 5.7.39
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budaya_sumut`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `artikel` longtext NOT NULL,
  `gambar_utama` varchar(225) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `published_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul`, `slug`, `artikel`, `gambar_utama`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`, `published_at`) VALUES
(3, 'Judul Pertama', 'Judul-Pertama', '<p>sdasdasd</p>', '', '0', 1, '2024-02-01 06:16:48', NULL, NULL, NULL),
(4, 'Tedst 2', 'Tedst-2', '<p>sdsad</p>', '10e993623d3c86e1d386d21de9cbf4ff.png', '1', 1, '2024-02-01 06:17:45', NULL, NULL, NULL),
(5, 'Judul Pertama', 'Judul-Pertama', '<p>sdasdasd</p>', '', '0', 1, '2024-02-01 06:16:48', NULL, NULL, NULL),
(6, 'Tedst 2', 'Tedst-2', '<p>sdsad</p>', '10e993623d3c86e1d386d21de9cbf4ff.png', '1', 1, '2024-02-01 06:17:45', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `feedback` longtext NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kab_kota`
--

CREATE TABLE `tb_kab_kota` (
  `id_kk` int(11) NOT NULL,
  `nama_kab_kota` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kab_kota`
--

INSERT INTO `tb_kab_kota` (`id_kk`, `nama_kab_kota`, `logo`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Kab. Asahan', '49ccc59f9e9555938abf10e9aa6c8b8f.png', 1, '2024-01-31 14:21:26', 1, '2024-01-31 14:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(225) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Tradisi Lisan', 1, '2024-01-31 14:30:49', NULL, NULL),
(2, 'Adat Istiadat', 1, '2024-01-31 14:30:56', NULL, NULL),
(3, 'Ritus', 1, '2024-01-31 14:31:04', NULL, NULL),
(4, 'Bahasa', 1, '2024-01-31 14:31:09', NULL, NULL),
(5, 'Manuskrip', 1, '2024-01-31 14:31:16', NULL, NULL),
(6, 'Teknologi Tradisional', 1, '2024-01-31 14:31:29', NULL, NULL),
(7, 'Seni', 1, '2024-01-31 14:32:21', NULL, NULL),
(9, 'Permainan Rakyat', 1, '2024-01-31 14:32:43', NULL, NULL),
(10, 'Olahraga Tradisional', 1, '2024-01-31 14:32:50', NULL, NULL),
(11, 'Pengetahuan Tradisional', 1, '2024-01-31 14:34:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_artikel`
--

CREATE TABLE `tb_kategori_artikel` (
  `id_ka` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kategori_artikel`
--

INSERT INTO `tb_kategori_artikel` (`id_ka`, `id_artikel`, `id_kategori`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 3, 2, 1, '2024-02-01 06:16:48', NULL, NULL),
(2, 4, 2, 1, '2024-02-01 06:17:45', NULL, NULL),
(3, 4, 4, 1, '2024-02-01 06:17:45', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL,
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

INSERT INTO `tb_pengguna` (`id_pengguna`, `id_kk`, `username`, `password`, `nama`, `level_login`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 0, 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', '1', NULL, 1, '2022-06-28 11:34:08', '2022-08-09 05:12:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_kab_kota`
--
ALTER TABLE `tb_kab_kota`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kategori_artikel`
--
ALTER TABLE `tb_kategori_artikel`
  ADD PRIMARY KEY (`id_ka`);

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
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kab_kota`
--
ALTER TABLE `tb_kab_kota`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_kategori_artikel`
--
ALTER TABLE `tb_kategori_artikel`
  MODIFY `id_ka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_lahan`
--
ALTER TABLE `tb_lahan`
  MODIFY `id_lahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
