-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 12:47 AM
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
-- Table structure for table `tb_santri`
--

CREATE TABLE `tb_santri` (
  `id_santri` varchar(255) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jkl` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `lembaga` enum('RA','MI','MTs','SMP','MA','SMK') NOT NULL,
  `jln` text NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `prov` varchar(100) NOT NULL,
  `bapak` varchar(50) NOT NULL,
  `a_nik` varchar(20) NOT NULL,
  `a_tempat` varchar(50) NOT NULL,
  `a_tanggal` varchar(20) NOT NULL,
  `a_pkj` varchar(30) NOT NULL,
  `a_pend` varchar(20) NOT NULL,
  `a_hasil` varchar(30) NOT NULL,
  `a_stts` enum('Hidup','Meninggal') NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `i_nik` varchar(20) NOT NULL,
  `i_tempat` varchar(50) NOT NULL,
  `i_tanggal` varchar(20) NOT NULL,
  `i_pkj` varchar(30) NOT NULL,
  `i_pend` varchar(20) NOT NULL,
  `i_hasil` varchar(30) NOT NULL,
  `i_stts` enum('Hidup','Meninggal') NOT NULL,
  `hp` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `stts` varchar(50) NOT NULL,
  `gel` varchar(20) NOT NULL,
  `jalur` enum('Prestasi','Reguler') NOT NULL,
  `waktu_daftar` datetime NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `jml_sdr` int(2) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `asal` text NOT NULL,
  `npsn` int(11) NOT NULL,
  `a_asal` text NOT NULL,
  `ket` varchar(10) NOT NULL,
  `tinggal` enum('Rumah','Pesantren') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_santri`
--

INSERT INTO `tb_santri` (`id_santri`, `nis`, `nisn`, `nik`, `no_kk`, `nama`, `tempat`, `tanggal`, `jkl`, `agama`, `lembaga`, `jln`, `rt`, `rw`, `desa`, `kec`, `kab`, `prov`, `bapak`, `a_nik`, `a_tempat`, `a_tanggal`, `a_pkj`, `a_pend`, `a_hasil`, `a_stts`, `ibu`, `i_nik`, `i_tempat`, `i_tanggal`, `i_pkj`, `i_pend`, `i_hasil`, `i_stts`, `hp`, `username`, `password`, `stts`, `gel`, `jalur`, `waktu_daftar`, `anak_ke`, `jml_sdr`, `jenis`, `asal`, `npsn`, `a_asal`, `ket`, `tinggal`) VALUES
('550f5e9e-ec42-43e8-b1cd-2825f6d8b7d4', '20231002', '', '3245678986543567', '3245678986543567', 'WRSFWH', 'WRHWTH', '14-9-2020', 'Laki-laki', '', 'MI', '', '', '', 'Asembakor', 'Kraksaan', 'Kab. Probolinggo', 'Jawa Timur', '', '', '', '', '', '', '', 'Hidup', '', '', '', '', '', '', '', 'Hidup', '085236924510', '20231002', '', 'Belum Terverifikasi', '3', 'Reguler', '2022-11-15 15:32:59', 0, 0, '', '', 0, '', 'baru', 'Rumah'),
('a7bae377-7050-4aa9-8af7-d1763eeb2208', '20232003', '00343444', '1234567876543234', '2345678765432345', 'AHMAD SANAJI KOLAM', 'PROBOLINGGO', '4-4-2009', 'Laki-laki', 'Islam', 'RA', '', '', '', 'Perigi Raya', 'Bulik', 'Kab. Lamandau', 'Kalimantan Tengah', '', '', '', '', '', '', '', 'Hidup', '', '', '', '', '', '', '', 'Hidup', '085236924510', '20232003', '$2y$10$Dl.pDn/5CMTV7iVZInqQZOcF1m892i/2p9Lm28f0tcZBs5V.ep0Ja', 'Belum Terverifikasi', '3', 'Reguler', '2022-11-15 17:50:23', 1, 3, '', '', 0, '', 'baru', 'Rumah'),
('b3616d9f-a3d1-4c5b-9488-a1b189d5cb81', '20232001', '', '3455432543234565', '3455432543234565', 'AWDSEDFGH', 'SRTY', '14-10-2022', 'Perempuan', '', 'MI', '', '', '', 'Asembakor', 'Kraksaan', 'Kab. Probolinggo', 'Jawa Timur', '', '', '', '', '', '', '', 'Hidup', '', '', '', '', '', '', '', 'Hidup', '085236924510', '20232001', '', 'Belum Terverifikasi', '3', 'Reguler', '2022-11-15 15:31:27', 0, 0, '', '', 0, '', 'baru', 'Rumah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_santri`
--
ALTER TABLE `tb_santri`
  ADD PRIMARY KEY (`id_santri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
