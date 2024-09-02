-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 05:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gas`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `gander` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `gander`, `email`, `password`) VALUES
(1, 'Ø§Ø­Ù…Ø¯ Ø§Ù„Ø§Ø³Ø·ÙˆØ±Ù‡', '091234', 'ah.a@gmail.com', '', '1110'),
(2, 'Ø¹Ø±ÙˆÙ‡ Ø§Ø­Ù…Ø¯', '2943', 'a@a.com', 'male', '1110');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_image` longtext NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `agb` int(3) NOT NULL,
  `total` int(3) NOT NULL,
  `aman` int(3) NOT NULL,
  `alnail` int(3) NOT NULL,
  `gadra` int(3) NOT NULL,
  `alwdania` int(3) NOT NULL,
  `soda` int(3) NOT NULL,
  `iran` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `shop_name`, `shop_image`, `phone`, `location`, `address`, `password`, `agb`, `total`, `aman`, `alnail`, `gadra`, `alwdania`, `soda`, `iran`) VALUES
(2, 'Ø³Ø§Ù…Ø¨Ø§', 'images/IMG10.05.19.jpg', '091223490', 'Ø¨Ø­Ø±ÙŠ', 'Ø©Ø¨Ù†ÙƒØ©Ù„Ø§ÙƒØ¨Ø©ÙŠØ¨Ù„Ø§ÙŠÙ†Ø¨', '22220', 1, 1, 1, 0, 1, 0, 1, 0),
(3, 'Ù…Ø­Ù…Ø¯ Ø³ÙŠØ¯ Ù„Ù„ØºØ§Ø²', 'images/IMG12.21.36.jpg', '01109829600', 'Ø¨Ø­Ø±ÙŠ', 'Ø§Ù„Ù…Ø±ÙŠÙˆØ·ÙŠØ©', '1110', 0, 0, 0, 0, 1, 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
