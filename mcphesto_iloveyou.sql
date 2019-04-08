-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2019 at 07:41 PM
-- Server version: 5.5.61-cll
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcphesto_iloveyou`
--

-- --------------------------------------------------------

--
-- Table structure for table `letters`
--

CREATE TABLE `letters` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `fromName` varchar(50) NOT NULL,
  `likes` int(11) NOT NULL,
  `poop` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letters`
--

INSERT INTO `letters` (`id`, `name`, `content`, `fromName`, `likes`, `poop`) VALUES
(1, 'john', 'i really love you', '', 1, 0),
(13, 'harry', 'youre pretty cool', '', 0, 0),
(12, 'jack', 'yo', '', 36, 10),
(11, 'jack', 'you died', '', 0, 0),
(10, 'john', 'yo wassup', '', 0, 0),
(14, 'Tony', 'Love ya', '', 13, 4),
(15, 'king neptune', 'Ocean sucks', '', 0, 0),
(16, 'king neptune', 'Love ya', '', 0, 0),
(31, 'henry', 'your pretty cool', '', 0, 0),
(32, 'henry', 'bn', 'bn', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `letterID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `letterID`) VALUES
(12, 14),
(11, 14),
(10, 14),
(9, 14),
(13, 14),
(14, 14),
(15, 14),
(16, 14),
(17, 14),
(18, 14),
(19, 14),
(20, 14),
(21, 14),
(22, 14),
(23, 14),
(24, 14),
(25, 14),
(26, 12),
(27, 12),
(28, 12),
(29, 12),
(30, 12),
(31, 12),
(32, 12),
(33, 12),
(34, 12),
(35, 12),
(36, 12),
(37, 12),
(38, 12),
(39, 12),
(40, 12),
(41, 12),
(42, 12),
(43, 12),
(44, 12),
(45, 12),
(46, 12),
(47, 12),
(48, 12),
(49, 12),
(50, 12),
(51, 12),
(52, 12),
(53, 12),
(54, 12),
(55, 12),
(56, 12),
(57, 12),
(58, 12),
(59, 12),
(60, 12),
(61, 12),
(62, 12),
(63, 12),
(64, 1),
(65, 12);

-- --------------------------------------------------------

--
-- Table structure for table `poops`
--

CREATE TABLE `poops` (
  `id` int(11) NOT NULL,
  `letterID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poops`
--

INSERT INTO `poops` (`id`, `letterID`) VALUES
(2, 14),
(3, 14),
(4, 14),
(5, 14),
(6, 14),
(7, 12),
(8, 12),
(9, 12),
(10, 12),
(11, 12),
(12, 12),
(13, 12),
(14, 12),
(15, 12),
(16, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poops`
--
ALTER TABLE `poops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `poops`
--
ALTER TABLE `poops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
