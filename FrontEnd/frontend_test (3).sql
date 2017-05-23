-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 08:59 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frontend_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `keyword` varchar(256) DEFAULT NULL,
  `Name` varchar(256) DEFAULT NULL,
  `ranking_type` varchar(256) DEFAULT NULL,
  `period` varchar(256) DEFAULT NULL,
  `limit_size` int(11) DEFAULT NULL,
  `lang` varchar(256) DEFAULT NULL,
  `colors` varchar(256) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `https` varchar(256) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `keyword`, `Name`, `ranking_type`, `period`, `limit_size`, `lang`, `colors`, `size`, `https`, `created_at`) VALUES
(1, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-14 14:25:13'),
(2, '456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-14 14:25:43'),
(3, NULL, '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-14 14:25:51'),
(4, NULL, NULL, 'ITM', NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-14 14:25:57'),
(5, '4564', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-14 14:26:16'),
(6, NULL, '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-14 14:26:20'),
(7, NULL, NULL, 'WIN', NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-14 14:26:22'),
(8, NULL, NULL, 'ITM', NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-14 14:26:28'),
(9, '4564', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-14 14:26:40'),
(10, NULL, NULL, 'WIN', NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-15 08:53:40'),
(11, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-19 06:58:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
