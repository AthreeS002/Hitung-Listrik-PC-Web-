-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2023 at 08:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `cooler`
--

CREATE TABLE `cooler` (
  `id_cooler` int(10) NOT NULL,
  `nama_cooler` varchar(50) NOT NULL,
  `tdp_cooler` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `id_gpu` int(30) NOT NULL,
  `nama_gpu` varchar(255) NOT NULL,
  `tdp_gpu` int(255) NOT NULL,
  `memory_gpu` int(10) NOT NULL,
  `baseclock_gpu` int(10) NOT NULL,
  `boostclock_gpu` int(10) NOT NULL,
  `memoryclock_gpu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`id_gpu`, `nama_gpu`, `tdp_gpu`, `memory_gpu`, `baseclock_gpu`, `boostclock_gpu`, `memoryclock_gpu`) VALUES
(1, 'GTX 1650 Super', 100, 0, 0, 0, 0),
(3, 'GTX 1660 Super', 150, 0, 0, 0, 0),
(11, 'GTX 1050 Ti', 75, 0, 0, 0, 0),
(12, 'GTX 1650', 75, 0, 0, 0, 0),
(13, 'GTX 1660', 120, 0, 0, 0, 0),
(14, 'GTX 750 Ti', 60, 0, 0, 0, 0),
(15, 'GTX 1070', 150, 0, 0, 0, 0),
(16, 'GTX 1070 Ti', 180, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mobo`
--

CREATE TABLE `mobo` (
  `id_mobo` int(30) NOT NULL,
  `nama_mobo` varchar(40) NOT NULL,
  `tdp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `id_monitor` int(10) NOT NULL,
  `nama_monitor` varchar(255) NOT NULL,
  `tdp_monitor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`id_monitor`, `nama_monitor`, `tdp_monitor`) VALUES
(1, 'Monitor 22\" 1920 x 1080', 45),
(2, 'Monitor 24\" 1920 x 1080', 48);

-- --------------------------------------------------------

--
-- Table structure for table `procie`
--

CREATE TABLE `procie` (
  `id_procie` int(30) NOT NULL,
  `nama_procie` varchar(255) NOT NULL,
  `tdp_procie` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `procie`
--

INSERT INTO `procie` (`id_procie`, `nama_procie`, `tdp_procie`) VALUES
(1, 'Intel i3-10100F', 60),
(2, 'Intel i3-10100', 65),
(3, 'Intel i3-10105F', 65);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cooler`
--
ALTER TABLE `cooler`
  ADD PRIMARY KEY (`id_cooler`);

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`id_gpu`);

--
-- Indexes for table `mobo`
--
ALTER TABLE `mobo`
  ADD PRIMARY KEY (`id_mobo`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id_monitor`);

--
-- Indexes for table `procie`
--
ALTER TABLE `procie`
  ADD PRIMARY KEY (`id_procie`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cooler`
--
ALTER TABLE `cooler`
  MODIFY `id_cooler` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `id_gpu` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mobo`
--
ALTER TABLE `mobo`
  MODIFY `id_mobo` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id_monitor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `procie`
--
ALTER TABLE `procie`
  MODIFY `id_procie` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
