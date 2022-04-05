-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2022 at 02:05 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `highscore`
--

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(3) NOT NULL,
  `Highscore` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`ID`, `Username`, `Highscore`) VALUES
(1, 'FUC', 99999999),
(2, 'SUQ', 23954934),
(3, 'DIM', 289),
(4, 'MIC', 22343),
(5, 'SUD', 4493),
(6, 'DEL', 192),
(7, 'MON', 2494),
(8, 'BAS', 29283),
(9, 'NOT', 3495),
(10, 'DIC', 20023),
(11, 'BIT', 783),
(12, 'MAB', 204),
(13, 'NLB', 872),
(14, 'FGY', 422),
(15, 'SQS', 123),
(16, 'MAZ', 249656);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
