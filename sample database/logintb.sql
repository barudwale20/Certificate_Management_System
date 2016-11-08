-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 05:11 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certificate_mgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `UNAME` varchar(20) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `GENDER` varchar(7) NOT NULL,
  `DOB` date NOT NULL,
  `MOB_NO` int(15) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  `ADDRESS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`UNAME`, `NAME`, `GENDER`, `DOB`, `MOB_NO`, `EMAIL`, `PASSWORD`, `ADDRESS`) VALUES
('123456', 'Kaushik B.', '', '0000-00-00', 2147483647, 'kb@gmail.com', 'dragon', '102, Samruddhi Plaza, Mumbai'),
('sbarudwale', 'Shubham Barudwale', '', '0000-00-00', 2147483647, 'barudwale20@gmail.com', '123qwe', '2 A-204, Laxmi Park'),
('abc1', 'ABC', '', '0000-00-00', 2147483647, 'asas@gmail.com', 'asas', 'PQRS Road'),
('abc1', 'ABC', '', '0000-00-00', 2147483647, 'asas@gmail.com', 'axax', 'PQRS Road'),
('abc1', 'ABC', '', '1997-10-19', 2147483647, 'asas@gmail.com', 'asas', 'PQRS Road'),
('smane', 'Suyog Mane', '', '1997-10-24', 123456789, 'smane@gmail.com', '12345678', 'Janaki Nivas'),
('tt1212', 'Tanmay Tandel', '', '1997-10-19', 876540987, 'tantan@gmail.com', 'poiuy', '404, Happy Complex'),
('SB123', 'Sivabalakrishnan', 'male', '1975-10-12', 987456321, 'sivabalaK@gmail.com', '1234qwer', 'VIT University Chennai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
