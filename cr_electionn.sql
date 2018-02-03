-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2015 at 10:56 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cr_election`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_reg`
--

CREATE TABLE IF NOT EXISTS `candidate_reg` (
  `cid` int(100) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `varsityID` varchar(50) NOT NULL,
  `referID` varchar(30) NOT NULL,
  `referenceID` varchar(30) NOT NULL,
  `varsityEmail` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cell` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `terms` varchar(10) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `varsityID` (`varsityID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `candidate_reg`
--

INSERT INTO `candidate_reg` (`cid`, `fullname`, `varsityID`, `referID`, `referenceID`, `varsityEmail`, `password`, `cell`, `gender`, `terms`) VALUES
(1, 'kdjfklxjf', '213-15-324', '42412312', '132132', 'sfds@gmail.com', '231315', 3451, 'Male', 'Yes'),
(2, 'kaiyum', '132-15-2713', '2121312312', '132-15-1205', 'mehedi@diu.edu.bd', '1456989s', 2147483647, 'Male', 'Yes'),
(4, 'sfds', '454', '213213123', '4545', 'scdf@gmail.com', 'dfdsfdsf', 12131313, 'Male', 'Yes'),
(6, 'sdfdsfd', '45345', '12321321321', '4554354', 'asdsad@gmail.com', '45454', 2147483647, 'Male', 'Yes'),
(8, 'zxcvx', '4524', '12321321', '54654', 'sadas@ggg.com', '4536546', 456546546, 'Male', 'Yes'),
(10, 'sdfgdds', '12331', '123213', '12321', 'fdgfd@diu.edu.bd', 'fghy542321', 3213, 'Male', 'Yes'),
(11, 'sfsdfds', 'fdsfdsfsdf', '1232145', '12121', 'sads@gmail.com', 'fdghfgfdgf', 4524646, 'Female', 'Yes'),
(12, 'hellow', '13225-546', '21312121', '541351', 'qwrer@diu.edu.bd', 'dsfsadfsdf', 453543, 'Male', 'Yes'),
(14, 'abdul kaiyuym mehedi', '456454', '12312', '564654', 'efdfdfds@gmail.com', 'dsgfdg5423', 45343, 'Male', 'Yes'),
(15, 'riyadul hoque', '12134135', '213131', '131313', 'zxxzcxz@gmail.com', '45646', 46546546, 'Male', 'Yes'),
(16, 'NEW USER', '3413', '1313313', '31313313333', 'SDFDSF@GMAIL.COM', 'SDFASDFSDF', 4534534, 'Male', 'Yes'),
(17, 'mehedi rajshai', '45242', '456565', '546544', 'arder@gmail.com', '45345', 32131, 'Female', 'Yes'),
(19, 'uitguhui', '1465451', '3165', '6451', 'hijh@jh.g', '3152', 548652, 'Female', 'Yes'),
(20, 'test', '1312351', '132', '2132', 'sdfadf@gmail.com', 'sdfsdf', 0, 'Male', 'Yes'),
(21, 'Moh''d Abdul Kaiyum Mehedi', '123', '42', '54', 'fgd@hsf.com', '123', 1815526607, 'Male', 'Yes'),
(22, 'new testing', '15', '25125', '2125', 'dsfad@gmail.com', '123', 5123, 'Female', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `ec_login`
--

CREATE TABLE IF NOT EXISTS `ec_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ec_login`
--

INSERT INTO `ec_login` (`id`, `email`, `password`) VALUES
(1, 'm@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `vid` int(100) NOT NULL AUTO_INCREMENT,
  `get_vote_varsityID` varchar(100) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`vid`, `get_vote_varsityID`) VALUES
(1, '14'),
(2, '14'),
(3, '8'),
(4, '12'),
(5, '15'),
(6, '15'),
(7, '15'),
(8, '2'),
(9, '12'),
(10, '2'),
(11, '2'),
(12, '132-15-2713'),
(13, '132-15-2713'),
(14, '213-15-324'),
(15, '213-15-324'),
(16, '213-15-324'),
(17, '213-15-324'),
(18, '213-15-324'),
(19, '132-15-2713'),
(20, '132-15-2713'),
(21, '132-15-2713'),
(22, '132-15-2713'),
(23, '132-15-2713'),
(24, '132-15-2713'),
(25, '132-15-2713'),
(26, '132-15-2713'),
(27, '132-15-2713'),
(28, '132-15-2713'),
(29, '132-15-2713'),
(30, '132-15-2713'),
(31, '132-15-2713'),
(32, '132-15-2713'),
(33, '132-15-2713'),
(34, '213-15-324'),
(35, '12331'),
(36, '12331'),
(37, '456454'),
(38, '456454'),
(39, '456454');

-- --------------------------------------------------------

--
-- Table structure for table `voter_reg`
--

CREATE TABLE IF NOT EXISTS `voter_reg` (
  `vid` int(10) NOT NULL AUTO_INCREMENT,
  `fullnamee` varchar(100) NOT NULL,
  `varsityIDD` varchar(100) NOT NULL,
  `varsityEmaill` varchar(100) NOT NULL,
  `celll` varchar(100) NOT NULL,
  `genderr` varchar(150) NOT NULL,
  `passwordd` varchar(100) NOT NULL,
  `termss` varchar(100) NOT NULL,
  `vote` varchar(100) NOT NULL,
  PRIMARY KEY (`vid`),
  UNIQUE KEY `varsityIDD` (`varsityIDD`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `voter_reg`
--

INSERT INTO `voter_reg` (`vid`, `fullnamee`, `varsityIDD`, `varsityEmaill`, `celll`, `genderr`, `passwordd`, `termss`, `vote`) VALUES
(1, 'abdul kaiyum', '132-15-2713', 'mehedi2713@diu.edu.bd', '01552', 'male', '1234', 'Yes', 'on'),
(2, 'opurbo', '132-15-2714', 'opurbo@diu.edu.bd.com', '31351', 'male', '123', 'Yes', ''),
(3, '', '132-15-2650', '', '', '', '', '', ''),
(4, '', '132-15-2716', '', '', '', '', '', ''),
(5, '', '132-15-2681', '', '', '', '', '', ''),
(6, '', '132-15-2778', '', '', '', '', '', ''),
(7, '', '132-15-2651', '', '', '', '', '', ''),
(8, '', '132-15-2629', '', '', '', '', '', ''),
(9, '', '132-15-2670', '', '', '', '', '', ''),
(10, '', '132-15-2759', '', '', '', '', '', 'kaiyum'),
(11, '', '132-15-2813', '', '', '', '', '', 'kaiyum'),
(12, '', '132-15-2684', '', '', '', '', '', 'kaiyum'),
(13, '', '132-15-2669', '', '', '', '', '', 'kaiyum'),
(14, '', '132-15-2747', '', '', '', '', '', 'kaiyum'),
(15, '', '132-15-2748', '', '', '', '', '', 'kaiyum'),
(16, '', '132-15-2728', '', '', '', '', '', 'kaiyum'),
(17, '', '132-15-2666', '', '', '', '', '', 'kaiyum'),
(18, '', '132-15-2718', '', '', '', '', '', 'kaiyum'),
(19, '', '132-15-2724', '', '', '', '', '', 'kaiyum'),
(20, '', '132-15-2770', '', '', '', '', '', 'kaiyum'),
(21, '', '132-15-2664', '', '', '', '', '', 'kaiyum'),
(22, '', '132-15-2772', '', '', '', '', '', 'kaiyum'),
(23, '', '132-15-2769', '', '', '', '', '', 'kaiyum'),
(24, '', '132-15-2729', '', '', '', '', '', 'kaiyum'),
(25, '', '132-15-2760', '', '', '', '', '', 'kaiyum'),
(36, 'a', '123', 'abc@gmail.com', '23', 'male', '123', 'yes', 'Yes');
