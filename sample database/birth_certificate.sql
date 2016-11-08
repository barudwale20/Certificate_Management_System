-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 05:10 PM
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
-- Table structure for table `birth_certificate`
--

CREATE TABLE `birth_certificate` (
  `UID` varchar(20) NOT NULL,
  `Child_Name` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Father_Name` varchar(20) NOT NULL,
  `Mother_Name` varchar(20) NOT NULL,
  `Place_Of_Birth` varchar(20) NOT NULL,
  `Weight` decimal(4,2) NOT NULL,
  `Panchayat` varchar(20) NOT NULL,
  `Doctor_Name` varchar(20) NOT NULL,
  `Hospital` varchar(20) NOT NULL,
  `DOB` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birth_certificate`
--

INSERT INTO `birth_certificate` (`UID`, `Child_Name`, `Gender`, `Father_Name`, `Mother_Name`, `Place_Of_Birth`, `Weight`, `Panchayat`, `Doctor_Name`, `Hospital`, `DOB`) VALUES
('15bce1117', 'Kaushik', 'Male', 'Bharath', 'jiii', 'Tutucorin', '1.00', 'lol', 'Siva', 'HIT', '25/09/1997'),
('SB123', 'Sivabalakrishnan', 'Male', 'ABC', 'DEF', 'Chennai', '7.00', 'Kanchipuram', 'XYZ', 'Appollo', '1975-19-10'),
('tt1212', 'Tanmay', 'Male', 'Sudhir', 'gayatri', 'Alibag', '7.00', 'Alibagh P.', 'SYG', 'AIIMS', '17-09-1997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birth_certificate`
--
ALTER TABLE `birth_certificate`
  ADD PRIMARY KEY (`UID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
