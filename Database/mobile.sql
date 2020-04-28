-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 12:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mob` int(10) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `rm` varchar(10) NOT NULL,
  `room_type` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`name`, `email`, `mob`, `check_in`, `check_out`, `rm`, `room_type`) VALUES
('gs', 'kumarsukesh333@gmail.com', 2147483647, '2020-04-07', '2020-05-22', 'A/C', 'sing'),
('V. Sukesh Kumar Reddy', 'kumarsukesh333@gmail.com', 2147483647, '2020-04-07', '2020-05-22', 'A/C', 'sing'),
('V. Sukesh Kumar Reddy', 'kumarsukesh333@gmail.com', 2147483647, '2020-04-07', '2020-05-22', 'A/C', 'sing'),
('', '', 0, '0000-00-00', '0000-00-00', '', ''),
('', '', 0, '0000-00-00', '0000-00-00', '', ''),
('', '', 0, '0000-00-00', '0000-00-00', '', ''),
('', '', 0, '0000-00-00', '0000-00-00', '', ''),
('Sanjeev', 'qrqwe@gmail.com', 2147483647, '2020-04-29', '2020-04-30', 'A/C', 'sing'),
('Sukesh', 'sk333reddy@gmail.com', 2147483647, '2020-04-07', '2020-04-29', 'A/C', 'thre');

-- --------------------------------------------------------

--
-- Table structure for table `check`
--

CREATE TABLE `check` (
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room` varchar(10) NOT NULL,
  `room_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fd`) VALUES
('huseriudk');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `rnum` int(25) NOT NULL,
  `ridd` int(15) NOT NULL,
  `cancel` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`rnum`, `ridd`, `cancel`) VALUES
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(48, 12, ''),
(48, 12, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, ''),
(5, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `card_type` varchar(25) NOT NULL,
  `m` int(5) NOT NULL,
  `y` int(5) NOT NULL,
  `card_no` int(20) NOT NULL,
  `card_name` varchar(15) NOT NULL,
  `c_no` int(3) NOT NULL,
  `pass` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`card_type`, `m`, `y`, `card_no`, `card_name`, `c_no`, `pass`) VALUES
('credit', 0, 2015, 846546, 'Sukesh', 51651, 4654),
('credit', 0, 2015, 846546, 'Sukesh', 51651, 4654),
('debit', 0, 2015, 6549875, 'Sukesh9908', 2125, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `pass` varchar(6) NOT NULL,
  `cpass` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `sub` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`sub`) VALUES
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
('');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
