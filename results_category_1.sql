-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2018 at 05:58 PM
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
-- Structure for view `results_category_1`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `results_category_1`  AS  select `c`.`image_id` AS `image_id`,count(0) AS `votes` from ((`category_1` `c` join `vote_cat_1` `v`) join `users` `u`) where ((`u`.`verified` = 1) and (`u`.`id` = `v`.`user_id`) and ((`c`.`image_id` = `v`.`choice1`) or (`c`.`image_id` = `v`.`choice2`) or (`c`.`image_id` = `v`.`choice3`))) group by `c`.`image_id` order by `c`.`image_id` ;

--
-- VIEW  `results_category_1`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
