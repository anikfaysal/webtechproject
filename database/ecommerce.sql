-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 06:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `allproducts`
--

CREATE TABLE `allproducts` (
  `code` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `catagory` varchar(500) NOT NULL,
  `subcatagory` varchar(500) NOT NULL,
  `color` varchar(500) NOT NULL,
  `material` varchar(500) NOT NULL,
  `size` int(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `cost` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `todaysoffers`
--

CREATE TABLE `todaysoffers` (
  `code` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `catagory` varchar(500) NOT NULL,
  `subcatagory` varchar(500) NOT NULL,
  `color` varchar(500) NOT NULL,
  `material` varchar(500) NOT NULL,
  `size` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `cost` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `offer` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userorders`
--

CREATE TABLE `userorders` (
  `username` varchar(500) NOT NULL,
  `code` varchar(500) NOT NULL,
  `color` varchar(500) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(5) NOT NULL,
  `pp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `pp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allproducts`
--
ALTER TABLE `allproducts`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
