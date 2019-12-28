-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 03:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hello`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `email`, `class`, `year`, `city`, `country`) VALUES
(13, 'srinu', 'srinu@gmail.com', 'mba', 2017, 'podili', 'india'),
(18, 'ksdjk', 'jhkjdsj', 'jkhjh', 2015, 'jkj', 'kkj'),
(19, 'p', 'p', 'p', 2014, 'pol', 'ppp');

-- --------------------------------------------------------

--
-- Table structure for table `world`
--

CREATE TABLE `world` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `world`
--

INSERT INTO `world` (`id`, `firstname`, `middlename`, `lastname`, `email`, `mobile`, `password`, `gender`) VALUES
(1, 'l', '', '', 'l', 0, 'l', ''),
(2, 'p', '', '', 'p', 0, 'p', ''),
(3, 'f', '', '', 'f', 0, 'f', ''),
(4, 'h', '', 'h', 'h', 0, 'h', ''),
(5, 'c', '', 'c', 'c', 0, 'c', ''),
(6, 't', '', 't', 't', 47, 't', ''),
(7, 'srinivas', '', 'pallerla', 'srinivas@gmail.com', 2147483647, '12345', ''),
(8, 'poo', 'poo', 'poo', 'poo@gmail.com', 2147483647, '12345', ''),
(9, 'nnn', 'nnn', 'nnn', 'nnn@gmail.com', 2147483647, '12345', ''),
(10, 'a', 'a', 'a', 'a', 9502112695, '12345', ''),
(11, 'ggg', 'ggg', 'ggg', 'ggg', 9502112695, '12345', ''),
(12, 'sita', 'ramulu', 'pallerla', 'sitaramulu@gmail.com', 7777777777, '12345', ''),
(13, 'anji', 'reddy', 'pallerla', 'anjireddy@gmail.com', 9875641230, '12345', ''),
(14, 'poornima', 'sri', 'reddy', 'poornima@gmail.com', 6666666666, '12345', 'female'),
(15, 'sree', 'sree', 'jhdjs', 'sree', 655656, '123', 'male'),
(16, 'l', 'l', 'l', 'l', 78, '123', 'male'),
(17, 'u', 'u', 'u', 'u', 56, '123', 'male'),
(18, 'b', 'b', 'b', 'b', 56, '123', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `world`
--
ALTER TABLE `world`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `world`
--
ALTER TABLE `world`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
