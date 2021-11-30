-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 03:19 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaksin_penduduk`
--
CREATE DATABASE IF NOT EXISTS `vaksin_penduduk` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vaksin_penduduk`;

-- --------------------------------------------------------

--
-- Table structure for table `datapenduduk`
--

DROP TABLE IF EXISTS `datapenduduk`;
CREATE TABLE `datapenduduk` (
  `id` int(255) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Usia` varchar(25) NOT NULL,
  `Tempat_Tinggal` varchar(255) NOT NULL,
  `Vaksin` varchar(25) NOT NULL,
  `Alasan` varchar(255) NOT NULL,
  `Jenis` varchar(50) NOT NULL,
  `Orang_Dirumah` varchar(25) NOT NULL,
  `Orang_Vaksin` varchar(25) NOT NULL,
  `Orang_Ketemu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapenduduk`
--
ALTER TABLE `datapenduduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapenduduk`
--
ALTER TABLE `datapenduduk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
