-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 08:01 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(2) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_pass` varchar(15) NOT NULL,
  `myname` varchar(20) NOT NULL,
  `namelast` varchar(50) NOT NULL,
  `phon` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_name`, `user_pass`, `myname`, `namelast`, `phon`, `email`) VALUES
(1, 'admin', '123456', 'soma', 'สุธีรภัทร หมื่นภักดี', '0640323748', 'anshaimer@gmail.com'),
(2, 'nuk123', '0321456', 'nuk', 'นคร หลวง', '0610610612', 'anshaimer1@gmail.com'),
(4, 'root', 'rootroot', 'Annn', 'สามสาร สอง', '0225345811', 'nuk_20247@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(5) NOT NULL,
  `court_num` varchar(5) NOT NULL,
  `court_time_booking` varchar(15) NOT NULL,
  `court_date_booking` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `phon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `court_num`, `court_time_booking`, `court_date_booking`, `name`, `phon`) VALUES
(4, '1', '10.00-11.00', '2018-06-04', 'สมิง สูม', '0623354641'),
(6, '4', '13.00-14.00', '2018-06-03', 'หนวด ขาว', '0895213211'),
(7, '2', '15.00-16.00', '2018-06-03', 'แซง ผมแดง', '0225345811'),
(8, '1', '9.00-10.00', '2018-06-05', 'สุงสิง สามชุน', '0623456422'),
(9, '3', '10.00-11.00', '2018-06-03', 'สมจิด จงจง', '0623354645');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `TableID` int(5) NOT NULL,
  `Sessile` tinyint(1) NOT NULL,
  `time` char(12) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`TableID`, `Sessile`, `time`, `date`) VALUES
(1, 4, '15.00-16.00', '2018-06-03'),
(2, 2, '15.00-16.00', '2018-07-03'),
(3, 3, '12.00-13.00', '2018-06-03'),
(4, 1, '11.00-12.00', '2018-06-04'),
(5, 2, '13.00-14.00', '2018-06-06'),
(6, 1, '9.00-10.00', '2018-06-06'),
(7, 4, '10.00-11.00', '2018-06-03'),
(8, 4, '14.00-15.00', '2018-07-03'),
(9, 3, '9.00-10.00', '2018-06-04'),
(10, 3, '10.00-11.00', '2018-06-04'),
(11, 1, '12.00-13.00', '2018-07-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`TableID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `TableID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
