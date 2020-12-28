-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 04:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `sno` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`sno`, `title`, `description`) VALUES
(23, 'sachin', 'sachin is hard working boy'),
(24, 'Maths Homework', 'oh\r\n'),
(25, 'Maths Homework', 'oh\r\n'),
(26, 'Maths Homework', 'oh\r\n'),
(27, 'Maths Homework', 'oh\r\n'),
(28, 'Maths Homework', 'oh\r\n'),
(29, 'Maths Homework', 'oh\r\n'),
(30, 'Maths Homework', 'oh\r\n'),
(31, 'Maths Homework', 'oh\r\n'),
(32, 'Maths Homework', 'oh\r\n'),
(33, 'Maths Homework', 'oh\r\n'),
(34, 'Maths Homework', 'oh\r\n'),
(35, 'Maths Homework', 'oh\r\n'),
(36, 'Maths Homework', 'oh\r\n'),
(37, 'Maths Homework', 'oh\r\n'),
(38, 'Maths Homework', 'oh\r\n'),
(39, 'Maths Homework', 'oh\r\n'),
(40, 'Maths Homework', 'oh\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
