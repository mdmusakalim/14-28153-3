-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 08:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileuploadtable`
--

CREATE TABLE `fileuploadtable` (
  `name` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fileuploadtable`
--

INSERT INTO `fileuploadtable` (`name`, `email`, `username`, `password`, `gender`, `dob`) VALUES
('irfan', '@gmail.com', 'irfann123', 'irfann123', '', '0000-00-00'),
('shahriar', 'shah@gmail', 'irfann1234', 'irfan123', '', '0000-00-00'),
('shahriar', 'shah@gmail', 'irfann1234', 'irfann1234', '', '0000-00-00'),
('shahriar', 'naimul392@', 'irfann1237', 'irfann123', '', '0000-00-00'),
('sadia Isla', 'sadia123@g', 'sadia123', 'sadia123', '', '0000-00-00'),
('irfan', 'irfan@gmai', 'irfan1456', 'irfan123', '', '0000-00-00'),
('shihan', 'sd@gmail', 'sd12', 'sd12', 'on', '0000-00-00'),
('ds', 'fd@gmail', 'ds123', 'ds123', 'Female', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
