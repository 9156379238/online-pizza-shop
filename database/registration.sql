-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 10:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `username`, `password`) VALUES
(1, 'Shivam Gandhi', 'shivam123');

-- --------------------------------------------------------

--
-- Table structure for table `bogopizza`
--

CREATE TABLE `bogopizza` (
  `id` int(8) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `code` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bogopizza`
--

INSERT INTO `bogopizza` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Veg pizza bogo Combo', '3DcAM01', 'product-images/1.jpg', 300.00),
(2, 'Cheese Burst Pizza', 'USB02', 'product-images/2.jpg', 250.00);

-- --------------------------------------------------------

--
-- Table structure for table `cheese`
--

CREATE TABLE `cheese` (
  `id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `code` varchar(150) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cheese`
--

INSERT INTO `cheese` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Farmfresh Supreme Cheese Burst Pizza', 'PIZZA', 'product-images/1.jpg', 500.00),
(2, 'Middle Eastern Supreme Cheese Burst', 'PIZZA1', 'product-images/a.jpg', 600.00);

-- --------------------------------------------------------

--
-- Table structure for table `classic`
--

CREATE TABLE `classic` (
  `id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `code` varchar(150) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classic`
--

INSERT INTO `classic` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Chicken Delight Pizza', '3DcAM01', 'product-images/1.jpg', 490.00),
(2, 'Classic Margherita', 'USB02', 'product-images/2.jpg', 380.00);

-- --------------------------------------------------------

--
-- Table structure for table `supreme`
--

CREATE TABLE `supreme` (
  `id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `code` varchar(150) CHARACTER SET latin1 NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supreme`
--

INSERT INTO `supreme` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Farmfresh Supreme', 'wristWear0', 'product-images/3.jpg', 350.00),
(2, 'Middle Eastern Supreme', 'LPN45', 'product-images/a.jpg', 320.00),
(3, 'Picante Paneer Pizza', 'USB02', 'product-images/download1.jpg', 200.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phoneno`, `password`) VALUES
(1, 'shivam gandhi', 'shivamgandhi9156@gmail.com', '7894561230', 'lkj'),
(2, 'shiv', 'shivamgandhi12@gmail.com', '9156379236', 'shiv'),
(3, 'shubham', 'shubham@gmail.com', '7894561230', 'shubham123'),
(4, 'girish', 'shivamgandhi@gmail.com', '8976543212', 'ee025d30b490dd09c1ede06c6b0fcbb6'),
(15, 'shiv', 'asd@gmail.com', '9156379238', '671fc86500ae5dd534f859e4483354fe'),
(16, 'shubham', 'sgandgi@gmail.com', '1234567891', '900150983cd24fb0d6963f7d28e17f72');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bogopizza`
--
ALTER TABLE `bogopizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cheese`
--
ALTER TABLE `cheese`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classic`
--
ALTER TABLE `classic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supreme`
--
ALTER TABLE `supreme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bogopizza`
--
ALTER TABLE `bogopizza`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cheese`
--
ALTER TABLE `cheese`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classic`
--
ALTER TABLE `classic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supreme`
--
ALTER TABLE `supreme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
