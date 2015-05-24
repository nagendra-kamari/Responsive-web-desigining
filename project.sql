-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2015 at 04:44 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `uname` varchar(20) NOT NULL,
  `gen` char(10) NOT NULL,
  `prof` char(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`uname`, `gen`, `prof`, `email`, `password`, `number`, `city`) VALUES
('Nagendra', 'male', 'student', 'nagendra11@gmail.com', 'qwerty123', '9550111178', 'Kadapa'),
('Nagaraju', 'male', 'student', 'nagaraju12@gmail.com', 'nag909', '9908684515', 'Hyderbad'),
('ashok', 'male', 'student', 'ashok13@gmail.com', 'pwd123', '9494046620', 'Bangalore'),
('Mahesh', 'male', 'student', 'mahesh10@gmail.com', 'mahes667', '9989543212', 'Kolkatta'),
('Achari', 'male', 'student', 'achari1234@gmail.com', 'hey123', '8500331306', 'Nandyal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
