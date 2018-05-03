-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2017 at 05:52 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stud_test03`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_signup`
--

CREATE TABLE IF NOT EXISTS `main_signup` (
  `sl` double NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mob` varchar(15) DEFAULT NULL,
  `addr` varchar(300) DEFAULT NULL,
  `mailadres` varchar(100) DEFAULT NULL,
  `actnum` int(11) DEFAULT '1',
  `userlevel` tinyint(4) DEFAULT '0',
  `signupdate` varchar(16) DEFAULT NULL,
  `lastlogin` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `main_signup`
--

INSERT INTO `main_signup` (`sl`, `username`, `password`, `name`, `mob`, `addr`, `mailadres`, `actnum`, `userlevel`, `signupdate`, `lastlogin`) VALUES
(1, 'admin', 'admin', 'Administrator', '9732689290', '', '', 0, -1, NULL, '27-08-2017 5:51 '),
(41, 'user', '123', 'User1', NULL, NULL, NULL, 0, 10, NULL, '27-08-2017 5:35 '),
(42, 'user2', '1111', 'User2', NULL, NULL, NULL, 0, 20, NULL, '27-08-2017 5:37 ');

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE IF NOT EXISTS `stud` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `nm` varchar(200) NOT NULL,
  `cont` varchar(10) NOT NULL,
  `scls` int(11) NOT NULL,
  `sec` varchar(1) NOT NULL,
  `roll` int(11) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`sl`, `nm`, `cont`, `scls`, `sec`, `roll`) VALUES
(7, 'dfhfgk', '5468679780', 6, 'A', 1),
(8, 'cccccccccccccc', '4579780890', 5, 'B', 2),
(10, 'sdgfdh', '2354365476', 6, 'A', 12),
(11, 'sdgr''dfhfdj', '14236', 6, 'B', 4),
(12, 'sdgr''dfhfdj', '14236', 6, 'B', 41);

-- --------------------------------------------------------

--
-- Table structure for table `s_cls`
--

CREATE TABLE IF NOT EXISTS `s_cls` (
  `cid` int(11) NOT NULL,
  `scls` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_cls`
--

INSERT INTO `s_cls` (`cid`, `scls`) VALUES
(5, 'V'),
(6, 'VI'),
(7, 'VII'),
(8, 'VIII'),
(9, 'IX'),
(10, 'X');
