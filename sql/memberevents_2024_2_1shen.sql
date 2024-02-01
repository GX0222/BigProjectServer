-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8964
-- Generation Time: Feb 01, 2024 at 03:48 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `memberevents`
--

CREATE TABLE `memberevents` (
  `member_events_id` int(11) NOT NULL,
  `events_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `memberevents`
--

INSERT INTO `memberevents` (`member_events_id`, `events_id`, `member_id`) VALUES
(1, 8, 1),
(2, 9, 1),
(3, 10, 1),
(4, 12, 1),
(5, 4, 1),
(11, 70, 1),
(12, 71, 1),
(13, 72, 1),
(14, 73, 1),
(15, 74, 1),
(16, 75, 1),
(17, 76, 1),
(18, 77, 1),
(19, 78, 1),
(20, 79, 1),
(21, 80, 1),
(22, 81, 1),
(23, 82, 1),
(24, 83, 1),
(25, 84, 1),
(26, 85, 1),
(27, 86, 1),
(28, 87, 1),
(29, 88, 1),
(30, 89, 1),
(31, 90, 1),
(32, 91, 1),
(33, 92, 1),
(34, 93, 1),
(35, 94, 1),
(36, 95, 1),
(37, 96, 1),
(38, 97, 1),
(39, 98, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memberevents`
--
ALTER TABLE `memberevents`
  ADD PRIMARY KEY (`member_events_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memberevents`
--
ALTER TABLE `memberevents`
  MODIFY `member_events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
