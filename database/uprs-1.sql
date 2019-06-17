-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 15, 2019 at 04:20 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uprs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_login` int(10) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_login`, `user`, `pass`) VALUES
(1, 'admin', 'admin_123');

-- --------------------------------------------------------

--
-- Table structure for table `blok`
--

CREATE TABLE `blok` (
  `id_blok` int(10) NOT NULL,
  `id_rusun` int(10) NOT NULL,
  `nama_rusun` varchar(50) NOT NULL,
  `blok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blok`
--

INSERT INTO `blok` (`id_blok`, `id_rusun`, `nama_rusun`, `blok`) VALUES
(1, 24, 'Cipinang Besar Selatan', 'A'),
(2, 24, 'Cipinang Besar Selatan', 'B'),
(3, 24, 'Cipinang Besar Selatan', 'C'),
(4, 24, 'Cipinang Besar Selatan', 'D'),
(5, 24, 'Cipinang Besar Selatan', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `id_data` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `nik` int(100) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `umur` int(5) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_keluarga`
--

INSERT INTO `data_keluarga` (`id_data`, `id_sp`, `nik`, `nama`, `umur`, `jenis_kelamin`, `pekerjaan`) VALUES
(2, 3, 54658797, 'Renni', 50, 'Perempuan', 'Pedagang'),
(4, 3, 2147483647, 'Stefani', 20, 'Perempuan', 'Penyanyi'),
(5, 5, 516598654, 'Juki', 45, 'Laki - Laki ', 'Pegawai Negri Sipil'),
(6, 5, 2147483647, 'Tuti', 38, 'Perempuan', 'Ibu Rumah Tangga'),
(7, 5, 2147483647, 'Danu', 16, 'Laki - Laki ', 'Pelajar'),
(8, 5, 2147483647, 'Jenni', 14, 'Perempuan', 'Pelajar'),
(9, 6, 454, '5ada', 31, 'Laki - Laki ', 'asdad'),
(10, 6, 123, 'ewrwe', 19, 'Perempuan', 'Pedagang'),
(11, 6, 1231, 'w1rtr', 21, 'Laki - Laki ', 'sdadasd'),
(12, 6, 2365, 'dad', 34, 'Perempuan', 'daweq');

-- --------------------------------------------------------

--
-- Table structure for table `data_sp`
--

CREATE TABLE `data_sp` (
  `id_sp` int(10) NOT NULL,
  `id_rusun` int(10) NOT NULL,
  `nomor_kk` int(100) NOT NULL,
  `nomor_sp` varchar(100) NOT NULL,
  `nama_sp` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sp`
--

INSERT INTO `data_sp` (`id_sp`, `id_rusun`, `nomor_kk`, `nomor_sp`, `nama_sp`) VALUES
(1, 20, 2147483647, '2147483647', 'Daniel'),
(3, 20, 2147483647, '213131', 'Renni'),
(4, 20, 2147483647, '165461268', 'Muti'),
(5, 24, 2147483647, '21314654', 'Tuti');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_gender` int(10) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_gender`, `jenis_kelamin`) VALUES
(1, 'Laki - Laki '),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `rusun`
--

CREATE TABLE `rusun` (
  `id_uprs` int(10) NOT NULL,
  `id_rusun` int(20) NOT NULL,
  `lantai` int(10) NOT NULL,
  `tarif_umum` int(30) NOT NULL,
  `tarif_relokasi` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rusun`
--

INSERT INTO `rusun` (`id_uprs`, `id_rusun`, `lantai`, `tarif_umum`, `tarif_relokasi`) VALUES
(1, 26, 1, 508000, 234000),
(2, 26, 2, 461000, 212000),
(3, 26, 3, 419000, 192000),
(4, 26, 4, 378000, 173000),
(5, 26, 5, 341000, 156000),
(6, 24, 1, 344000, 214000),
(7, 24, 2, 327000, 213000),
(8, 24, 3, 312000, 193000),
(9, 24, 4, 297000, 184000),
(10, 24, 5, 282000, 175000),
(11, 20, 1, 399000, 257000),
(12, 20, 2, 380000, 245000),
(13, 20, 3, 361000, 233000),
(14, 20, 4, 343000, 222000),
(15, 20, 5, 325000, 211000);

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `lantai` int(10) NOT NULL,
  `blok` varchar(50) NOT NULL,
  `unit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tarif_relokasi`
--

CREATE TABLE `tarif_relokasi` (
  `id_tarif` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_rusun` int(11) NOT NULL,
  `lantai` int(11) NOT NULL,
  `tarif_relokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif_relokasi`
--

INSERT INTO `tarif_relokasi` (`id_tarif`, `id_status`, `id_rusun`, `lantai`, `tarif_relokasi`) VALUES
(1, 2, 26, 1, 234000),
(2, 2, 26, 2, 212000),
(3, 2, 26, 3, 192000),
(4, 2, 26, 4, 173000),
(5, 2, 26, 5, 156000),
(6, 2, 24, 1, 214000),
(7, 2, 24, 2, 213000),
(8, 2, 24, 3, 193000),
(9, 2, 24, 4, 184000),
(10, 2, 24, 5, 175000),
(11, 2, 20, 1, 257000),
(12, 2, 20, 2, 245000),
(13, 2, 20, 3, 233000),
(14, 2, 20, 4, 222000),
(15, 2, 20, 5, 211000);

-- --------------------------------------------------------

--
-- Table structure for table `tarif_umum`
--

CREATE TABLE `tarif_umum` (
  `id_tarif` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_rusun` int(11) NOT NULL,
  `lantai` int(11) NOT NULL,
  `tarif_umum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif_umum`
--

INSERT INTO `tarif_umum` (`id_tarif`, `id_status`, `id_rusun`, `lantai`, `tarif_umum`) VALUES
(1, 1, 26, 1, 508000),
(2, 1, 26, 2, 461000),
(3, 1, 26, 3, 419000),
(4, 1, 26, 4, 378000),
(5, 1, 26, 5, 341000),
(6, 1, 24, 1, 344000),
(7, 1, 24, 2, 327000),
(8, 1, 24, 3, 312000),
(9, 1, 24, 4, 297000),
(10, 1, 24, 5, 282000),
(11, 1, 20, 1, 399000),
(12, 1, 20, 2, 380000),
(13, 1, 20, 3, 361000),
(14, 1, 20, 4, 343000),
(15, 1, 20, 5, 325000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rusun`
--

CREATE TABLE `tb_rusun` (
  `id_rusun` int(10) NOT NULL,
  `nama_rusun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rusun`
--

INSERT INTO `tb_rusun` (`id_rusun`, `nama_rusun`) VALUES
(20, 'Rusun Pondok Bambu '),
(24, 'Rusun Cipinang Besar Selatan'),
(26, 'Rusun Cipinang Muara'),
(28, 'BLK Pasar rebo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `status`) VALUES
(1, 'Relokasi'),
(2, 'Umum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_login`);

--
-- Indexes for table `blok`
--
ALTER TABLE `blok`
  ADD PRIMARY KEY (`id_blok`);

--
-- Indexes for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `data_sp`
--
ALTER TABLE `data_sp`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indexes for table `rusun`
--
ALTER TABLE `rusun`
  ADD PRIMARY KEY (`id_uprs`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indexes for table `tarif_relokasi`
--
ALTER TABLE `tarif_relokasi`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indexes for table `tarif_umum`
--
ALTER TABLE `tarif_umum`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indexes for table `tb_rusun`
--
ALTER TABLE `tb_rusun`
  ADD PRIMARY KEY (`id_rusun`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_login` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blok`
--
ALTER TABLE `blok`
  MODIFY `id_blok` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id_data` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_sp`
--
ALTER TABLE `data_sp`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rusun`
--
ALTER TABLE `rusun`
  MODIFY `id_uprs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tarif_relokasi`
--
ALTER TABLE `tarif_relokasi`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tarif_umum`
--
ALTER TABLE `tarif_umum`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
