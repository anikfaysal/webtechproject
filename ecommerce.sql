-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 09:34 PM
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
  `offer` double NOT NULL,
  `pdpic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allproducts`
--

INSERT INTO `allproducts` (`code`, `name`, `catagory`, `subcatagory`, `color`, `material`, `size`, `description`, `bprice`, `sprice`, `quantity`, `offer`, `pdpic`) VALUES
('0001', 'T-Shirt', 'Men', 'Shirt', 'Red', '100%cotton', 'XXL', '100% Cotton.full sleeve t-shirt', 500, 1000, 10, 80, 'mshirt1.png'),
('00010', 'Casual Belt', 'Men', 'Belt', 'Black', 'Leather', '25', 'Leather belt', 2000, 6000, 25, 0, 'belt2.jpg'),
('00011', 'Tops', 'Women', 'Dress', 'Blue', '100% Cotton', 'M', 'Women tops 10% cotton limited edition', 500, 1500, 25, 0, 'pic.jpg'),
('00012', 'Pants', 'Women', 'Pant', 'Black', 'Jeans', 'S', 'New jeans Pant', 1500, 2500, 20, 0, 'wpant.jpg'),
('00013', 'High hill', 'Women', 'Shoe', '00013', 'synthetic', '30', 'New High hill.very Fashionable', 1000, 3000, 15, 0, 'wshoe.jpg'),
('00014', 'Boot', 'Women', 'Shoe', 'Gray', 'rubber', '32', 'New Fashionable Women''s Boot', 1200, 2800, 25, 0, 'wshoe1.jpg'),
('00015', 'Small Purse ', 'Women', 'Bags', 'Blue', 'Canvas', '13cm', 'Women Small Purse', 50, 150, 25, 0, 'bag.jpg'),
('00016', 'Shoulder Bag', 'Women', 'Bags', 'Purple', 'Silicon', '25cm', 'Women Shoulder Bag', 250, 500, 50, 0, 'accessories.png'),
('00017', 'Kids Dress', 'Kids', 'Dress', 'Red', 'Cotton', '28', '100% cotton', 350, 500, 30, 0, 'kids7.PNG'),
('00018', 'Kids Shoe', 'Kids', 'Shoe', 'White', 'Lather', '28', '100% Lather', 550, 900, 30, 0, 'kids3.PNG'),
('00019', 'Kids Diapers', 'Kids', 'Diapers', 'White', 'Paper', '25', '100% Soft material', 150, 200, 100, 0, 'kids2.PNG'),
('0002', 'women dress', 'Women', 'Dress', 'Green', '50%Cotton', 'XXL', 'women dress 50% cotton.limited edition', 500, 1000, 22, 20, 'wprog1.png'),
('00020', 'Kids Toy', 'Kids', 'Toys', 'Red', 'Plastic', '10', 'Plastic made', 50, 200, 100, 0, 'kids4.PNG'),
('00021', 'Wallet', 'Accessories', 'Wallet', 'Brown', 'Lather', '10', 'Pure Lather', 100, 200, 100, 0, 'walate.PNG'),
('00022', 'BackCover', 'Accessories', 'BackCover', 'Brown', 'plastic', '10', 'For iphone X', 500, 1500, 100, 0, 'backcover.PNG'),
('00023', 'Bags', 'Accessories', 'Bag', 'Brown', 'plastic', '10', 'hard and light', 1500, 2500, 200, 0, 'bags.PNG'),
('00024', 'HandBand', 'Accessories', 'HandBand', 'Black', 'Steel', '10', 'hard and light', 150, 250, 200, 0, 'handband.PNG'),
('00026', 'HeadPhone', 'Electronic', 'HeadPhone', 'Black', 'Plastic', '5', 'For Samsung-w83.top rated mobile phone ', 90, 200, 1000, 0, 'headphone.PNG'),
('00027', 'TableFan', 'Electronic', 'TableFan', 'Black', 'Steel', '', 'Very fast', 2000, 3000, 1000, 0, 'tablefan.PNG'),
('00029', 'Smart Watch', 'Electronic', 'Smart Watch', 'Black', '', '', 'Smart Watch', 190, 390, 100, 0, 'watch.jpg'),
('0003', 'Pants', 'Women', 'Pant', 'Black', '100%cotton', 'XL', '100%cotton,Womens Pant.limited editon', 600, 800, 20, 0, 'wprog5.png'),
('0004', 'Pants', 'Men', 'Pant', 'White', '100%cotton', 'XL', '100%cotton,Pants', 100, 200, 120, 0, 'pros2.png'),
('0005', 'Trendy T-Shirt ', 'Men', 'Shirt', 'Red', 'Silk', 'M', 'Silk full sleeve t-shirt', 300, 600, 50, 0, 'mshirt2.PNG'),
('0006', 'Kids shoe', 'Kids', 'Shoe', 'White', '100%leather', '22', '100%leather,Kids Shoe', 250, 300, 50, 0, 'kids3.png'),
('0007', 'Formal Shoe', 'Men', 'Shoe', '0007', 'Lofar', '40', 'New Lofar shoe.very Fashionable', 1500, 2500, 15, 0, 'pros3.PNG'),
('0008', 'Casual Shoe', 'Men', 'Shoe', 'black', 'Leather', '42', 'Pure Leather Shoe', 800, 2500, 20, 0, 'leather.jpg'),
('0009', 'Formal Belt', 'Men', 'Belt', 'Blue', 'Leather', '20', 'Leather belt', 200, 600, 25, 0, 'belt1.jpg'),
('0012', 'Pants', 'Men', 'Pant', 'Blue', '100%cotton', 'L', '100%cotton,Pants', 700, 800, 21, 0, 'wprog2.png'),
('0019', 'Samsung-w83', 'Electronic', 'Mobile', 'Black', '', '', 'Samsung-w83.top rated mobile phone with 8gb memory', 19000, 20000, 1000, 0, 'backcover.png');

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
('adi', 'user', '12312312', 'Arafat Adi', 'adi@gmail.com', 'male', '4/4/1991', 'minhaz.jpg', '42/A,uttara,sector-2'),
('anik', 'user', '12312312', 'faysal anik', 'faysal@gmail.com', 'male', '6/2/1998', 'anik.jpg', '12/C,khigao.road no-2'),
('imo', 'admin', '12312312', 'imran imo', 'imran@gmail.com', 'male', '2/2/1991', 'imo.jpg', '41/A,Zigatola,Dhanmondi'),
('minhaz', 'user', '12312312', 'Minhaz uddin', 'uddinminhaz09@gmail.com', 'male', '6/8/1996', 'minhaz.jpg', '41/A,Zigatola,Dhanmondi'),
('neshi', 'admin', '12312312', 'neshi islam', 'neshi@gmail.com', 'female', '1/1/1990', 'nishat.jpg', '22/B,Kakoli,Dhaka 1209.Road-02'),
('piash', 'user', '12312312', 'Ibrahim piash', 'piash@gmail.com', 'male', '19/7/1992', 'minhaz.jpg', 'A/2,Dhanmondi,Road-4,Dhaka-1204'),
('rafat', 'user', '12312312', 'Yasin Arafat', 'yasin@gmail.com', 'male', '3/3/2001', 'anik.jpg', '3/C,Kolbagan,Road-1,Dhaka-1207');

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
