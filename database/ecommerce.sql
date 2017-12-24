-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 09:54 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `subcatagory` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `material` varchar(500) NOT NULL,
  `size` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `bprice` double NOT NULL,
  `sprice` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `offer` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allproducts`
--

INSERT INTO `allproducts` (`code`, `name`, `catagory`, `subcatagory`, `color`, `material`, `size`, `description`, `bprice`, `sprice`, `quantity`, `offer`) VALUES
('0001', 'T-Shirt', 'Men', 'Shirt', 'Red', '100%cotton', 'XXL', '100% Cotton.full sleeve t-shirt', 500, 1000, 10, 80),
('0002', 'women dress', 'women dress', 'Shirt', 'Green', '50%Cotton', 'XXL', 'women dress 50% cotton.limited edition', 500, 1000, 20, 20),
('0003', 'Pants', 'Women', 'Pant', 'Black', '100%cotton', 'XL', '100%cotton,Womens Pant.limited editon', 600, 800, 20, 0),
('0004', 'Pants', 'Men', 'Pants', 'White', '100%cotton', 'XL', '100%cotton,Pants', 100, 200, 120, 0),
('0006', 'Kids shoe', 'Kids', 'Shoe', 'White', '100%leather', '22', '100%leather,Kids Shoe', 250, 300, 50, 0),
('0012', 'Pants', 'Men', 'Pant', 'Blue', '100%cotton', 'L', '100%cotton,Pants', 700, 800, 21, 0),
('0019', 'Samsung-w83', 'Electronic', 'Mobile', 'Black', '', '', 'Samsung-w83.top rated mobile phone with 8gb memory', 19000, 20000, 1000, 0);

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
  `size` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `cost` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `offer` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todaysoffers`
--

INSERT INTO `todaysoffers` (`code`, `name`, `catagory`, `subcatagory`, `color`, `material`, `size`, `description`, `cost`, `quantity`, `offer`) VALUES
('0001', 'T-Shirt', 'Men', 'Shirt', 'Blue', '100%Cotton', 'M', '100% Cotton.full sleeve t-shirt', 10000, 10, 80),
('0002', 'women dress', 'Women', 'Shirt', 'Green', '50%Cotton', 'L', 'women dress 50% cotton.limited edition', 6000, 6, 20),
('0015', 'leather shoe', 'Men', 'Shoes', 'Black', '100%leather ', '42', '100%leather,Blcak mens shoe', 5000, 5, 0),
('0019', 'samsung', 'Electronic', 'Mobile', 'Black', '', '', 'Samsung-w83', 20000, 2, 50),
('0021', 'Sholder Bag', 'Women', 'Bags', 'Brown', '100%leather', 'M', '100%leather, Brown color sholder bag. ', 7000, 7, 30);

-- --------------------------------------------------------

--
-- Table structure for table `userorders`
--

CREATE TABLE `userorders` (
  `username` varchar(500) NOT NULL,
  `code` varchar(500) NOT NULL,
  `color` varchar(500) NOT NULL,
  `size` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userorders`
--

INSERT INTO `userorders` (`username`, `code`, `color`, `size`, `quantity`, `price`, `status`) VALUES
('minhaz', '0001', 'Red', 'XXL', 3, 1000, 'recived'),
('anik', '0002', 'Green', 'XL', 5, 5000, 'recived'),
('minhaz', '0003', 'Blue', 'S', 2, 4000, ''),
('piash', '0005', 'Black', 'M', 10, 10000, 'recived'),
('rafat', '0002', 'Red', 'XXL', 9, 4500, ''),
('rafat', '0004', 'Green', 'S', 3, 1200, 'recived'),
('anik', '0009', 'White', 'L', 4, 4000, 'recived'),
('adi', '0012', 'Blue', 'L', 7, 5600, ''),
('adi', '0003', 'Black', 'XXL', 3, 3000, '');

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
  `dob` varchar(15) NOT NULL,
  `pp` varchar(500) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `usertype`, `password`, `name`, `email`, `gender`, `dob`, `pp`, `address`) VALUES
('adi', 'customer', '12312312', 'Arafat Adi', 'adi@gmail.com', 'male', '4/4/1991', 'minhaz.jpg', '42/A,uttara,sector-2'),
('anik', 'customer', '12312312', 'faysal anik', 'faysal@gmail.com', 'male', '6/2/1998', 'anik.jpg', '12/C,khigao.road no-2'),
('imo', 'admin', '12312312', 'imran imo', 'imran@gmail.com', 'male', '2/2/1991', 'imo.jpg', '41/A,Zigatola,Dhanmondi'),
('minhaz', 'customer', '12312312', 'Minhaz uddin', 'uddinminhaz09@gmail.com', 'male', '6/8/1996', 'minhaz.jpg', '41/A,Zigatola,Dhanmondi'),
('neshi', 'admin', '12312312', 'neshi islam', 'neshi@gmail.com', 'female', '1/1/1990', 'nishat.jpg', '22/B,Kakoli,Dhaka 1209.Road-02'),
('piash', 'customer', '12312312', 'Ibrahim piash', 'piash@gmail.com', 'male', '19/7/1992', 'minhaz.jpg', 'A/2,Dhanmondi,Road-4,Dhaka-1204'),
('rafat', 'customer', '12312312', 'Yasin Arafat', 'yasin@gmail.com', 'male', '3/3/2001', 'anik.jpg', '3/C,Kolbagan,Road-1,Dhaka-1207');

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
-- Indexes for table `todaysoffers`
--
ALTER TABLE `todaysoffers`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
