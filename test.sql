-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 08:45 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `username`, `password`) VALUES
(2, 'rahul', '01775675786', 'rahul', '9090'),
(8, 'Arif', '01913937870', 'md', '4040'),
(10, 'Shanjana', '01772232242', 'srid', '9090'),
(11, 'Mir', '01720200040', 'akash', '9090'),
(12, 'jarif', '01748', 'anjum', '7070');

-- --------------------------------------------------------

--
-- Table structure for table `businfo`
--

CREATE TABLE `businfo` (
  `id` int(15) NOT NULL,
  `bustype` varchar(20) NOT NULL,
  `seatno` int(15) NOT NULL,
  `fare` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `busno` int(20) NOT NULL,
  `busname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businfo`
--

INSERT INTO `businfo` (`id`, `bustype`, `seatno`, `fare`, `status`, `busno`, `busname`) VALUES
(1, 'luxury AC Coach', 2, '1200', 'available', 123, 'Green Line');

-- --------------------------------------------------------

--
-- Table structure for table `buslist`
--

CREATE TABLE `buslist` (
  `id` int(10) NOT NULL,
  `busname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buslist`
--

INSERT INTO `buslist` (`id`, `busname`) VALUES
(1, 'D-123');

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `id` int(10) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `transection` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancel`
--

INSERT INTO `cancel` (`id`, `mobile`, `transection`) VALUES
(2, '01775675786', '01775678'),
(3, '01775675786', '1234'),
(4, '01775675788', '345');

-- --------------------------------------------------------

--
-- Table structure for table `fare`
--

CREATE TABLE `fare` (
  `id` int(10) NOT NULL,
  `busname` varchar(30) NOT NULL,
  `bustype` varchar(20) NOT NULL,
  `price` varchar(15) NOT NULL,
  `charge` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`id`, `busname`, `bustype`, `price`, `charge`) VALUES
(1, 'Green Line', 'VIP Ac Coach', '1270', '70'),
(10, 'Ena', 'AC Chair Coach', '280', '90'),
(14, 'Hino', 'Normal Ac Coach', '1320', '50'),
(19, 'shalbon', 'Normal AC Coach', '220', '20');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `text`) VALUES
(6, 'Buses are not available right now.');

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfo`
--

CREATE TABLE `paymentinfo` (
  `id` int(10) NOT NULL,
  `merchantno` varchar(12) NOT NULL,
  `transection` varchar(12) NOT NULL,
  `refno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentinfo`
--

INSERT INTO `paymentinfo` (`id`, `merchantno`, `transection`, `refno`) VALUES
(1, '01772232242', '123', 1234),
(2, '01775675786', '2345', 89),
(3, '01913937870', '567', 678);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `rdate` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `mobile`, `email`, `password`, `rdate`, `gender`, `address`) VALUES
(1, 'Rahul', 'vai', '1775675786', 'em@gmail.com', '2020', '2020-06-30', 'male', '14 dn'),
(2, 'akash', 'mir', '1775675786', 'a@gmail.com', '4040', '2020-09-22', 'male', 'Dhaka,Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(10) NOT NULL,
  `busname` varchar(30) NOT NULL,
  `bus_from` varchar(200) NOT NULL,
  `bus_to` varchar(200) NOT NULL,
  `busdate` date NOT NULL,
  `bustime` time(6) NOT NULL,
  `busstand` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `busname`, `bus_from`, `bus_to`, `busdate`, `bustime`, `busstand`) VALUES
(1, 'Greenline', 'Mymensingh', 'Dhaka', '2020-09-09', '08:02:28.000000', 'Gabtali'),
(3, 'Ena', 'Mymensingh', 'Cox', '0000-00-00', '00:00:00.000000', 'Mahakhali'),
(4, 'Shyemoli', 'Pabna', 'khushtia', '2020-10-01', '05:15:00.000000', 'Akua'),
(5, 'Hino', 'Dhaka', 'Khulna', '2020-11-05', '00:00:00.000000', 'Mahakhali'),
(6, 'Hanif', 'Pabna', 'Dhaka', '2020-09-10', '15:40:06.000000', 'Gabtali');

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `id` int(200) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` int(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `post_office` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pin_code` int(20) NOT NULL,
  `doj` int(30) NOT NULL,
  `bus_name` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`id`, `name`, `dob`, `address`, `post_office`, `city`, `pin_code`, `doj`, `bus_name`, `role`) VALUES
(2, 'Rahul Paul', 2020, '14 no.', 'Dhaka', 'Dhaka', 2100, 2020, 'ena', 'supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `umobile` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `busname` varchar(15) NOT NULL,
  `bustype` varchar(20) NOT NULL,
  `num_ber` int(15) NOT NULL,
  `busnum` varchar(30) NOT NULL,
  `busstand` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `id` int(10) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `transection` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`id`, `mobile`, `transection`) VALUES
(1, '017186128346', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businfo`
--
ALTER TABLE `businfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buslist`
--
ALTER TABLE `buslist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fare`
--
ALTER TABLE `fare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  ADD PRIMARY KEY (`id`,`refno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`,`busdate`);

--
-- Indexes for table `staff_info`
--
ALTER TABLE `staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`,`umobile`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `businfo`
--
ALTER TABLE `businfo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `buslist`
--
ALTER TABLE `buslist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fare`
--
ALTER TABLE `fare`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff_info`
--
ALTER TABLE `staff_info`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
