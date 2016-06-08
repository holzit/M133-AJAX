-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 08. Jun 2016 um 13:53
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `m133_ajax`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ort`
--

CREATE TABLE `ort` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `ort`
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
-- Tabellenstruktur für Tabelle `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `vorname` varchar(100) NOT NULL,
  `nachname` varchar(100) NOT NULL,
  `ort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `ort`
--
ALTER TABLE `ort`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `ort`
--
ALTER TABLE `ort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT für Tabelle `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `ort` FOREIGN KEY (`id`) REFERENCES `ort` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
