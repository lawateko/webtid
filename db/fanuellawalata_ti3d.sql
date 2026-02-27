-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2026 at 03:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fanuellawalata_ti3d`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `no` int(11) NOT NULL,
  `nid` varchar(9) DEFAULT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`no`, `nid`, `nama`, `alamat`) VALUES
(1, '111', 'Pak Harno', 'Batu Merah'),
(2, '222', 'M. Ikbal Siami', 'Batu Merah'),
(3, '333', 'Pak Subhan', 'Karpan'),
(4, '444', 'Rowan Syaranamual', 'Kudamati\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `kode_jurusan` varchar(50) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `nid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode_jurusan`, `nama_jurusan`, `nid`) VALUES
(2, 'TI11', 'TEKNIK INFORMATIKA', 234),
(3, 'SI22', 'SISTEM INFORMASI', 222),
(4, 'PW32', 'PARIWISATA', 111);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `no` int(11) NOT NULL,
  `nim` varchar(9) DEFAULT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `jurusan` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`no`, `nim`, `nama`, `alamat`, `jurusan`) VALUES
(2, '240101114', 'Juan Wattimena', 'Kudamati', 'Teknik Informatika'),
(3, '244010111', 'Gabriel Haumahu', 'Gunung Nona', 'Teknik Informatika'),
(4, '240101111', 'Alfonsus Latumakulita', 'Kopertis', 'Teknik Informatika'),
(5, '240101189', 'Rizky Pratama', 'Galunggung', 'Teknik Informatika'),
(7, '240101113', 'Yosua Nurlatu', 'Talake', 'Teknik Informatika'),
(8, '240101112', 'Sherly Saukoly', 'Gunung Nona', 'Teknik Informatika'),
(9, '240101117', 'Joselino Haumahu', 'Passo', 'Teknik Informatika'),
(10, '240101115', 'Fanuel Pniel Theodriclus Lawalata', 'Lateri', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `kode_matkul` varchar(50) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL,
  `dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `kode_matkul`, `nama_matkul`, `dosen`) VALUES
(9, 'PW123', 'Pemrograman Web', '333'),
(10, 'PM123', 'Pemograman Mobile', '444'),
(11, 'PBO123', 'Pemograman Berbasis Objek', '222'),
(12, 'PBD123', 'Pemrograman Basis Data', '333'),
(13, 'AM123', 'Animasi Komputer dan Multimedia', '111');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_pengguna`, `email`, `password`, `role`) VALUES
(6, 'Theo Lawalata', 'theo@gmail.com', '$2y$10$IEeLo0FI685wPJ2MB6HWgu9ehUKHt4zvB6cEu5qaXBfojFxX.sa36', 'admin'),
(9, 'Lemon', 'lemon@gmail.com', '$2y$10$F51h3Heu288Ait78aBl0lu8zOY77RV72vL/vz2kZwhvwxkIyy/l/S', 'admin'),
(10, 'Alpukat', 'alpukat@gmail.com', '$2y$10$GqywrRxBB3V0zv49NiHimeXn.2UzSNiLKA6pBdO/ZYdJcNt/87aZO', 'admin'),
(11, 'Durian', 'durian@gmail.com', '$2y$10$o35sa7E1eC/8yTrf/ZPowOMJocQlsCubCJ7MOaendu9geDNoIASrS', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
