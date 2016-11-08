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
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cno` int(30) NOT NULL,
  `cdate` date NOT NULL,
  `cdistrict` varchar(50) NOT NULL,
  `cauthority` varchar(50) NOT NULL,
  `cdocuments` varchar(100) NOT NULL,
  `agender` varchar(50) NOT NULL,
  `auid` int(50) NOT NULL,
  `acategory` varchar(50) NOT NULL,
  `acaste` varchar(50) NOT NULL,
  `adob` date NOT NULL,
  `amothertongue` varchar(100) NOT NULL,
  `asurnames` varchar(100) NOT NULL,
  `amobileno` int(12) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `caddress` varchar(150) NOT NULL,
  `ccountry` varchar(50) NOT NULL,
  `cstate` varchar(50) NOT NULL,
  `cdistrict1` varchar(100) NOT NULL,
  `ctaluka` varchar(100) NOT NULL,
  `cpincode` varchar(100) NOT NULL,
  `edistrict` varchar(100) NOT NULL,
  `etaluka` varchar(100) NOT NULL,
  `ecollege` varchar(100) NOT NULL,
  `ecourse` varchar(100) NOT NULL,
  `eyear` year(4) NOT NULL,
  `eregno` varchar(100) NOT NULL,
  `erollno` varchar(100) NOT NULL,
  `eaddress` varchar(150) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `fdob` varchar(100) NOT NULL,
  `fbplace` varchar(100) NOT NULL,
  `gfname` varchar(100) NOT NULL,
  `gfdob` varchar(100) NOT NULL,
  `gfbirthplace` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `mstate` varchar(100) NOT NULL,
  `myear` varchar(100) NOT NULL,
  `d1` varchar(100) NOT NULL,
  `d2` varchar(100) NOT NULL,
  `d3` varchar(100) NOT NULL,
  `d4` varchar(100) NOT NULL,
  `d5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`username`, `name`, `cno`, `cdate`, `cdistrict`, `cauthority`, `cdocuments`, `agender`, `auid`, `acategory`, `acaste`, `adob`, `amothertongue`, `asurnames`, `amobileno`, `aemail`, `caddress`, `ccountry`, `cstate`, `cdistrict1`, `ctaluka`, `cpincode`, `edistrict`, `etaluka`, `ecollege`, `ecourse`, `eyear`, `eregno`, `erollno`, `eaddress`, `fname`, `fdob`, `fbplace`, `gfname`, `gfdob`, `gfbirthplace`, `mothername`, `mstate`, `myear`, `d1`, `d2`, `d3`, `d4`, `d5`) VALUES
('5', 'sagar', 1251, '0000-00-00', 'NASHIK', 'AUTHOR', 'A\r\nD\r\nF\r\n', 'male', 2147483647, 'Other Backward Class', 'KUNBI', '1996-03-03', 'MARATHI', 'thakare,pawar PATIL', 123456789, 'sagar@yahoo.com', 'ASDGA\r\nASDG\r\nASG\r\n', 'INDIA', 'ANDHRA PRADESH', 'NASHIKQ', 'SATANA', '42334', 'NASHIK', 'NASHK', 'AKSNDG', '', 2016, '65465', '56412', '65410', 'satish', '1982-12-12', 'OAHSNDG', 'JKASNDGB', '1947-06-06', 'JAKHBSD ', 'JABSDG', 'IAJKBSDG', 'JBASDG', 'JABSDG', 'GKJABSDG', 'JSBDG', 'JBASDG', 'JHBASDG'),
('6', 'sagar', 1251, '0000-00-00', 'NASHIK', 'AUTHOR', 'A\r\nD\r\nF\r\n', 'male', 2147483647, 'Other Backward Class', 'KUNBI', '1996-03-03', 'MARATHI', 'thakare,pawar PATIL', 123456789, 'sagar@yahoo.com', 'ASDGA\r\nASDG\r\nASG\r\n', 'INDIA', 'ANDHRA PRADESH', 'NASHIKQ', 'SATANA', '42334', 'NASHIK', 'NASHK', 'AKSNDG', '', 2016, '65465', '56412', '65410', 'satish', '1982-12-12', 'OAHSNDG', 'JKASNDGB', '1947-06-06', 'JAKHBSD ', 'JABSDG', 'IAJKBSDG', 'JBASDG', 'JABSDG', 'GKJABSDG', 'JSBDG', 'JBASDG', 'JHBASDG'),
('sagar', 'sagar', 1251, '0000-00-00', 'NASHIK', 'AUTHOR', 'A\r\nD\r\nF\r\n', 'male', 2147483647, 'Other Backward Class', 'KUNBI', '1996-03-03', 'MARATHI', 'thakare,pawar PATIL', 123456789, 'sagar@yahoo.com', 'ASDGA\r\nASDG\r\nASG\r\n', 'INDIA', 'ANDHRA PRADESH', 'NASHIKQ', 'SATANA', '42334', 'NASHIK', 'NASHK', 'AKSNDG', '', 2016, '65465', '56412', '65410', 'satish', '1982-12-12', 'OAHSNDG', 'JKASNDGB', '1947-06-06', 'JAKHBSD ', 'JABSDG', 'IAJKBSDG', 'JBASDG', 'JABSDG', 'GKJABSDG', 'JSBDG', 'JBASDG', 'JHBASDG'),
('SB123', 'shubham', 123456, '2016-12-12', '', 'cao', 'efvwef\r\nwefb', 'male', 78425, 'Other Backward Class', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('sbarudwale', 'shubham', 123456, '2016-12-12', '', '', '', 'male', 0, 'Select Category', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caste`
--
ALTER TABLE `caste`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
