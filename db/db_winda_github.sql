-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 06:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_winda_github`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_benih`
--

CREATE TABLE `tbl_benih` (
  `id_benih` int(11) NOT NULL,
  `nm_benih` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `varietas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_benih`
--

INSERT INTO `tbl_benih` (`id_benih`, `nm_benih`, `jenis`, `varietas`) VALUES
(1, 'Kedelai', 'AC1', 'Hibrida'),
(2, 'Padi', 'AC3', 'Hibrida'),
(3, 'Jagung', 'AC2', 'Hibrida');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tani`
--

CREATE TABLE `tbl_tani` (
  `id_kelompok` int(11) NOT NULL,
  `nm_kelompok` varchar(255) NOT NULL,
  `nm_ketua` varchar(255) NOT NULL,
  `jml_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tani`
--

INSERT INTO `tbl_tani` (`id_kelompok`, `nm_kelompok`, `nm_ketua`, `jml_anggota`) VALUES
(1, 'Pane Jaya', 'Pak Imran', 25),
(2, 'Makmur Jaya', 'Pak Saleh', 30),
(3, 'petani makmur', 'pak jaya', 15),
(4, 'Bangun Maju', 'pak isdri', 18),
(5, 'Harum Wangi', 'pak mardian', 22),
(6, 'Tani Mantap', 'pak harun', 12),
(7, 'Desa Jaya', 'pak labirin', 15),
(8, 'Rawang Jaya', 'pak angga', 21),
(9, 'Serang Abdi', 'pak luhut', 17),
(10, 'Benih Unggulan', 'pak Raja', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_terima`
--

CREATE TABLE `tbl_terima` (
  `id_terima` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `id_benih` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jml` int(11) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_terima`
--

INSERT INTO `tbl_terima` (`id_terima`, `id_kelompok`, `id_benih`, `tgl`, `jml`, `ket`) VALUES
(1, 1, 1, '2020-01-28', 20, 'ket'),
(2, 2, 2, '2020-01-14', 50, 'ket'),
(3, 3, 3, '2020-01-23', 40, 'ket'),
(4, 4, 1, '2020-01-20', 25, 'ket'),
(5, 5, 2, '2020-01-02', 32, 'ket'),
(6, 6, 3, '2020-01-10', 45, 'ket');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `email`, `nama_lengkap`, `level`, `keterangan`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'arwinda', 1, 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_benih`
--
ALTER TABLE `tbl_benih`
  ADD PRIMARY KEY (`id_benih`);

--
-- Indexes for table `tbl_tani`
--
ALTER TABLE `tbl_tani`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- Indexes for table `tbl_terima`
--
ALTER TABLE `tbl_terima`
  ADD PRIMARY KEY (`id_terima`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_benih`
--
ALTER TABLE `tbl_benih`
  MODIFY `id_benih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_tani`
--
ALTER TABLE `tbl_tani`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_terima`
--
ALTER TABLE `tbl_terima`
  MODIFY `id_terima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
