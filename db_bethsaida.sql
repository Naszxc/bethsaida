-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 16, 2022 at 12:27 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bethsaida`
--

-- --------------------------------------------------------

--
-- Table structure for table `appt_list`
--

DROP TABLE IF EXISTS `appt_list`;
CREATE TABLE IF NOT EXISTS `appt_list` (
  `bs_id` int(15) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `appt_type` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenum` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appt_list`
--

INSERT INTO `appt_list` (`bs_id`, `date`, `time`, `appt_type`, `full_name`, `email`, `phonenum`, `status`) VALUES
(16, '2022-02-09', '12:00:00', 'Virtual Consultation', 'johnas canlas', 'johnas_canlas@yahoo.com', '9333151480', 'done'),
(16, '2022-02-09', '10:00:00', 'Virtual Consultation', 'tess noguchi', 't.noguchi@yahoo.com', '9333151480', 'done'),
(16, '2022-02-09', '10:00:00', 'Virtual Consultation', 'tess noguchi', 'johnas_canlas@yahoo.com', '9333151480', 'done'),
(16, '2022-02-09', '16:00:00', 'Virtual Consultation', 'tess noguchi', 'Cheskabais@gmail.com', '9333151480', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE IF NOT EXISTS `chats` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` int(225) NOT NULL,
  `outgoing_msg_id` int(225) NOT NULL,
  `msg` text NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=228 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

DROP TABLE IF EXISTS `patient_info`;
CREATE TABLE IF NOT EXISTS `patient_info` (
  `pi_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_1` varchar(5) NOT NULL,
  `question_2` varchar(5) NOT NULL,
  `question_3` varchar(5) NOT NULL,
  `question_4` varchar(5) NOT NULL,
  `question_5` varchar(5) NOT NULL,
  `bs_id` int(11) DEFAULT NULL,
  `sc_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pi_id`),
  UNIQUE KEY `sc_id` (`sc_id`),
  UNIQUE KEY `bs_id` (`bs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `p_id` int(15) NOT NULL AUTO_INCREMENT,
  `bs_id` int(15) NOT NULL,
  `sc_id` int(15) NOT NULL,
  `p_amount` int(5) NOT NULL,
  `p_email` varchar(30) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_connum` varchar(12) NOT NULL,
  PRIMARY KEY (`p_id`,`bs_id`,`sc_id`),
  KEY `bs_id` (`bs_id`),
  KEY `sc_id` (`sc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=143 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `sc_id` int(15) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `appt_type` varchar(50) NOT NULL,
  `bs_id` int(11) DEFAULT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenum` varchar(15) NOT NULL,
  `call_id` int(11) NOT NULL,
  PRIMARY KEY (`sc_id`),
  UNIQUE KEY `bs_id` (`bs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=234 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `bs_id` int(15) NOT NULL AUTO_INCREMENT,
  `bs_uniqid` varchar(30) NOT NULL,
  `bs_password` varchar(30) NOT NULL,
  `bs_fname` varchar(30) NOT NULL,
  `bs_lname` varchar(30) NOT NULL,
  `bs_mname` varchar(30) NOT NULL,
  `bs_address` varchar(50) NOT NULL,
  `bs_connum` varchar(12) NOT NULL,
  `bs_email` varchar(30) NOT NULL,
  `bs_stat` int(1) NOT NULL,
  `bs_datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`bs_id`, `bs_uniqid`, `bs_password`, `bs_fname`, `bs_lname`, `bs_mname`, `bs_address`, `bs_connum`, `bs_email`, `bs_stat`, `bs_datecreated`) VALUES
(1, '202101', 'password', 'miko', 'cruz', 'ramos', '705 frances bukid calumpit bulacan', '09202594062', 'mikocruz.mc@gmail.com', 3, '2021-10-03 06:58:31'),
(6, '202100006', 'uMnvLmIQ', 'jeffrey', 'cruz', 'Aguirre', 'Apalit, Pampanga', '09333151480', 'deilapanglinan1025@gmail.com', 2, '2021-11-30 06:47:26'),
(7, '202100007', 'oVbJYtj5', 'ferdinand', 'marcos', 'edralin', 'Apalit, Pampanga', '09503589492', 'marcos@gmail.com', 2, '2021-12-02 13:18:46'),
(8, '202200008', 'V7KBkA0C', 'jeffrey', 'canlas', 'santos', 'quezon city', '09333151480', 'jeff@gmail.com', 2, '2022-02-02 11:48:10'),
(9, '202200009', 'V1Jakx2b', 'erwin', 'ryan', 'cruz', 'manila', '09503589492', 'erwin.cruz@gmail.com', 2, '2022-01-12 08:36:09'),
(10, '202200010', 'fpM7khru', 'Justine', 'Perez', 'Hermosa', 'Muntinlupa', '09264205886', 'johnas03@gmail.com', 2, '2022-02-02 11:48:13'),
(16, '202200011', 'wBh9kcRM', 'miko', 'ramos', 'cruz', 'Bulacan', '09333151480', 'mokicruz.mc@gmail.com', 2, '2022-01-17 13:30:44'),
(22, '202200017', 'hxkKbIGN', 'Johnas', 'Canlas', 'Baquirel', 'sampaloc,apalit,pampanga', '09503589492', 'johnas.canlas03@gmail.com', 2, '2022-02-09 06:26:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
