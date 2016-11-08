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
-- Table structure for table `liscence`
--

CREATE TABLE `liscence` (
  `UID` varchar(10) NOT NULL,
  `TYPE` varchar(25) NOT NULL,
  `QUALIF` varchar(10) NOT NULL,
  `MARK1` varchar(15) NOT NULL,
  `MARK2` varchar(15) NOT NULL,
  `BLOODG` varchar(3) NOT NULL,
  `RTONO` varchar(10) NOT NULL,
  `SONWI` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liscence`
--

INSERT INTO `liscence` (`UID`, `TYPE`, `QUALIF`, `MARK1`, `MARK2`, `BLOODG`, `RTONO`, `SONWI`) VALUES
('bla@hh.com', 'Motor Cycle without gear', 'B.Tech', 'af1', 'af2', 'AB+', '1001', 'ABC'),
('SB123', 'Motor Cycle with gear', 'Doctorate', 'IM21', 'IM2', 'o+', '5656', 'ABC'),
('sbarudwale', 'Transport Vehicle', '10th', 'x1', 'x2', 'o+', '1231', 'zxcv'),
('tt1212', ' Road Roller', 'MBA', 'v1', 'v2', 'B+', '8888', 'Sudhir Tandel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liscence`
--
ALTER TABLE `liscence`
  ADD PRIMARY KEY (`UID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
