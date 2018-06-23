-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2018 at 04:33 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d02acf40`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_1`
--

CREATE TABLE `category_1` (
  `id` int(11) NOT NULL,
  `image_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_1`
--

INSERT INTO `category_1` (`id`, `image_id`) VALUES
(1, 'ID1010'),
(2, 'ID1020'),
(3, 'ID1080'),
(4, 'ID1090'),
(5, 'ID1140'),
(6, 'ID1190'),
(7, 'ID1200'),
(8, 'ID1250'),
(9, 'ID1280'),
(10, 'ID1310'),
(11, 'ID1340'),
(12, 'ID1400'),
(13, 'ID1410'),
(14, 'ID1500'),
(15, 'ID1540'),
(16, 'ID1550'),
(17, 'ID1580'),
(18, 'ID1590'),
(19, 'ID1600'),
(20, 'ID1630');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_1`
--
ALTER TABLE `category_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_1`
--
ALTER TABLE `category_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
