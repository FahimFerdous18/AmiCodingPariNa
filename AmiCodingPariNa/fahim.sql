-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 06:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fahim`
--

-- --------------------------------------------------------

--
-- Table structure for table `number_tab`
--

CREATE TABLE `number_tab` (
  `username` varchar(255) DEFAULT NULL,
  `number1` int(11) DEFAULT NULL,
  `time1` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `number_tab`
--

INSERT INTO `number_tab` (`username`, `number1`, `time1`, `id`) VALUES
('fahim@gmail.com', 9, '2021-09-25 00:00:am', 139),
('fahim@gmail.com', 7, '2021-09-25 00:00:am', 140),
('fahim@gmail.com', 5, '2021-09-25 00:00:am', 141),
('fahim@gmail.com', 4, '2021-09-25 00:00:am', 142),
('fahim@gmail.com', 3, '2021-09-25 00:00:am', 143),
('fahim@gmail.com', 1, '2021-09-25 00:00:am', 144);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name1` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password1` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name1`, `email`, `password1`, `id`) VALUES
(NULL, 'fahim@gmail.com', '1234', 165),
(NULL, 'fahim1@gmail.com', '123', 166);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `number_tab`
--
ALTER TABLE `number_tab`
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
-- AUTO_INCREMENT for table `number_tab`
--
ALTER TABLE `number_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
