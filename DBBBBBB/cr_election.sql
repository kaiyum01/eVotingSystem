-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2016 at 07:20 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr_election`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_reg`
--

CREATE TABLE `candidate_reg` (
  `cid` int(100) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `varsityID` varchar(50) NOT NULL,
  `referID` varchar(30) NOT NULL,
  `referenceID` varchar(30) NOT NULL,
  `varsityEmail` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cell` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `terms` varchar(10) NOT NULL,
  `count_vote` int(100) NOT NULL,
  `approve` varchar(15) NOT NULL DEFAULT 'Deactivate'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_reg`
--

INSERT INTO `candidate_reg` (`cid`, `user_name`, `fullname`, `varsityID`, `referID`, `referenceID`, `varsityEmail`, `password`, `cell`, `gender`, `dob`, `terms`, `count_vote`, `approve`) VALUES
(12223, 'kaiyum', 'Abdul Kaiyum Mehedi', '132-15-2713', '132-15-2714', '132-15-2715', 'mehedi2713@diu.edu.bd', '2713', 1815526607, 'Male', '1990-08-18', 'Yes', 0, 'Deactivate'),
(12224, '', 'vcvcvc', '6545', '31', '3212', 'cxvc@gmail.com', '21', 2541, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12227, '', 'dsfgtdfs', '45645', '456546', '456', 'dsfsdf@gmail.com', '2542', 0, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12228, '', 'ewrewr', '456', '454', '5432', 'dc@gmail.com', '4536', 23, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12229, '', 'dgd', '4564', '54', '5445', 'msadf@gmail.com', '22sd', 22, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12231, '', 'QSWA', '4563546', '45645645645654', '14', 'dfas@gmail.com', '24', 154321, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12235, '', 'dsfgdsf', '123', '12121', '7', 're@gmail.com', '4554', 24, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12236, '', 'fdgfdg', '453654', '123123', '12312', 'xzcx@gmail.com', '45', 123, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12239, '', 'sdfvdsf', '1', '12', '121', 'sd@gmail.com', '12', 456, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12241, '', 'ghjhgj', '4123', '1', '3', 'sdf@gmail.com', '2413', 1521, 'Female', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12242, '', 'xzvxcvcxvxcv', '1532152321', '213213', '1221', 'fg@gmail.com', '5435', 42, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12243, '', 'kaiyummm', '4536', '213213', '123', 'gfd@gmail.com', '543', 32, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12244, '', 'mehedii', '12321323', '123213', '1223', 'dg@gmail.com', '656', 536213, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12246, '', 'khan', '52321312', '12312321', '123213', 'sdfd@gmail.com', '456', 4565, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12247, '', 'cxvcx', 'cbvcx', 'ds546', 'cx', 'vfd@gmail.com', '456', 45, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12250, '', 'sdfdsfdsf', '1232', '1231', '123', 'dsf@gmail.com', '5463', 213, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12259, '', 'dgtggggg', '112121212', '12', '123', 'fg@gmail.com', '12312', 213213, 'Female', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12261, '', 'dfgdfgf', '4632145', '123213', '454', 'dfd@gmail.com', '13213213', 1233, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12263, '', 'hjhjhj', '45555', '4444', '5555', 'dsfsdfdf@gmail.com', '44444', 44444, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12265, '', 'jdsafjskadfdsf', '444444444', '111111112', '2222222222222', 'dsfdf@gmail.com', '132131', 21321321, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12266, '', 'ghhhhhh', '42424242', '2525252', '7474747', 'dfdfdf@yahoo.com', '4652456', 456546, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12267, '', 'jack', '55520', '02145', '65212', 'sfd564@gmail.com', '3456', 3223, 'Female', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12268, '', 'jackjons', '445798654', '5348565416541', '13543', 'sdfdaf@gmail.com', '23', 3223, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate'),
(12269, '', 'jackysone', '4587547870', '0154564', '202502200', 'jack@yahoo.com', '465', 68965, 'Male', '0000-00-00', 'Yes', 0, 'Deactivate');

-- --------------------------------------------------------

--
-- Table structure for table `ec_login`
--

CREATE TABLE `ec_login` (
  `id` int(10) NOT NULL,
  `varsityid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ec_login`
--

INSERT INTO `ec_login` (`id`, `varsityid`, `password`) VALUES
(3, '132-15-2713', '2713'),
(4, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `vid` int(100) NOT NULL,
  `voter_id` varchar(100) NOT NULL,
  `get_vote_varsityID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`vid`, `voter_id`, `get_vote_varsityID`) VALUES
(1, '132-15-2713', '132-15-2713');

-- --------------------------------------------------------

--
-- Table structure for table `voter_reg`
--

CREATE TABLE `voter_reg` (
  `vid` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `fullnamee` varchar(100) NOT NULL,
  `varsityIDD` varchar(100) NOT NULL,
  `varsityEmaill` varchar(100) NOT NULL,
  `celll` varchar(100) NOT NULL,
  `genderr` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `passwordd` varchar(100) NOT NULL,
  `termss` varchar(100) NOT NULL,
  `vote` varchar(100) NOT NULL,
  `approve` varchar(15) NOT NULL DEFAULT 'Deactivate'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter_reg`
--

INSERT INTO `voter_reg` (`vid`, `user_name`, `fullnamee`, `varsityIDD`, `varsityEmaill`, `celll`, `genderr`, `dob`, `passwordd`, `termss`, `vote`, `approve`) VALUES
(1, 'kaiyum1992', 'Mohammad Abdul Kaiyum', '132-15-2713', 'mehedi2713@diu.edu.bd', '01815526607', 'Male', '1992-07-11', '2713', 'Yes', 'Yes', 'Deactivate'),
(2, '', 'sadfdf', '132-15-2714', 'apurbaroy2714@diu.edu.bd', 'fdsfd', 'Male', '0000-00-00', 'cvzx', 'Yes', '', 'Deactivate'),
(3, '', '', '132-15-2650', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(4, '', '', '132-15-2716', 'falgoni.dn@diu.edu.bd', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(5, '', '', '132-15-2681', 'masoma2681@diu.edu.bd', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(6, '', '', '132-15-2778', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(7, '', '', '132-15-2651', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(8, '', 'mehedi hasan', '132-15-2629', 'mehedi_2629@diu.edu.bd', '215', 'Male', '0000-00-00', '123456', 'Yes', '', 'Deactivate'),
(9, '', '', '132-15-2670', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(10, '', 'sohan', '132-15-2759', 'md.shohan2013@diu.edu.bd', '456456', 'Male', '0000-00-00', '123', 'Yes', '', 'Deactivate'),
(11, '', '', '132-15-2813', 'rakibul2813@diu.edu.bd', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(12, '', '', '132-15-2684', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(13, '', '', '132-15-2669', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(14, '', '', '132-15-2747', 'rajibbd91@diu.edu.edu', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(15, '', '', '132-15-2748', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(16, '', '', '132-15-2728', 's.r.i.romeo@diu.edu.bd', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(17, '', '', '132-15-2666', 'shahadat2666@diu.edu.bd', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(18, '', '', '132-15-2718', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(19, '', '', '132-15-2724', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(20, '', '', '132-15-2770', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(21, '', '', '132-15-2664', 'hossain2664@diu.edu.bd', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(22, '', '', '132-15-2772', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(23, '', '', '132-15-2769', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(24, '', '', '132-15-2729', '', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(25, '', '', '132-15-2760', 'iftekhar_hie@diu.edu.bd', '', '', '0000-00-00', '', '', '', 'Deactivate'),
(37, '', '', '132-15-2663', 'razu2663@diu.edu.bd', '', '', '0000-00-00', '', '', '', 'Deactivate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate_reg`
--
ALTER TABLE `candidate_reg`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `varsityID` (`varsityID`),
  ADD UNIQUE KEY `varsityID_2` (`varsityID`);

--
-- Indexes for table `ec_login`
--
ALTER TABLE `ec_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`vid`),
  ADD UNIQUE KEY `voter_id` (`voter_id`);

--
-- Indexes for table `voter_reg`
--
ALTER TABLE `voter_reg`
  ADD PRIMARY KEY (`vid`),
  ADD UNIQUE KEY `varsityIDD` (`varsityIDD`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate_reg`
--
ALTER TABLE `candidate_reg`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12270;
--
-- AUTO_INCREMENT for table `ec_login`
--
ALTER TABLE `ec_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `vid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `voter_reg`
--
ALTER TABLE `voter_reg`
  MODIFY `vid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
