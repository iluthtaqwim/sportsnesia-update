-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2019 at 01:00 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportsnesia_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktifitas`
--

CREATE TABLE `aktifitas` (
  `id` int(50) NOT NULL,
  `kategori` text NOT NULL,
  `nama_aktifitas` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `gambar_aktifitas` varchar(255) NOT NULL,
  `privasi_aktifitas` text NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `batas` int(5) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktifitas`
--

INSERT INTO `aktifitas` (`id`, `kategori`, `nama_aktifitas`, `tanggal_mulai`, `tanggal_selesai`, `gambar_aktifitas`, `privasi_aktifitas`, `deskripsi`, `batas`, `username`) VALUES
(1, 'Futsal', '', '2019-01-01', '0000-00-00', '', 'Teman', 'ayo futsal ngga pake lama', 25, 'iluth'),
(2, 'Futsal', '', '2019-01-01', '0000-00-00', '', 'Teman', 'ayo futsal ngga pake lama', 25, 'iluth'),
(3, 'Futsal', '', '2019-01-01', '0000-00-00', '', 'Teman', 'ayok', 25, 'iluth'),
(4, 'Running', 'Mlayu ', '2019-01-02', '0000-00-00', '', 'Teman', 'Mlayu mlayu gaes', 200, 'iluth');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(5) NOT NULL,
  `nama_perusahaan` varchar(25) NOT NULL,
  `nama_pemilik` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `identitas` text NOT NULL,
  `no_identitas` int(20) NOT NULL,
  `upload_identitas` varchar(300) NOT NULL,
  `kota` text NOT NULL,
  `password` varchar(25) NOT NULL,
  `foto_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `nama_perusahaan`, `nama_pemilik`, `email`, `alamat`, `phone`, `identitas`, `no_identitas`, `upload_identitas`, `kota`, `password`, `foto_profil`) VALUES
(9, 'eqw', 'dfs', '1@gmail.com', 'kemiri', '0898787876', 'Passport', 2147483647, 'logo_amikom', 'sleman', '12345', 'user.png'),
(20, 'ilut', 'ilut', '3@gmail.com', 'kemiri', '09840357', 'Passport', 2147483647, 'logo_amikom_full_color.png', 'Purworejo', '81dc9bdb52d04dc20036dbd83', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `upload_venue`
--

CREATE TABLE `upload_venue` (
  `id` int(11) NOT NULL,
  `kategori` text NOT NULL,
  `nama_venue` varchar(100) NOT NULL,
  `harga_sewa` int(10) NOT NULL,
  `gambar_venue` varchar(300) NOT NULL,
  `jenis_lapangan` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_pemilik` text NOT NULL,
  `tanggal_upload` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_venue`
--

INSERT INTO `upload_venue` (`id`, `kategori`, `nama_venue`, `harga_sewa`, `gambar_venue`, `jenis_lapangan`, `deskripsi`, `nama_pemilik`, `tanggal_upload`) VALUES
(18, 'GYM', 'gimi', 20000, 'gym.jpg', 'Bukan Rumput', 'gimi', 'gimi', '0000-00-00 00:00:00.000000'),
(19, 'Futsal', 'sdfsf', 4575, 'yoga@2x.jpg', 'Bukan Rumput', 'yhgfghfghf', '', '0000-00-00 00:00:00.000000'),
(20, 'GYM', 'retet', 5445646, 'logo_amikom_full_color.png', 'Bukan Rumput', 'hgfhfhfghgf', '', '0000-00-00 00:00:00.000000'),
(21, 'Futsal', 'Telaga Futsal', 25000, 'telagafutsal1.jpg', 'Bukan Rumput', 'Diskon akhir tahun!!!', 'dfs', '0000-00-00 00:00:00.000000'),
(22, 'GYM', 'GIMI newton', 50000, 'GYM1.png', 'Bukan Rumput', 'GYM terbaik se kecamatan', 'dfs', '0000-00-00 00:00:00.000000'),
(23, 'GYM', 'gym baru', 30000, 'gym11.jpg', 'Rumput', 'test', 'dfs', '2019-01-02 13:49:37.000000'),
(24, 'GYM', 'gym baru 2', 35000, 's.png', 'Rumput', 'test gym 2', 'dfs', '2019-01-02 08:01:17.000000'),
(25, 'Swimming', 'swim', 50000, 'user.png', 'Rumput', 'hoax', 'dfs', '2019-01-02 08:02:00.000000'),
(26, 'Futsal', 'Futsal kuy', 50000, 'tifosilogo.jpg', 'Rumput', 'Yow', 'dfs', '2019-01-02 09:40:47.000000'),
(27, 'Badminton', 'fdsfsdff', 1990000, '', 'Bukan Rumput', 'dsdadsdas', 'dfs', '2019-01-02 09:39:48.000000'),
(28, 'Futsal', 'wolek', 223000, 's.png', 'Bukan Rumput', '4rdsdf', 'dfs', '2019-01-02 10:05:31.000000'),
(29, 'Badminton', '2 januari', 50000, 'gym11.jpg', 'Rumput', '2 jan', 'dfs', '2019-01-02 10:16:46.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(25) NOT NULL,
  `foto_profilUser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `password`, `foto_profilUser`) VALUES
(5, 'iluth', 'iluth212@gmail.com', '0998989', '1234', ''),
(12, 'iluth1', 'admin@gmail.com', '0938435', '81dc9bdb52d04dc20036dbd83', ''),
(13, 'iluth1', 'iluth@gmail.com', '093284045', '81dc9bdb52d04dc20036dbd83', ''),
(14, 'iluth1', '1@gmail.com', '09382475', '81dc9bdb52d04dc20036dbd83', ''),
(15, 'luthfi', '2@gmail.com', '12934439535', '81dc9bdb52d04dc20036dbd83', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktifitas`
--
ALTER TABLE `aktifitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_venue`
--
ALTER TABLE `upload_venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktifitas`
--
ALTER TABLE `aktifitas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `upload_venue`
--
ALTER TABLE `upload_venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
