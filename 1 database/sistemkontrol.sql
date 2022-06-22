-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 10:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemkontrol`
--

-- --------------------------------------------------------

--
-- Table structure for table `iplog`
--

CREATE TABLE `iplog` (
  `id_log` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ipaddress` varchar(50) NOT NULL,
  `waktu` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iplog`
--

INSERT INTO `iplog` (`id_log`, `username`, `ipaddress`, `waktu`) VALUES
(9, 'bobo', '216.239.38.120', '31-03-2021 : 21:56:12'),
(10, 'bobo', '216.239.38.120', '01-04-2021 : 23:59:42'),
(11, 'bobo', '216.239.38.120', '02-04-2021 : 00:07:33'),
(12, 'bobo', '216.239.38.120', '02-04-2021 : 00:08:25'),
(13, 'bobo', '216.239.38.120', '02-04-2021 : 00:26:52'),
(14, 'bobo', '216.239.38.120', '02-04-2021 : 12:53:24'),
(15, 'bobo', 'www.google.com', '02-04-2021 : 13:10:49'),
(16, 'ihza', 'www.google.com', '02-04-2021 : 13:15:58'),
(17, 'lon', '216.239.38.120', '03-04-2021 : 01:07:39'),
(18, 'jon', '216.239.38.120', '03-04-2021 : 01:13:34'),
(19, 'jon', 'www.google.com', '09-04-2021 : 10:08:35'),
(20, 'jon', '216.239.38.120', '09-04-2021 : 15:30:39'),
(21, 'jon', '216.239.38.120', '09-04-2021 : 15:30:50'),
(22, 'jon', '216.239.38.120', '09-04-2021 : 15:40:43'),
(23, 'jon', '216.239.38.120', '09-04-2021 : 15:43:22'),
(24, 'jon', '216.239.38.120', '09-04-2021 : 15:44:05'),
(25, 'jon', '216.239.38.120', '09-04-2021 : 16:02:11'),
(26, 'lon', '216.239.38.120', '09-04-2021 : 16:03:09'),
(27, 'lon', 'www.google.com', '09-04-2021 : 17:31:13'),
(28, 'lon', 'www.google.com', '09-04-2021 : 17:31:59'),
(29, 'izza', 'www.google.com', '09-04-2021 : 21:50:31'),
(30, 'izza', 'www.google.com', '10-04-2021 : 04:34:30'),
(31, 'izza', '216.239.38.120', '11-04-2021 : 14:33:37'),
(32, 'izza', '216.239.38.120', '11-04-2021 : 14:35:43'),
(33, 'izza', '216.239.38.120', '11-04-2021 : 14:37:36'),
(34, 'izza', '216.239.38.120', '11-04-2021 : 14:37:49'),
(35, 'izza', '216.239.38.120', '11-04-2021 : 14:38:01'),
(36, 'izza', '216.239.38.120', '11-04-2021 : 14:38:20'),
(37, 'izza', '216.239.38.120', '11-04-2021 : 14:39:04'),
(38, 'izza', '216.239.38.120', '11-04-2021 : 14:39:53'),
(39, 'izza', '216.239.38.120', '11-04-2021 : 14:40:02'),
(40, 'fayo', '216.239.38.120', '11-04-2021 : 17:30:57'),
(41, 'izza', '216.239.38.120', '11-04-2021 : 23:45:03'),
(42, 'fayo', '216.239.38.120', '12-04-2021 : 04:33:36'),
(43, 'fayo', '216.239.38.120', '12-04-2021 : 04:33:42'),
(44, 'fafa', '216.239.38.120', '12-04-2021 : 04:34:11'),
(45, 'ihza', '216.239.38.120', '18-04-2021 : 23:23:02'),
(46, 'ihza', 'www.google.com', '22-04-2021 : 00:55:13'),
(47, 'ihza', '216.239.38.120', '23-04-2021 : 10:15:15'),
(48, 'ihza', 'www.google.com', '23-04-2021 : 10:37:10'),
(49, 'ihza', 'www.google.com', '23-04-2021 : 11:09:59'),
(50, 'ihza', '216.239.38.120', '24-04-2021 : 00:48:27'),
(51, 'fafa', '216.239.38.120', '24-04-2021 : 23:25:30'),
(52, 'ihza', 'www.google.com', '26-04-2021 : 19:55:42'),
(53, 'ihza', 'www.google.com', '27-04-2021 : 13:14:14'),
(54, 'ihza', '216.239.38.120', '19-06-2021 : 19:58:42'),
(55, 'fafa', '216.239.38.120', '20-06-2021 : 15:35:00'),
(56, 'fafa', '216.239.38.120', '20-06-2021 : 15:35:25'),
(57, 'fafa', '216.239.38.120', '20-06-2021 : 15:40:03'),
(58, 'ihza', '216.239.38.120', '20-06-2021 : 15:42:53'),
(59, 'fafa', '216.239.38.120', '20-06-2021 : 15:43:31'),
(60, 'ihza', '216.239.38.120', '20-06-2021 : 15:49:40'),
(61, 'fafa', '216.239.38.120', '20-06-2021 : 15:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `komen` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `username`, `komen`) VALUES
(1, 'bobo', 'bobo'),
(2, 'bobo', 'njkl'),
(3, 'bobo', 'dsqsq'),
(4, 'bobo', 'ada kucing hilang'),
(5, 'bobo', 'dsadas'),
(6, 'baba', 'saya mau tidur'),
(7, 'baba', 'popol'),
(8, 'baba', 'tuyul'),
(9, 'baba', 'gege'),
(10, 'baba', 'ihza'),
(11, 'izza', ''),
(12, 'izza', 'tolong di tambahin fitur data sensornya min');

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `nilai_sensor1` int(11) NOT NULL,
  `nilai_sensor2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`nilai_sensor1`, `nilai_sensor2`) VALUES
(1023, 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(72, 'lon', 'lon', 'lon', 'admin'),
(74, 'ihza', 'ihza', 'ihza', 'admin'),
(75, 'lontong', 'lontong', 'lontong', 'admin'),
(76, 'telo', 'telo', 'telo', 'admin'),
(77, 'fayo', 'fayo', 'fayo', 'admin'),
(79, 'izza', 'izza', 'izza', 'admin'),
(80, 'fafa', 'fafa', 'fafa', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iplog`
--
ALTER TABLE `iplog`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`nilai_sensor1`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iplog`
--
ALTER TABLE `iplog`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
