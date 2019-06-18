-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 05:35 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-peralatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(2) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_penuh` varchar(255) NOT NULL,
  `jawatan` varchar(255) NOT NULL,
  `bahagian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama_penuh`, `jawatan`, `bahagian`) VALUES
(1, 'admin', 'admin123', 'Hafiz Shariff', 'Penolong Pegawai Teknologi Maklumat', 'Unit ICT');

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `id_no` int(2) NOT NULL,
  `id_peralatan` int(2) NOT NULL,
  `peralatan` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `no_aset` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peralatan`
--

INSERT INTO `peralatan` (`id_no`, `id_peralatan`, `peralatan`, `model`, `no_aset`) VALUES
(1, 1, 'LCD Projector', 'Mini Projector Acer C205', 'JPS/ICT/002003045/R/15/1'),
(2, 2, 'LCD Projector', 'Panasonic PT LB51', 'JPS/PK24/1/08/2'),
(3, 34, 'Laptop', 'HP PRO BOOK 440 G2v', 'JPS/ICT/001002002/H/15/34'),
(4, 35, 'Laptop', 'HP PRO BOOK 440 G2v', 'JPS/ICT/001002002/H/15/35'),
(5, 36, 'Laptop', 'HP PRO BOOK 440 G2v', 'JPS/ICT/001002002/H/15/36'),
(6, 41, 'Laptop', 'HP PRO BOOK 440 G2v', 'JPS/ICT/001002002/H/15/41'),
(7, 42, 'LCD Projector', 'Hitachi CP-X264', 'JPS/ICT/H/LCD/2010/42'),
(8, 43, 'LCD Projector', 'Hitachi CP-X264', 'JPS/ICT/H/LCD/2010/43'),
(9, 61, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/61'),
(10, 62, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/62'),
(11, 63, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/63'),
(12, 64, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/64'),
(13, 65, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/65'),
(14, 66, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/66'),
(15, 67, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/67'),
(16, 68, 'Laptop', 'HP PRO BOOK 43415', 'JPS/ICT/H/LAPTOP/2012/68'),
(17, 0, 'Screen Projector', '', 'JPS/BPA 64/I/09/637'),
(19, 0, 'Screen Projector', '', 'JPS/ICT/002003022/R/15/8'),
(20, 32, 'Camera', 'Nikon D90', 'JPS/ICT/H/CAMERA/2011/K/32'),
(21, 42, 'Camera', 'Nikon D90', 'JPS/ICT/002006001/H/15/42'),
(22, 43, 'Camera', 'Nikon D90', 'JPS/ICT/002006001/H/15/43'),
(23, 2, 'Camera', 'Samsung Galaxy Camera 2', 'JPS/ICT/002006002/R/15/2'),
(24, 0, 'Video Camera', 'Sony NEX-VG20 Pro Video Pack', 'JPS/ICT/H/VIDEOCAM/2012/69');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id_permohonan` int(3) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `jawatan` varchar(255) NOT NULL,
  `bahagian` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `tempat_digunakan` varchar(255) NOT NULL,
  `tarikh_pinjam` varchar(255) NOT NULL,
  `tarikh_pulang` varchar(255) NOT NULL,
  `peralatan1` varchar(255) NOT NULL,
  `peralatan2` varchar(255) NOT NULL,
  `peralatan3` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `tarikh_terima` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id_permohonan`, `nama_pemohon`, `jawatan`, `bahagian`, `tujuan`, `tempat_digunakan`, `tarikh_pinjam`, `tarikh_pulang`, `peralatan1`, `peralatan2`, `peralatan3`, `status`, `tarikh_terima`) VALUES
(33, 'Khai Bahar', 'Administrator', 'Unit Makmal', 'Kuala Lumpur', 'Bilik Mesyuarat', '18 December 2018', '18 December 2018', 'JPS/ICT/H/VIDEOCAM/2012/69', 'Tiada', 'Tiada', 2, ''),
(34, 'Siti Nordiana', 'Pegawai Kewangan', 'Jabatan Kewangan', 'Mesyuarat Kewangan', 'Bilik Mesyuarat', '20 December 2018', '20 December 2018', 'JPS/ICT/H/LAPTOP/2012/64', 'JPS/ICT/002003045/R/15/1', 'JPS/BPA 64/I/09/637', 1, ''),
(35, 'Wany Hasrita', 'test', 'test', 'test', 'test', '24 December 2018', '24 December 2018', 'JPS/ICT/002006002/R/15/2', 'Tiada', 'Tiada', 2, ''),
(36, 'Natasha Hudson', 'TEST', 'TEST', 'TEST', 'TEST', '21 December 2018', '21 December 2018', 'JPS/ICT/002006001/H/15/43', 'JPS/BPA 64/I/09/637', 'JPS/ICT/001002002/H/15/41', 1, ''),
(37, 'Hafiz Shariff', 'Pegawai Teknologi Maklumat', 'Unit ICT', 'Mesyuarat Jawatankuasa ICT', 'Bilik Mesyuarat', '29 December 2018', '29 December 2018', 'JPS/ICT/001002002/H/15/34', 'JPS/ICT/002003045/R/15/1', 'JPS/ICT/002003022/R/15/8', 1, ''),
(38, 'Zul Handy Black', 'testing', 'testing', 'testing', 'testing', '24 December 2018', '24 December 2018', 'JPS/ICT/001002002/H/15/34', 'JPS/ICT/002003045/R/15/1', 'JPS/BPA 64/I/09/637', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `peralatan`
--
ALTER TABLE `peralatan`
  MODIFY `id_no` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id_permohonan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
