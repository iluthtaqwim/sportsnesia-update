-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 01:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `phone`) VALUES
(1, 'xxx', 'ad3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647);

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
  `upload_identitas` varchar(300) NOT NULL,
  `kota` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `nama_perusahaan`, `nama_pemilik`, `email`, `alamat`, `phone`, `identitas`, `upload_identitas`, `kota`, `password`, `foto_profil`) VALUES
(26, '12345', '12345', '12345@gmail.com', 'yk', '12345', '12345', 'dataset4.PNG', 'yk', '827ccb0eea8a706c4c34a16891f84e7b', 'fb.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `nama_team` varchar(150) NOT NULL,
  `ketua` varchar(100) NOT NULL,
  `anggota` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `kategori`, `nama_team`, `ketua`, `anggota`) VALUES
(1, 'Futsal', 'Hore', '', 'iluth , ad1'),
(2, 'GYM', 'hola holo', '', 'iluth , iluth1'),
(3, 'Swimming', 'Hore2', 'ad3', 'ad1 , ad3');

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
  `lokasi` varchar(500) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_pemilik` text NOT NULL,
  `tanggal_upload` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_venue`
--

INSERT INTO `upload_venue` (`id`, `kategori`, `nama_venue`, `harga_sewa`, `gambar_venue`, `lokasi`, `deskripsi`, `nama_pemilik`, `tanggal_upload`) VALUES
(32, 'Swimming', 'test', 40000, '58cb890c917f0_thumb900.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.6415915417087!2d110.37547065316025!3d-7.721548778027748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6c088528fe96a50!2sRumah+Makan+Surya+Gemilang!5e0!3m2!1sen!2sid!4v1548177886236', 'testing', '12345', '2019-01-23 13:53:31.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(50) NOT NULL,
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
(15, 'luthfi', '2@gmail.com', '12934439535', '81dc9bdb52d04dc20036dbd83', ''),
(16, 'ad1', 'ad1@gmail.com', '08111111', '827ccb0eea8a706c4c34a1689', ''),
(17, 'ad2', 'ad2@gmail.com', '081111112', '827ccb0eea8a706c4c34a1689', ''),
(18, 'ad3', 'ad3@gmail.com', '0811111', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(19, 'xxx', 'ad3@gmail.com', '083111111111', '827ccb0eea8a706c4c34a16891f84e7b', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aktifitas`
--
ALTER TABLE `aktifitas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upload_venue`
--
ALTER TABLE `upload_venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
