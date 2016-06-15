-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2016 at 11:20 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m133_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `ort`
--

CREATE TABLE IF NOT EXISTS `ort` (
  `id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ort`
--

INSERT INTO `ort` (`id`, `name`) VALUES
(1, 'Zürich'),
(5, 'Winterthur'),
(6, 'Chur'),
(7, 'Bern'),
(8, 'Basel'),
(9, 'Luzern'),
(10, 'St. Gallen'),
(11, 'Genf'),
(12, 'Lausanne'),
(13, 'Tessin'),
(14, 'Schaffhausen'),
(15, 'Stettbach'),
(16, 'Hottingen'),
(17, 'Seefeld'),
(18, 'Dietikon'),
(19, 'Altstätten'),
(20, 'Affoltern'),
(21, 'Zug'),
(22, 'Esslingen'),
(23, 'Embrach'),
(24, 'Frankental'),
(25, 'Hochfelden'),
(26, 'Interlaken'),
(27, 'Jura'),
(28, 'Königsfelden'),
(29, 'Laax'),
(30, 'Meggen'),
(31, 'Niederfelden'),
(32, 'Niederglatt'),
(33, 'Obwalden'),
(34, 'Pilten'),
(35, 'Quarten'),
(36, 'Rafz'),
(37, 'Schwyz'),
(38, 'Thun'),
(39, 'Uster'),
(40, 'Valon'),
(41, 'Wallisellen'),
(42, 'Xyolphon'),
(43, 'Yens');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL,
  `vorname` varchar(100) NOT NULL,
  `nachname` varchar(100) NOT NULL,
  `ort` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `vorname`, `nachname`, `ort`) VALUES
(1, 'fag', 'faggot', 1),
(5, 'a', 'b', 5),
(6, '[object HTMLInputElement]?nachname=[object HTMLInputElement]?ort=[object HTMLInputElement]', '', 43),
(7, 'lel', 'asd', 5),
(8, 'lel', 'asd', 5),
(9, '[object HTMLInputElement]?nachname=[object HTMLInputElement]?ort=[object HTMLInputElement]', '', 43),
(10, '[object HTMLInputElement]?nachname=[object HTMLInputElement]?ort=[object HTMLInputElement]', '', 43),
(11, 'a', 'b', 21),
(12, 'Sev1', 'Fbr1', 21),
(13, 'Sev', 'asd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ort`
--
ALTER TABLE `ort`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ort`
--
ALTER TABLE `ort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
