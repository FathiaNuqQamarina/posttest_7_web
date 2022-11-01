-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 01:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konten_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kecantikan`
--

CREATE TABLE `data_kecantikan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `resep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kecantikan`
--

INSERT INTO `data_kecantikan` (`id`, `judul`, `nama`, `deskripsi`, `resep`) VALUES
(1, 'Coffee Scrub Body', 'Kopi.jpg', 'Scrub Tubuh Dari Biji Kopi', 'resep kopi');

-- --------------------------------------------------------

--
-- Table structure for table `data_kesehatan`
--

CREATE TABLE `data_kesehatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `resep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kesehatan`
--

INSERT INTO `data_kesehatan` (`id`, `judul`, `nama`, `deskripsi`, `resep`) VALUES
(1, 'Jahe Madu', 'Minum.jpg', 'Minuman Hangat Dari Jahe Untuk Meringankan Flu', 'resep jahe');

-- --------------------------------------------------------

--
-- Table structure for table `data_kuliner`
--

CREATE TABLE `data_kuliner` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `resep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kuliner`
--

INSERT INTO `data_kuliner` (`id`, `judul`, `nama`, `deskripsi`, `resep`) VALUES
(3, 'Nasi Kuning', 'fathia.png', 'Nasi Kuning bahan dasar kunyit', 'asdfghjkl'),
(4, 'Ayam Goreng Laos', 'Tada.jpg', 'Ayam goreng dengan taburan rempah laos', 'resep ayam laos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kecantikan`
--
ALTER TABLE `data_kecantikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kesehatan`
--
ALTER TABLE `data_kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kuliner`
--
ALTER TABLE `data_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kecantikan`
--
ALTER TABLE `data_kecantikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_kesehatan`
--
ALTER TABLE `data_kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_kuliner`
--
ALTER TABLE `data_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
