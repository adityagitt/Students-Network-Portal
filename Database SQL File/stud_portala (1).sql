-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2013 at 11:12 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stud_portala`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event`) VALUES
('hhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `name`, `feedback`) VALUES
(1, 'adi', 'sdnjskjsdkds'),
(2, '', ''),
(3, 'adi', 'sdnjskjsdkds'),
(4, 'aa', ''),
(5, 'adi', ''),
(6, 'aa', ''),
(7, 'nhh', ''),
(8, 'hhh', 'xnsj'),
(9, '', ''),
(10, 'asd', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `$day` int(11) NOT NULL,
  `$month` int(11) NOT NULL,
  `$yer` int(11) NOT NULL,
  `$gender` varchar(30) NOT NULL,
  `$add` varchar(50) NOT NULL,
  `$city` varchar(30) NOT NULL,
  `$state` varchar(30) NOT NULL,
  `$mob` int(11) NOT NULL,
  `$email` varchar(30) NOT NULL,
  `$fullname` varchar(30) NOT NULL,
  `$course` varchar(30) NOT NULL,
  `$year` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `$day`, `$month`, `$yer`, `$gender`, `$add`, `$city`, `$state`, `$mob`, `$email`, `$fullname`, `$course`, `$year`) VALUES
(2, 'aditya', 'asd', 8, 7, 1989, 'Male', 'aASSS', 'Lucknow', 'Andhra Pradesh', 234568, 'kxkmxkzms', 'zmxmxm', 'BCA', 'II'),
(9, 'anant', 'adityamish', 30, 2, 1986, 'Male', 'assd', 'Lucknow', 'Madhya Pradesh', 2147483647, 'contactme2158@gmail.com', 'aditya mishra', 'BBA', 'III'),
(10, 'adaddd', 'adaddd', 14, 6, 1988, 'Male', '', 'Lucknow', 'State', 113333, 'contactme2158@gmail.com', 'aditya mishra', 'Select Course', 'Select Year'),
(12, 'SADSSA', 'DSDD', 17, 4, 1990, 'Male', 'SS', 'Lucknow', 'Madhya Pradesh', 2147483647, 'contactme2158@gmail.com', 'aditya mishra', 'Select Course', 'Select Year'),
(13, 'jatin', 'deepak', 7, 5, 1990, 'Male', 'asasss', 'Lucknow', 'Madhya Pradesh', 1234567890, 'contactme2158@gmail.com', 'aditya mishra', 'BCA', 'II'),
(14, 'asd', 'asd', 8, 5, 1988, 'Male', 'wsdfsddsf', 'Lucknow', 'Arunachal Pradesh', 1244, 'ffff', 'aditya mishra', 'B.Tech.', 'III'),
(15, 'adi', 'adi', 2, 2, 13, 'male', 'aaa', 'lucknow', 'up', 123456789, 'con', 'aditya', 'xdd', 'ddd'),
(16, 'asff', '#@#as', 3, 2, 1989, 'Male', 'iuyt', 'Lucknow', 'State', 876543, 'contactme2158@gmail.com', 'aditya mishra', 'B.Tech.', 'IV');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(10) NOT NULL,
  `enroll_no` int(10) NOT NULL,
  `age` int(5) NOT NULL,
  `address` varchar(10) NOT NULL,
  `sem` int(5) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `batch` varchar(5) NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `sub_code` varchar(20) NOT NULL,
  `attendence` tinyint(1) NOT NULL,
  `date11` date NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `enroll_no`, `age`, `address`, `sem`, `branch`, `batch`, `contact`, `password`, `sub_code`, `attendence`, `date11`, `year`) VALUES
('Aditya', 1, 20, 'sec105', 5, 'CSE', 'f3', 2147483647, 'adi', '1234', 4, '2013-11-25', 3),
('Shivam', 3, 20, 'sec62', 5, 'CSE', 'f3', 8130, 'shiv', '1234', 3, '2013-11-20', 3),
('jatin', 4, 20, 'sec105', 5, 'CSE', 'f3', 8130, 'adi', '1234', 0, '2013-11-20', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
