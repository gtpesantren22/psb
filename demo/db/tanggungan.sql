-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 01:19 AM
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
-- Database: `psb23`
--

-- --------------------------------------------------------

--
-- Table structure for table `tanggungan`
--

CREATE TABLE `tanggungan` (
  `id_tgn` varchar(255) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `daftar` decimal(20,0) NOT NULL,
  `seragam_pes` decimal(20,0) NOT NULL,
  `seragam_lem` decimal(20,0) NOT NULL,
  `orsaba` decimal(20,0) NOT NULL,
  `kartu` decimal(20,0) NOT NULL,
  `buku` decimal(20,0) NOT NULL,
  `kalender` decimal(20,0) NOT NULL,
  `infaq` decimal(20,0) NOT NULL,
  `st_seragam_pes` int(11) NOT NULL,
  `st_seragam_lem` int(11) NOT NULL,
  `st_orsaba` int(11) NOT NULL,
  `st_kartu` int(11) NOT NULL,
  `st_buku` int(11) NOT NULL,
  `st_kalender` int(11) NOT NULL,
  `st_infaq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggungan`
--

INSERT INTO `tanggungan` (`id_tgn`, `nis`, `daftar`, `seragam_pes`, `seragam_lem`, `orsaba`, `kartu`, `buku`, `kalender`, `infaq`, `st_seragam_pes`, `st_seragam_lem`, `st_orsaba`, `st_kartu`, `st_buku`, `st_kalender`, `st_infaq`) VALUES
('1d5644a3-2375-4351-946a-af65f5bc631a', '20231003', '0', '250000', '250000', '50000', '50000', '40000', '50000', '600000', 1, 0, 0, 0, 0, 0, 0),
('62243637-a496-46c4-bdba-9bf995e9e68d', '20231002', '0', '250000', '250000', '50000', '50000', '40000', '50000', '600000', 0, 0, 0, 0, 0, 0, 0),
('bd3e0e8c-6e97-4b45-9300-0a2512b6189f', '20231001', '0', '0', '250000', '50000', '20000', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tanggungan`
--
ALTER TABLE `tanggungan`
  ADD PRIMARY KEY (`id_tgn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
