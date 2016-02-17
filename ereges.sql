-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2015 at 05:24 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ereges`
--
CREATE DATABASE IF NOT EXISTS `ereges` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ereges`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `fname` varchar(15) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `aid` varchar(10) NOT NULL,
  `gender` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `mname`, `lname`, `aid`, `gender`) VALUES
('Aditiya', '', 'Aakash', 'adi', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE IF NOT EXISTS `alogin` (
  `aid` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`aid`, `password`) VALUES
('adi', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `amsg`
--

CREATE TABLE IF NOT EXISTS `amsg` (
  `amsg` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL,
  PRIMARY KEY (`amsg`,`cid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `anote`
--

CREATE TABLE IF NOT EXISTS `anote` (
  `notice` varchar(255) NOT NULL,
  `aid` varchar(15) NOT NULL,
  PRIMARY KEY (`notice`),
  KEY `notice` (`notice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anote`
--

INSERT INTO `anote` (`notice`, `aid`) VALUES
('LAST Date FOR xexam registration is : 5/5/2015', 'adi');

-- --------------------------------------------------------

--
-- Table structure for table `clogin`
--

CREATE TABLE IF NOT EXISTS `clogin` (
  `cid` varchar(15) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clogin`
--

INSERT INTO `clogin` (`cid`, `password`) VALUES
('crm', 'qwerty'),
('gsm', 'qwerty'),
('gv', 'qwerty'),
('pt', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `cmsg`
--

CREATE TABLE IF NOT EXISTS `cmsg` (
  `susn` varchar(15) NOT NULL,
  `cmsg` varchar(255) NOT NULL,
  `cid` varchar(15) NOT NULL,
  PRIMARY KEY (`susn`,`cmsg`),
  KEY `cmsg` (`cmsg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmsg`
--

INSERT INTO `cmsg` (`susn`, `cmsg`, `cid`) VALUES
('1rv12is020', 'fill form by today.', 'crm');

-- --------------------------------------------------------

--
-- Table structure for table `counsellor`
--

CREATE TABLE IF NOT EXISTS `counsellor` (
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `id` varchar(15) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `dept` varchar(20) DEFAULT NULL,
  `phone_no` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `desig` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellor`
--

INSERT INTO `counsellor` (`fname`, `mname`, `lname`, `id`, `gender`, `dept`, `phone_no`, `email`, `desig`) VALUES
('Chet', '', 'Murthy', 'crm', 'M', 'ISE', 123456789, 'sda', 'ASSITANT PROFESSOR'),
('Mamtha', '', 'GS', 'gsm', 'F', 'EEE', 2147483647, 'garima@gmail.com', 'ASSITANT PROFESSOR'),
('Geetha', '', 'V', 'GV', 'F', 'ISE', 2147483647, 'geetha10@gmail.com', 'Assistant Professor'),
('Padmashree', '', 'T', 'PT', 'F', 'ISE', 2147483647, 'padmshree@yahoo.co.in', 'Assistant Professor');

-- --------------------------------------------------------

--
-- Table structure for table `exam_reg`
--

CREATE TABLE IF NOT EXISTS `exam_reg` (
  `susn` varchar(15) NOT NULL,
  `fathers name` varchar(30) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `sfname` varchar(20) DEFAULT NULL,
  `smname` varchar(20) DEFAULT NULL,
  `slname` varchar(20) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL,
  `challan_no` int(5) DEFAULT NULL,
  `amount` int(7) DEFAULT NULL,
  `exam_type` varchar(10) NOT NULL DEFAULT '',
  `month` int(2) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `checks` varchar(15) NOT NULL DEFAULT 'NA',
  `averify` varchar(15) NOT NULL DEFAULT 'NA',
  PRIMARY KEY (`susn`,`exam_type`),
  KEY `exam_type` (`exam_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_reg`
--

INSERT INTO `exam_reg` (`susn`, `fathers name`, `Address`, `sfname`, `smname`, `slname`, `sem`, `challan_no`, `amount`, `exam_type`, `month`, `cid`, `checks`, `averify`) VALUES
('1rv12ee027', 'S. Sinha', '#123, karamtoli, ranchi', 'Nilesh', '', 'Sinha', 4, 4569, 141562, 'SEE', 12, 'GSM', 'NA', 'NA'),
('1rv12ee034', 'K. Jain', '#4312,krishna gardens bangalore', 'Rahul', '', 'Raj', 7, 789, 141526, 'SEE', 1, 'GSM', 'NA', 'NA'),
('1rv12is020', 'Kailash nath', '#414,Paras', 'Karan', '', 'Nath', 7, 1235, 87695, 'SEE', 12, 'CRM', 'NA', 'NA'),
('1rv12is021', 'K. Jain', '#123Paras', 'Kushal', '', 'Jain', 7, 6985, 12364, 'SEE', 12, 'CRM', 'NA', 'NA'),
('1rv12is050', 'K. khanna', '#432 shivajinagar, bangalore', 'Shreya', '', 'Khanna', 7, 8965, 12364, 'SEE', 12, 'PT', 'Verified', 'Verified'),
('1rv12is055', 'S Singh', '#123,ranchi', 'Suprateek', '', 'Singh', 7, 5698, 123644, 'SEE', 12, 'pt', 'Verified', 'NA'),
('1rv13is046', 'rajkumar das', '#456,tumkur road', 'Priya', '', 'Das', 5, 568, 141560, 'SEE', 5, 'CRM', 'NA', 'NA'),
('1rv13is099', 'K. khanna', 'karamtoli chowk ranchi,\r\njharkhand', 'Raj', '', 'Kumar', 5, 8953, 123654, 'SEE', 1, 'CRM', 'NA', 'NA'),
('1rv14is018', 'S. Sinha', 'qwertgds', 'garima', '', 'chandra', 3, 4568, 122225, 'SEE', 12, 'CRM', 'NA', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `hss_mngr`
--

CREATE TABLE IF NOT EXISTS `hss_mngr` (
  `event_name` varchar(30) NOT NULL DEFAULT '',
  `susn` varchar(15) NOT NULL,
  `sfname` varchar(20) DEFAULT NULL,
  `smname` varchar(20) DEFAULT NULL,
  `slname` varchar(20) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL,
  `grade` varchar(5) NOT NULL DEFAULT 'NA',
  `cid` varchar(15) NOT NULL,
  PRIMARY KEY (`event_name`,`susn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hss_mngr`
--

INSERT INTO `hss_mngr` (`event_name`, `susn`, `sfname`, `smname`, `slname`, `level`, `sem`, `grade`, `cid`) VALUES
('8th Mile', '1rv13is046', 'Priya', '', 'Das', 'Others', 6, 'NA', 'CRM'),
('8thmile', '1rv12ee027', 'Nilesh', '', 'Sinha', 'Organizer', 2, 'NA', 'GSM'),
('8thmile', '1rv12is020', 'Karan', '', 'Nath', 'Organizer', 2, 'NA', 'CRM'),
('Cricket', '1rv12is021', 'Kushal', '', 'Jain', 'Sports', 8, 'NA', 'CRM'),
('Cricket', '1rv12is055', 'Suprateek', '', 'Singh', 'Sports', 2, 'NA', 'CRM'),
('Cricket PL', '1rv12is021', 'Kushal', '', 'Jain', 'Organizer', 8, 'NA', 'CRM'),
('Football', '1rv12ee034', 'Rahul', '', 'Raj', 'Others', 2, 'NA', 'GSM'),
('Football', '1rv13is099', 'Raj', '', 'Kumar', 'Sports', 2, 'NA', 'CRM');

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE IF NOT EXISTS `slogin` (
  `susn` varchar(15) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`susn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`susn`, `password`) VALUES
('1rv12ee027', 'qwerty'),
('1rv12ee034', 'qwerty'),
('1rv12is020', 'qwerty'),
('1rv12is021', 'qwerty'),
('1rv12is050', 'qwerty'),
('1rv12is055', 'qwerty'),
('1rv13is046', 'qwerty'),
('1rv13is099', 'qwerty'),
('1rv14is018', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `smsg`
--

CREATE TABLE IF NOT EXISTS `smsg` (
  `susn` varchar(15) NOT NULL,
  `cid` varchar(15) NOT NULL,
  `smsg` varchar(255) NOT NULL,
  PRIMARY KEY (`susn`,`smsg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smsg`
--

INSERT INTO `smsg` (`susn`, `cid`, `smsg`) VALUES
('1rv12is020', 'CRM', 'Mam! Form Has ben filled');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `usn` varchar(15) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone_no` bigint(10) DEFAULT NULL,
  `cid` char(3) DEFAULT NULL,
  `sem` int(1) NOT NULL,
  PRIMARY KEY (`usn`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `mname`, `lname`, `usn`, `gender`, `email`, `phone_no`, `cid`, `sem`) VALUES
('Nilesh', '', 'Sinha', '1rv12ee027', 'M', 'nileshsinha.sinha0@gmail.com', 7767453377, 'GSM', 7),
('Rahul', '', 'Raj', '1rv12ee034', 'M', 'rahul@me.com', 8884521256, 'GSM', 7),
('Karan', '', 'Nath', '1rv12is020', 'M', 'karannath10@gmail.com', 8884218269, 'CRM', 7),
('Kushal', '', 'Jain', '1rv12is021', 'M', 'kushla@gmail.com', 5698523678, 'CRM', 7),
('Shreya', '', 'Khanna', '1rv12is050', 'F', 'shreata@gmial.com', 4569712354, 'PT', 7),
('Suprateek', '', 'Singh', '1rv12is055', 'M', 'suprateek35@gmail.com', 776054565, 'PT', 7),
('Priya', '', 'Das', '1rv13is046', 'F', 'pry@gmail.com', 7896541235, 'CRM', 5),
('Raj', '', 'Kumar', '1rv13is099', 'F', 'suprateek35@gmail.com', 7896541235, 'CRM', 5),
('garima', '', 'chandra', '1rv14is018', 'F', 'garima@gmail.com', 7896541233, 'CRM', 3);

-- --------------------------------------------------------

--
-- Table structure for table `u_sc`
--

CREATE TABLE IF NOT EXISTS `u_sc` (
  `susn` varchar(15) NOT NULL DEFAULT '',
  `type` varchar(30) NOT NULL,
  `s1` varchar(15) NOT NULL DEFAULT 'NA',
  `s2` varchar(15) NOT NULL DEFAULT 'NA',
  `s3` varchar(15) NOT NULL DEFAULT 'NA',
  `s4` varchar(15) NOT NULL DEFAULT 'NA',
  `s5` varchar(15) NOT NULL DEFAULT 'NA',
  `s6` varchar(15) NOT NULL DEFAULT 'NA',
  `s7` varchar(15) NOT NULL DEFAULT 'NA',
  `s8` varchar(15) NOT NULL DEFAULT 'NA',
  PRIMARY KEY (`susn`,`type`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_sc`
--

INSERT INTO `u_sc` (`susn`, `type`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`) VALUES
('1rv12ee027', 'SEE', '12EE71', '12EE72', '12EE73', '12EE74', '12HSS71', '12EE7E4', '', ''),
('1rv12ee034', 'SEE', '12EE71', '12EE72', '12EE73', '12EE74', '12HSS71', '12EE7E4', '', ''),
('1rv12is020', 'SEE', '12IS71', '12IS72', '12IS73', '12IS74', '12HSS71', '12IS7E4', '', ''),
('1rv12is021', 'SEE', '12IS71', '12IS72', '12IS73', '12IS74', '12HSS71', '12IS7E4', '', ''),
('1rv12is050', 'SEE', '12IS71', '12IS72', '12IS73', '12IS74', '12HSS71', '12IS7E4', '', ''),
('1rv12is055', 'SEE', '12IS71', '12IS72', '12IS73', '12IS74', '12HSS71', '12IS7E4', '', ''),
('1rv13is046', 'SEE', '13IS51', '13IS52', '13IS53', '13IS54', '13HSS51', '13IS5E4', '', ''),
('1rv13is099', 'SEE', '13IS51', '13IS52', '13IS53', '13IS54', '13HSS51', '13IS5E4', '', ''),
('1rv14is018', 'SEE', '14IS31', '14IS32', '14IS33', '14IS34', '14HSS31', '14IS3E4', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
