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
-- Table structure for table `pan_id_sample`
--

CREATE TABLE `pan_id_sample` (
  `username` varchar(30) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `abbreviation` varchar(10) NOT NULL,
  `date` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `last_name1` varchar(20) NOT NULL,
  `first_name1` varchar(20) NOT NULL,
  `middle_name1` varchar(20) NOT NULL,
  `flat` varchar(20) NOT NULL,
  `Name_of_premises` varchar(20) NOT NULL,
  `Road` varchar(20) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `Town` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `flat1` varchar(20) NOT NULL,
  `nameofpremises1` varchar(20) NOT NULL,
  `road1` varchar(20) NOT NULL,
  `area1` varchar(20) NOT NULL,
  `town1` varchar(20) NOT NULL,
  `state1` varchar(20) NOT NULL,
  `country_code` varchar(20) NOT NULL,
  `area_code` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `registration_no` varchar(20) NOT NULL,
  `adhar_card_no` varchar(20) NOT NULL,
  `last_name2` varchar(20) NOT NULL,
  `first_name2` varchar(20) NOT NULL,
  `middle_name2` varchar(20) NOT NULL,
  `flat3` varchar(20) NOT NULL,
  `name_of_premises3` varchar(20) NOT NULL,
  `road3` varchar(20) NOT NULL,
  `area3` varchar(20) NOT NULL,
  `city3` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pan_id_sample`
--

INSERT INTO `pan_id_sample` (`username`, `last_name`, `first_name`, `middle_name`, `abbreviation`, `date`, `month`, `year`, `last_name1`, `first_name1`, `middle_name1`, `flat`, `Name_of_premises`, `Road`, `Area`, `Town`, `State`, `flat1`, `nameofpremises1`, `road1`, `area1`, `town1`, `state1`, `country_code`, `area_code`, `telephone`, `email_id`, `registration_no`, `adhar_card_no`, `last_name2`, `first_name2`, `middle_name2`, `flat3`, `name_of_premises3`, `road3`, `area3`, `city3`) VALUES
('', 'last_name', 'first_name', 'middle_name', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'arijit', 'ananannd', 'aeasdfadsfad', 'aaa', 12, 12, 1994, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'last_name', 'first_name', 'middle_name', 'aaa', 11, 6, 1995, 'last_name1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'last_name', 'first_name', 'middle_name', 'ccc', 23, 23, 12, 'last_name1', 'first_name1', 'middle_name1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'last_name', 'first_name', 'middle_name', 'aaa', 23, 23, 223, 'last_name1', 'first_name1', 'middle_name1', 'flat', 'name of Premises', 'road', 'area', 'town', 'state', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'last_name', 'first_name', 'middle_name', 'aaa', 12, 12, 12, 'last_name1', 'first_name1', 'middle_name1', 'flat', 'name of Premises', 'road', 'area', 'town', 'state', 'flat1', 'name1', 'road1', 'area1', 'town1', 'state1', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'last_name', 'first_name', 'middle_name', 'abc', 12, 23, 1998, 'last_name1', 'first_name1', 'middle_name1', 'flat', 'name of Premises', 'road', 'area', 'town', 'state', 'flat1', 'name_of_premises1', 'road1', 'area1', 'town1', 'state1', 'country_code', 'area_code', 'telephone', 'email_id', 'arijit', 'ariitt', '', '', '', '', '', '', '', ''),
('', 'last_name', 'first_name', 'middle_name', 'abb', 12, 12, 12, 'last_name1', 'first_name1', 'middle_name1', 'flat', 'name of Premises', 'road', 'area', 'town', 'state', 'flat1', 'name_of_premises1', 'road1', 'area1', 'town1', 'state1', 'country_code', 'area_code', 'telephone', 'email_id', 'sdfsdf', 'sdfsdf', 'last_name2', 'first_name2', 'middle_name2', 'xgdxfdf', 'cxvxcv', 'dfdf', 'xdfxdfsd', 'xcvxcvcxv'),
('', 'anand', 'arijit', 'singh', 'asd', 12, 12, 1996, 'arijit', 'middle', 'anand', 'flat', 'name of Premises', 'road', 'area', 'town', 'state', 'flat1', 'name_of_premises1', 'road1', 'area1', 'town1', 'state1', 'country_code', 'area_code', 'telephone', 'email_id', '15bce1236', '123sdff', 'last_name2', 'first_name2', 'middle_name2', 'flat3', 'name_of_premises3', 'road3', 'area3', 'city3'),
('', 'thakare', 'sagar', 'satish', 'abbreviati', 0, 0, 0, 'last_name1', 'first_name1', 'middle_name1', 'flat', 'name of Premises', 'road', 'area', 'town', 'state', 'flat1', 'name_of_premises1', 'road1', 'area1', 'town1', 'state1', 'country_code', 'area_code', 'telephone', 'email_id', '', '', 'last_name2', 'first_name2', 'middle_name2', 'flat3', 'name_of_premises3', 'road3', 'area3', 'city3'),
('sagar', 'thakare', 'sagar', 'satish', 'abbreviati', 0, 0, 0, 'last_name1', 'first_name1', 'middle_name1', 'flat', 'name of Premises', 'road', 'area', 'town', 'state', 'flat1', 'name_of_premises1', 'road1', 'area1', 'town1', 'state1', 'country_code', 'area_code', 'telephone', 'email_id', '', '', 'last_name2', 'first_name2', 'middle_name2', 'flat3', 'name_of_premises3', 'road3', 'area3', 'city3'),
('sagar1', 'thakare', 'sagar', 'satish', 'abbreviati', 0, 0, 0, 'thakare', 'satish', 'middle_name1', 'flat', 'name of Premises', 'road', 'area', 'town', 'state', 'flat1', 'name_of_premises1', 'road1', 'area1', 'town1', 'state1', 'country_code', 'area_code', 'telephone', 'email_id', '', '', 'last_name2', 'first_name2', 'middle_name2', 'flat3', 'name_of_premises3', 'road3', 'area3', 'city3'),
('sagar1', 'thakare', 'sagar', 'satish', 'abbreviati', 0, 0, 0, 'thakare', 'satish', 'middle_name1', 'flat', 'name of Premises', 'road', 'area', 'town', 'state', 'flat1', 'name_of_premises1', 'road1', 'area1', 'town1', 'state1', 'country_code', 'area_code', 'telephone', 'email_id', '', '', 'last_name2', 'first_name2', 'middle_name2', 'flat3', 'name_of_premises3', 'road3', 'area3', 'city3'),
('sbarudwale', 'last_name', 'first_name', 'middle_name', 'abbreviati', 0, 0, 0, 'last_name1', 'first_name1', 'middle_name1', 'flat', 'name of Premises', 'road', 'area', 'town', 'state', 'flat1', 'name_of_premises1', 'road1', 'area1', 'town1', 'state1', 'country_code', 'area_code', 'telephone', 'email_id', '', '', 'last_name2', 'first_name2', 'middle_name2', 'flat3', 'name_of_premises3', 'road3', 'area3', 'city3'),
('', 'Sivabalakrishnan', 'M', '', 'Sivabalakr', 12, 12, 1970, 'last_name1', 'first_name1', 'middle_name1', 'flat', 'name of Premises', 'road', 'area', 'town', 'state', 'flat1', 'name_of_premises1', 'road1', 'area1', 'town1', 'state1', 'country_code', 'area_code', 'telephone', 'email_id', '12345678', '124578', 'M.', 'Sivabalakrishnan', '', 'flat3', 'name_of_premises3', 'road3', 'area3', 'city3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
