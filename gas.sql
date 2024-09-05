-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 01:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`) VALUES
(1, 'Super Admin', 'gas', '2024');

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
(2, 'Ø¹Ø±ÙˆÙ‡ Ø§Ø­Ù…Ø¯', '2943', 'a@a.com', 'male', '1110'),
(3, 'Ù…Ø­Ù…Ø¯ Ø³ÙŠØ¯ Ø­Ø³Ù† ØºÙ†ÙŠÙ…', '0915657576', 'male', 'medo@gmail.com', 'mmmm');

-- --------------------------------------------------------

--
-- Table structure for table `gas_tube`
--

CREATE TABLE `gas_tube` (
  `id` int(11) NOT NULL,
  `agb` varchar(3) NOT NULL,
  `total` varchar(3) NOT NULL,
  `aman` varchar(3) NOT NULL,
  `alnil` varchar(3) NOT NULL,
  `gadra` varchar(3) NOT NULL,
  `alwdania` varchar(3) NOT NULL,
  `soda` varchar(3) NOT NULL,
  `iran` varchar(3) NOT NULL,
  `shop_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `shop_name`, `shop_image`, `phone`, `location`, `address`, `password`) VALUES
(2, 'Ø³Ø§Ù…Ø¨Ø§', 'images/IMG10.05.19.jpg', '091223490', 'Ø¨Ø­Ø±ÙŠ', 'Ø©Ø¨Ù†ÙƒØ©Ù„Ø§ÙƒØ¨Ø©ÙŠØ¨Ù„Ø§ÙŠÙ†Ø¨', '22220'),
(3, 'Ù…Ø­Ù…Ø¯ Ø³ÙŠØ¯ Ù„Ù„ØºØ§Ø²', 'images/IMG12.21.36.jpg', '01109829600', 'Ø¨Ø­Ø±ÙŠ', 'Ø§Ù„Ù…Ø±ÙŠÙˆØ·ÙŠØ©', '1110');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gas_tube`
--
ALTER TABLE `gas_tube`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gas_tube`
--
ALTER TABLE `gas_tube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `gas_tube`
--
ALTER TABLE `gas_tube`
  ADD CONSTRAINT `gas_tube_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
