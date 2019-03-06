-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 02, 2019 at 12:17 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `calender_evenement`
--

DROP TABLE IF EXISTS `calender_evenement`;
CREATE TABLE `calender_evenement` (
  `id` int(11) NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  `celebration` varchar(255) NOT NULL,
  `has_link` varchar(3) NOT NULL,
  `month_int` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calender_evenement`
--

INSERT INTO `calender_evenement` (`id`, `timestamp`, `celebration`, `has_link`, `month_int`) VALUES
(3, 1547251200, 'CAREME', 'YES', 1),
(6, 1561420800, 'Ordinaire', 'YES', 2),
(7, 1577145600, 'PAQUES', 'YES', 12),
(9, 1546905600, 'CELEBRATE BELLLLL', 'YES', 1),
(11, 1574121600, 'EVENEMENT DANS CALANDRIEREVENEMENT DANS CALANDRIER', 'YES', 11),
(12, 1558310400, 'ORDINAIRE', 'YES', 5),
(13, 1556755200, 'ORDINAIRE', 'YES', 5),
(14, 1555632000, 'PAQUES', 'NO', 4),
(15, 1552694400, 'PAQUES', 'NO', 3),
(17, 1549843200, 'CAREME', 'YES', 2),
(18, 1555718400, 'EMPIRE', 'NO', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calender_evenement`
--
ALTER TABLE `calender_evenement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calender_evenement`
--
ALTER TABLE `calender_evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
