-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 08:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limty`
--

-- --------------------------------------------------------

--
-- Table structure for table `general_info`
--

CREATE TABLE `general_info` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_info`
--

INSERT INTO `general_info` (`id`, `logo`, `phone`, `email`, `address`, `website`, `map`) VALUES
(1, 'logo.png', '01759526830', 'mahmudunnabi140@gmail.com', 'Jikatola,Dhaka', 'www.general.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.136467413362!2d90.37732731445637!3d23.77815429363354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7921c87c307%3A0xc9e8456cd1e470d9!2z4KaG4KaH4Kah4Ka_4Kas4Ka_IOCmreCmrOCmqA!5e0!3m2!1sbn!2sbd!4v1668747686150!5m2!1sbn!2sbd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general_info`
--
ALTER TABLE `general_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general_info`
--
ALTER TABLE `general_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
