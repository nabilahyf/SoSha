-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2018 at 12:32 AM
-- Server version: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sosha`
--

-- --------------------------------------------------------

--
-- Table structure for table `ikut_kegiatan`
--

CREATE TABLE `ikut_kegiatan` (
  `id_ikut` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `kegiatan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `description` text NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi_tempat`
--

CREATE TABLE `rekomendasi_tempat` (
  `id_tempat` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `jenkel` char(1) NOT NULL,
  `birthday` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ikut_kegiatan`
--
ALTER TABLE `ikut_kegiatan`
  ADD PRIMARY KEY (`id_ikut`),
  ADD KEY `id_kegiatan` (`id_kegiatan`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kegiatan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rekomendasi_tempat`
--
ALTER TABLE `rekomendasi_tempat`
  ADD PRIMARY KEY (`id_tempat`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ikut_kegiatan`
--
ALTER TABLE `ikut_kegiatan`
  MODIFY `id_ikut` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rekomendasi_tempat`
--
ALTER TABLE `rekomendasi_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ikut_kegiatan`
--
ALTER TABLE `ikut_kegiatan`
  ADD CONSTRAINT `ikut_kegiatan_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`kegiatan_id`),
  ADD CONSTRAINT `ikut_kegiatan_ibfk_2` FOREIGN KEY (`id_peserta`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `rekomendasi_tempat`
--
ALTER TABLE `rekomendasi_tempat`
  ADD CONSTRAINT `rekomendasi_tempat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
