-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2015 at 10:47 PM
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
  `count_vote` int(100) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `varsityID` (`varsityID`),
  UNIQUE KEY `varsityID_2` (`varsityID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12224 ;

--
-- Dumping data for table `candidate_reg`
--

INSERT INTO `candidate_reg` (`cid`, `fullname`, `varsityID`, `referID`, `referenceID`, `varsityEmail`, `password`, `cell`, `gender`, `terms`, `count_vote`) VALUES
(12223, 'Abdul Kaiyum Mehedi', '132-15-2713', '132-15-2714', '132-15-2715', 'mehedi2713@diu.edu.bd', '2713', 1815526607, 'Male', 'Yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ec_login`
--

CREATE TABLE IF NOT EXISTS `ec_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varsityid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ec_login`
--

INSERT INTO `ec_login` (`id`, `varsityid`, `password`) VALUES
(3, '132-15-2713', '2713');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `vid` int(100) NOT NULL AUTO_INCREMENT,
  `voter_id` varchar(100) NOT NULL,
  `get_vote_varsityID` varchar(100) NOT NULL,
  PRIMARY KEY (`vid`),
  UNIQUE KEY `voter_id` (`voter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`vid`, `voter_id`, `get_vote_varsityID`) VALUES
(39, '132-15-2713', '132-15-2713');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `voter_reg`
--

INSERT INTO `voter_reg` (`vid`, `fullnamee`, `varsityIDD`, `varsityEmaill`, `celll`, `genderr`, `passwordd`, `termss`, `vote`) VALUES
(1, 'Mohammad Abdul Kaiyum', '132-15-2713', 'mehedi2713@diu.edu.bd', '01815526607', 'Male', '2713', 'Yes', 'Yes'),
(2, '', '132-15-2714', 'apurbaroy2714@diu.edu.bd', '', '', '', '', ''),
(3, '', '132-15-2650', '', '', '', '', '', ''),
(4, '', '132-15-2716', 'falgoni.dn@diu.edu.bd', '', '', '', '', ''),
(5, '', '132-15-2681', 'masoma2681@diu.edu.bd', '', '', '', '', ''),
(6, '', '132-15-2778', '', '', '', '', '', ''),
(7, '', '132-15-2651', '', '', '', '', '', ''),
(8, '', '132-15-2629', 'mehedi_2629@diu.edu.bd', '', '', '', '', ''),
(9, '', '132-15-2670', '', '', '', '', '', ''),
(10, '', '132-15-2759', 'md.shohan2013@diu.edu.bd', '', '', '', '', ''),
(11, '', '132-15-2813', 'rakibul2813@diu.edu.bd', '', '', '', '', ''),
(12, '', '132-15-2684', '', '', '', '', '', ''),
(13, '', '132-15-2669', '', '', '', '', '', ''),
(14, '', '132-15-2747', 'rajibbd91@diu.edu.edu', '', '', '', '', ''),
(15, '', '132-15-2748', '', '', '', '', '', ''),
(16, '', '132-15-2728', 's.r.i.romeo@diu.edu.bd', '', '', '', '', ''),
(17, '', '132-15-2666', 'shahadat2666@diu.edu.bd', '', '', '', '', ''),
(18, '', '132-15-2718', '', '', '', '', '', ''),
(19, '', '132-15-2724', '', '', '', '', '', ''),
(20, '', '132-15-2770', '', '', '', '', '', ''),
(21, '', '132-15-2664', 'hossain2664@diu.edu.bd', '', '', '', '', ''),
(22, '', '132-15-2772', '', '', '', '', '', ''),
(23, '', '132-15-2769', '', '', '', '', '', ''),
(24, '', '132-15-2729', '', '', '', '', '', ''),
(25, '', '132-15-2760', 'iftekhar_hie@diu.edu.bd', '', '', '', '', ''),
(37, '', '132-15-2663', 'razu2663@diu.edu.bd', '', '', '', '', '');
