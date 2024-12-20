-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 01:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '$2y$12$ZjW1WGP.rB12x73KdLzO4eBJJzffIdQvvw/1kxD/D/e.6Hze/YPrm'),
(3, 'deka', '$2y$12$ktPd7pNoGBLv/78oke1syevQi8YwElEQSuVyRA1R2zdzuBaK7QupO'),
(5, 'syarif', '$2y$12$RerkBSXeCcNs3t1nMeHMSe.ansVsUlbVgXNkGcFEnAHVdrL3WTgFG');

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id_beranda` int(10) NOT NULL,
  `pict` varchar(100) NOT NULL,
  `judul_beranda` varchar(100) NOT NULL,
  `nama_beranda` varchar(100) NOT NULL,
  `deskripsi_beranda` text NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `facebook` text NOT NULL,
  `tentang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id_beranda`, `pict`, `judul_beranda`, `nama_beranda`, `deskripsi_beranda`, `lokasi`, `instagram`, `youtube`, `facebook`, `tentang`) VALUES
(1, 'logo_bhinus.png', 'Smk Bhakti Nusantara', 'Smk Bhakti Nusantara', 'Sekolah Menengah Kejuruan mempelajari KI', 'Boja', 'https://www.instagram.com/syarif_mochamad/', 'www.youtube.com', 'www.facebook.com', 'Sekolah berbasis komputer');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id_gambar` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id_gambar`, `gambar`) VALUES
(1, '1317711.jpeg'),
(2, '2.jpg'),
(3, 'WhatsApp Image 2024-03-17 at 3.46.41 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `ekstra`
--

CREATE TABLE `ekstra` (
  `id_ekstra` int(10) NOT NULL,
  `nama_ekstra` varchar(100) NOT NULL,
  `deskripsi_ekstra` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ekstra`
--

INSERT INTO `ekstra` (`id_ekstra`, `nama_ekstra`, `deskripsi_ekstra`) VALUES
(1, 'Web Design', 'Mempelajari pembuatan interface website'),
(2, 'Musik', 'Mempelajari berbagai nada musik'),
(3, 'Pramuka', 'Pramuka setiap hari jumat'),
(6, 'music', 'miawmiawmiaw');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(10) NOT NULL,
  `pict` varchar(100) DEFAULT NULL,
  `nama_galeri` varchar(100) NOT NULL,
  `deskripsi_galeri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `pict`, `nama_galeri`, `deskripsi_galeri`) VALUES
(4, '1311870.jpeg', 'Hiro', 'miaww'),
(5, '1317711.jpeg', 'Moch', 'Kazeee'),
(11, 'Screenshot (24).png', 'im', 'miaww'),
(12, 'Screenshot (8).png', 'Smk Bhakti Nusantara', 'asdasd'),
(13, 'Screenshot (30).png', 'miawwe', 'miawweqwewq');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `gambar`, `nama`, `jabatan`, `deskripsi`) VALUES
(13, 'Screenshot (24).png', 'Kazenime', 'Web Developer', 'Mengajarkan sesuatu'),
(14, 'Screenshot (26).png', 'Miaw', 'Dev', 'Pengajar'),
(26, 'Sy.webp', 'miaww', 'miaww', 'miawwwwwww');

-- --------------------------------------------------------

--
-- Table structure for table `jumbotron`
--

CREATE TABLE `jumbotron` (
  `id_pict` int(10) NOT NULL,
  `pict` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jumbotron`
--

INSERT INTO `jumbotron` (`id_pict`, `pict`) VALUES
(1, 'pitc.6.jpg'),
(2, 'Screenshot (6).png'),
(3, 'Screenshot (24).png');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `deskripsi_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `gambar`, `nama_kegiatan`, `deskripsi_kegiatan`) VALUES
(1, 'Hirofumi.webp', 'Penerimaan Tamu', 'Penerimaan Tamu Ambalan (PTA) dilakukan setiap tahun sekali untuk menerima peserta baru untuk memasuki Ambalan'),
(2, 'Sy.webp', 'Pengambilan Badge Ambalan', '`miawdss'),
(14, 'Screenshot (4).png', 'Pramuka', 'awewads'),
(15, 'Hirofumi.webp', 'Pengambilan Badge Ambalan', 'fsdf'),
(16, 'Sy.webp', 'hehe', 'jhehe');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `email`, `subjek`, `pesan`) VALUES
(6, 'Miaw', 'Miaw@gmail.com', 'qweq', 'qweqwe'),
(15, 'hiro', 'Miaw@gmail.com', 'qweq', 'qewqwe');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `lokasi` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlpn` varchar(100) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `lokasi`, `email`, `tlpn`, `website`) VALUES
(1, 'Boja', 'Miaw@gmail.com', '123456734', 'smkbhinus.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama`, `alamat`, `kota`, `provinsi`, `website`) VALUES
(1, 'Smk', 'Meteseh', 'Semarang', 'Jateng', 'miawmiaw.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id_beranda`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `ekstra`
--
ALTER TABLE `ekstra`
  ADD PRIMARY KEY (`id_ekstra`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id_beranda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ekstra`
--
ALTER TABLE `ekstra`
  MODIFY `id_ekstra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
