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
-- Table structure for table `transfer_certificate`
--

CREATE TABLE `transfer_certificate` (
  `UID` varchar(25) NOT NULL,
  `cbse_ano` int(8) NOT NULL,
  `scode` int(6) NOT NULL,
  `sl_no` int(6) NOT NULL,
  `adm_no` int(6) NOT NULL,
  `sname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `dob_sreg` varchar(15) NOT NULL,
  `caste` varchar(15) NOT NULL,
  `first_doj_class` varchar(12) NOT NULL,
  `last_studied_class` varchar(10) NOT NULL,
  `result` varchar(8) NOT NULL,
  `sfee_paid_uptomonth` varchar(10) NOT NULL,
  `date_of_application` varchar(12) NOT NULL,
  `date_of_issue` varchar(12) NOT NULL,
  `reason_for_leaving` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer_certificate`
--

INSERT INTO `transfer_certificate` (`UID`, `cbse_ano`, `scode`, `sl_no`, `adm_no`, `sname`, `mname`, `fname`, `dob_sreg`, `caste`, `first_doj_class`, `last_studied_class`, `result`, `sfee_paid_uptomonth`, `date_of_application`, `date_of_issue`, `reason_for_leaving`) VALUES
('123456', 9878, 98956, 897465, 87946, '15/8/2001', 'vhjmb', 'jhv,bkj.,n ', 'rxgfhv', '14/7/1995', 'sdfgh', 'dfhgjk', 'yes', 'vhvhh', '12/5/2013', '12/9/2013', 'none'),
('sbarudwale', 1232, 1231, 5132, 5312, '12/8/1999', 'Barudwale', 'bnm', 'Shubham', '12/5/1995', 'mn,n,m', 'x', 'yes', 'bmn.,', '12/5/2013', '12/9/2013', 'none'),
('tt1212', 77878, 1000, 4545, 8000, '19-06-2001', 'TANMAY SUDHIR T', 'GAYATRI SUDHIR ', 'SUDHIR TANDEL', '29-06-2001', 'OPEN', 'Thenth', 'yes', 'MAY', '05-07-2013', '10-07-2013', 'JOB TRANSFER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transfer_certificate`
--
ALTER TABLE `transfer_certificate`
  ADD PRIMARY KEY (`UID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
