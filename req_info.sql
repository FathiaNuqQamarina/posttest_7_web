-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 05:23 PM
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
-- Database: `req_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_req`
--

CREATE TABLE `info_req` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jenis_rempah` varchar(50) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `waktu` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_req`
--

INSERT INTO `info_req` (`id`, `nama`, `email`, `kategori`, `jenis_rempah`, `detail`, `waktu`) VALUES
(16, 'Fathia Nuq Qamarina', 'fathianq12@gmail.com', 'Kecantikan', 'Kunyit', 'Resep Kunyit untuk kulit', '2022-10-19 23:22:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `info_tersedia`
--

CREATE TABLE `info_tersedia` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_req`
--
ALTER TABLE `info_req`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `info_tersedia`
--
ALTER TABLE `info_tersedia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_req`
--
ALTER TABLE `info_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `info_tersedia`
--
ALTER TABLE `info_tersedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info_tersedia`
--
ALTER TABLE `info_tersedia`
  ADD CONSTRAINT `info_tersedia_ibfk_1` FOREIGN KEY (`email`) REFERENCES `info_req` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
