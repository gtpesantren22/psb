-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 12:48 AM
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
-- Table structure for table `pend`
--

CREATE TABLE `pend` (
  `id_pend` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pend`
--

INSERT INTO `pend` (`id_pend`, `nama`) VALUES
(1, 'TIDAK / BELUM SEKOLAH'),
(2, 'BELUM TAMAT SD/SEDERAJAT'),
(3, 'SD/SEDERAJAT'),
(4, 'SLTP/SEDERAJAT'),
(5, 'SLTA/SEDERAJAT'),
(6, 'DIPLOMA I / II'),
(7, 'AKADEMI/ DIPLOMA III/S. MUDA'),
(8, 'DIPLOMA IV/ SARJANA'),
(9, 'S2'),
(10, 'S3'),
(11, 'NON FORMAL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pend`
--
ALTER TABLE `pend`
  ADD PRIMARY KEY (`id_pend`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pend`
--
ALTER TABLE `pend`
  MODIFY `id_pend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
