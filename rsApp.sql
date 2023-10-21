-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2023 at 03:50 PM
-- Server version: 8.0.34-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `rawat_jalan`
--

CREATE TABLE `rawat_jalan` (
  `id` int NOT NULL,
  `tgl_konsul` date DEFAULT NULL,
  `waktu_konsul1` time NOT NULL,
  `waktu_konsul2` time NOT NULL,
  `pasien` varchar(255) NOT NULL,
  `no_bpjs` int NOT NULL,
  `poli` enum('p_gigi','p_umum') NOT NULL,
  `dokter` enum('VaniaUtami','Pitoyo') NOT NULL,
  `status` enum('selesai','registrasi','-') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `waktu_status` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rawat_jalan`
--

INSERT INTO `rawat_jalan` (`id`, `tgl_konsul`, `waktu_konsul1`, `waktu_konsul2`, `pasien`, `no_bpjs`, `poli`, `dokter`, `status`, `waktu_status`) VALUES
(65, '2023-09-23', '02:03:00', '15:03:00', 'Muhammad Hafidz', 123456, 'p_umum', 'Pitoyo', 'selesai', '2023-09-23 02:10:00'),
(66, '2023-09-23', '02:05:00', '15:05:00', 'tes', 1234, 'p_umum', 'Pitoyo', 'registrasi', '2023-09-23 02:05:00'),
(67, '2023-09-23', '02:06:00', '15:06:00', 'cek', 123, 'p_gigi', 'VaniaUtami', 'registrasi', '2023-09-23 02:06:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rawat_jalan`
--
ALTER TABLE `rawat_jalan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
