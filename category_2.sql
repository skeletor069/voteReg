-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2018 at 04:34 AM
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
-- Table structure for table `category_2`
--

CREATE TABLE `category_2` (
  `id` int(11) NOT NULL,
  `gallery_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_2`
--

INSERT INTO `category_2` (`id`, `gallery_id`) VALUES
(1, 'gallery1'),
(2, 'gallery2'),
(3, 'gallery3'),
(4, 'gallery4'),
(5, 'gallery5'),
(6, 'gallery6'),
(7, 'gallery7'),
(8, 'gallery8'),
(9, 'gallery9'),
(10, 'gallery10'),
(11, 'gallery11'),
(12, 'gallery12'),
(13, 'gallery13'),
(14, 'gallery14'),
(15, 'gallery15'),
(16, 'gallery16'),
(17, 'gallery17'),
(18, 'gallery18'),
(19, 'gallery19'),
(20, 'gallery20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_2`
--
ALTER TABLE `category_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_2`
--
ALTER TABLE `category_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
