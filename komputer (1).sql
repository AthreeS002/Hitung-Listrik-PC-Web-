-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 01:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `id_gpu` int(30) NOT NULL,
  `merk_gpu` varchar(20) NOT NULL,
  `nama_gpu` varchar(255) NOT NULL,
  `tdp_gpu` int(255) NOT NULL,
  `memory_gpu` int(10) NOT NULL,
  `baseclock_gpu` int(10) NOT NULL,
  `boostclock_gpu` int(10) NOT NULL,
  `memoryclock_gpu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`id_gpu`, `merk_gpu`, `nama_gpu`, `tdp_gpu`, `memory_gpu`, `baseclock_gpu`, `boostclock_gpu`, `memoryclock_gpu`) VALUES
(1, 'NVIDIA', 'GTX 1650 Super', 100, 4, 1530, 1725, 1500),
(3, 'NVIDIA', 'GTX 1660 Super', 125, 6, 1530, 1785, 1750),
(11, 'NVIDIA', 'GTX 1050 Ti', 75, 4, 1291, 1392, 1752),
(12, 'NVIDIA', 'GTX 1650', 75, 4, 1485, 1665, 2001),
(13, 'NVIDIA', 'GTX 1660', 120, 6, 1530, 1785, 2001),
(14, 'NVIDIA', 'GTX 750 Ti', 60, 2, 1020, 1085, 1350),
(15, 'NVIDIA', 'GTX 1070', 150, 8, 1506, 1683, 2002),
(16, 'NVIDIA', 'GTX 1070 Ti', 180, 8, 1607, 1683, 2002),
(18, 'NVIDIA', 'RTX 2060', 160, 6, 1365, 1680, 1750),
(21, 'NVIDIA', 'RTX 2060 SUPER', 175, 8, 1470, 1650, 1750),
(22, 'AMD', 'RX 570', 150, 4, 1168, 1244, 1750),
(23, 'AMD', 'RX 5500 XT', 130, 4, 1607, 1845, 1750);

-- --------------------------------------------------------

--
-- Table structure for table `mobo`
--

CREATE TABLE `mobo` (
  `id_mobo` int(30) NOT NULL,
  `nama_mobo` varchar(40) NOT NULL,
  `tdp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `id_monitor` int(10) NOT NULL,
  `nama_monitor` varchar(255) NOT NULL,
  `tdp_monitor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `merk_procie` varchar(10) NOT NULL,
  `penggunaan` varchar(25) NOT NULL,
  `cores` int(5) NOT NULL,
  `logical` int(5) NOT NULL,
  `baseclock_cpu` int(8) NOT NULL,
  `boostclock_cpu` int(8) NOT NULL,
  `socket` varchar(25) NOT NULL,
  `tjunction` int(8) NOT NULL,
  `tdp_procie` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `procie`
--

INSERT INTO `procie` (`id_procie`, `nama_procie`, `merk_procie`, `penggunaan`, `cores`, `logical`, `baseclock_cpu`, `boostclock_cpu`, `socket`, `tjunction`, `tdp_procie`) VALUES
(1, 'Intel i3-10100F', 'Intel', 'Desktop', 4, 8, 4, 4, 'FCLGA1200', 100, 60),
(2, 'Intel i3-10100', 'Intel', 'Desktop', 4, 4, 4, 4, 'FCLGA1200', 100, 65),
(3, 'Intel i3-10105F', 'Intel', 'Desktop', 4, 8, 4, 4, 'FCLGA1200', 100, 65),
(4, 'AMD Ryzen 5 5600G', 'AMD', 'Desktop', 6, 12, 4, 4, 'AM4', 95, 65);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id_gpu` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `id_procie` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
