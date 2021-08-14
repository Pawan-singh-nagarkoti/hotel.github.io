-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: april 15, 2021 at 05:14 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nagarkoti`
--

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `username`, `password`, `emailid`, `contact`) VALUES
(33, 'Pawan singhnagarkoti', '1234567899', 'nagarkoti@gmail.com', 2147483647),
(34, 'pawan', '123', 'pawan@gmail.com', 2147483647),
(35, 'Dipa nagarkoti', '1234', 'deepa@gmail.com', 2147483647),
(36, 'sanjay', 'sanjay@123', 'sanjaykhanka34@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `userbooking`
--

CREATE TABLE `userbooking` (
  `id` int(200) NOT NULL,
  `title` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `typeroom` varchar(40) NOT NULL,
  `bedding` varchar(40) NOT NULL,
  `mealplan` varchar(40) NOT NULL,
  `checkin` int(40) NOT NULL,
  `checkout` int(40) NOT NULL,
  `bookingamount` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbooking`
--

INSERT INTO `userbooking` (`id`, `title`, `firstname`, `lastname`, `emailid`, `phonenumber`, `nationality`, `typeroom`, `bedding`, `mealplan`, `checkin`, `checkout`, `bookingamount`) VALUES
(1, 'Dr.', 'Pawan singh', 'Nagarkoti', 'nagarkoti@gmail.com', 2147483647, 'India', 'SINGLE ROOM', 'Single', 'Half Board', 2019, 2019, 5000),
(2, 'Dr.', 'dipa', 'nagarkoti', 'diap@gmail.com', 2147483647, 'India', 'DELUXE ROOM', 'Single', 'Breakfast', 2019, 2019, 9000),
(3, 'Mr.', 'Mohit singh', 'Nagarkoti', 'Mohitsingh@gmail.com', 2147483647, 'India', 'DELUXE ROOM', 'Single', 'Breakfast', 2019, 2019, 9000),
(4, 'Mr.', 'sanjay', 'singh', 'sanjay34@gmail.com', 2147483647, 'India', 'SINGLE ROOM', 'Double', 'Half Board', 2019, 2019, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `userpayment`
--

CREATE TABLE `userpayment` (
  `id` int(200) NOT NULL,
  `cardnumber` int(16) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `cvv` int(3) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpayment`
--

INSERT INTO `userpayment` (`id`, `cardnumber`, `month`, `year`, `cvv`, `amount`) VALUES
(1, 2147483647, 2, 2019, 132, 5000),
(2, 2147483647, 2, 2020, 131, 9000),
(3, 2147483647, 52, 4644, 446, 9000),
(4, 2147483647, 6, 21, 536, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `zcontact`
--

CREATE TABLE `zcontact` (
  `id` int(200) NOT NULL,
  `name` varchar(40) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `qurry` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zcontact`
--

INSERT INTO `zcontact` (`id`, `name`, `contact`, `email`, `qurry`) VALUES
(23, 'Pawan singh nagarkoti ', 2147483647, 'nagarkoti@gmail.com', 'welcome to our hotel'),
(24, 'Pawan singh', 2147483647, 'pawan@gmail.com', ' Qurry: Copyright Â© 2019 Sun Rise, All Rights Reserved Developed & maintained by: Pawan singh nagark'),
(25, 'Pankaj khulbe', 2147483647, 'pankaj@gmail.com', 'helow'),
(26, 'Govind negi', 2147483647, 'govind@gmail.com', 'Good webapplication '),
(27, 'Pankaj singh negi', 2147483647, 'negi@gmail.com', 'what type of food in your hotel? '),
(28, 'Vinay Bora', 2147483647, 'boraji@gmail.com', 'food types '),
(29, 'Sanjay khanka', 2147483647, 'khankaji@gmail.com', 'welcome to hotel'),
(30, 'Rajat singh', 2147483647, 'singh@gmail.com', 'types of food in your hotel'),
(31, 'sachine bora', 2147483647, 'sachine@gmail.com', 'delivered food '),
(32, 'Lalit singh', 2147483647, 'Lalit145@gmail.com', 'how to login.....?'),
(33, 'Rohan singh ', 2147483647, 'singh@gmail.com', ' Qurry: food types');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userbooking`
--
ALTER TABLE `userbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpayment`
--
ALTER TABLE `userpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zcontact`
--
ALTER TABLE `zcontact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userbooking`
--
ALTER TABLE `userbooking`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userpayment`
--
ALTER TABLE `userpayment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zcontact`
--
ALTER TABLE `zcontact`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
