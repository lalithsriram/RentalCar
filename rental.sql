-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 12:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `number` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`firstname`, `lastname`, `number`, `comment`) VALUES
('keyur', 'patel', '5465', 'dbfsjf');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `carname` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `date2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order00`
--

CREATE TABLE `order00` (
  `carname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `date2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order00`
--

INSERT INTO `order00` (`carname`, `fname`, `address`, `date`, `date2`) VALUES
('CAR1', 'kehsk', 'MDNND', '2021-06-20', '2021-06-24'),
('CAR3', 'keyur', 'ksjs', '2021-06-25', '2021-06-22'),
('CAR3', 'kee', '456456', '2021-06-26', '2021-06-22'),
('CAR3', 'keyur', '454', '2021-06-26', '2021-06-23'),
('CAR3', 'fd', '56+5+', '2021-06-26', '0000-00-00'),
('CAR3', 'fd', '56+5+', '2021-06-26', '0000-00-00'),
('CAR3', 'fd', '56+5+', '2021-06-26', '0000-00-00'),
('CAR3', 'fd', '56+5+', '2021-06-26', '0000-00-00'),
('CAR3', 'fd', '56+5+', '2021-06-26', '2021-06-22'),
('CAR3', 'sdjsk', '6494', '2021-06-25', '2021-06-29'),
('CAR2', 'lalithsriram', '21,apr4', '2021-06-30', '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `firstname`, `lastname`, `password`, `confirm_password`, `userEmail`, `gender`) VALUES
('keyur', 'keyur', 'patel', 'patel', 'patel', 'keyurpatel@gmail.com', 'Male'),
('keyur', 'keyur', 'patel', 'keyur', 'keyur', 'keyurpatel@gmail.com', 'Male'),
('lalith', 'laltih', 'sriram', 'test123', 'test123', 'lalith@gmail.com', 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
