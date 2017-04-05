-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 03:27 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `Year` int(20) NOT NULL,
  `Month` varchar(20) NOT NULL,
  `Headline` varchar(200) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Highlight` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`Year`, `Month`, `Headline`, `Place`, `Highlight`) VALUES
(1990, 'July', 'Baguio City Earthquake', 'Baguio City', 'Earthquake'),
(1991, 'June', 'Mount Pinatubo Erupts for the First Time', 'Luzon', 'Mount Pinatubo'),
(1992, 'January', 'George Bush Falling Violently Ill at a State Dinner in Japan', 'Japan', 'George Bush'),
(1993, 'November', 'Asia-Pacific Economic Cooperation (APEC) holds first meeting in Seattle', 'Seattle', 'APEC'),
(1994, 'March', '43rd Miss Universe was held in Manila Manila', 'Manila', 'Miss Universe'),
(1995, 'January', 'Pope John Paul II begins to visit Southeast Asia', 'Southeast Asia', 'Pope John Paul II'),
(1996, 'September', 'North Korea submarine aground in South Korea, all crew killed', 'South Korea', 'North Koreans'),
(1997, 'July', 'Spacecraft Pathfinder lands on Mars', 'Mars', 'Spacecraft'),
(1998, 'January', 'Major Hong Kong bank shuts down\r\n', 'Hong Kong', 'Bank'),
(1999, 'October', 'Cyclone Orissa kills thousands', 'India', 'Cyclone Orissa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
