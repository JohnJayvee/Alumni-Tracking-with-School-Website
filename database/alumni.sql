-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 09:02 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `acct_id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `status` varchar(30) NOT NULL,
  `acct_type` int(10) NOT NULL,
  `alumni_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`acct_id`, `username`, `password`, `status`, `acct_type`, `alumni_id`) VALUES
(1, 'admin', 'admin', '1', 1, 1),
(2, 'estongi', '$2y$10$DdxszF0tx8jl.U/8CCMCWuvD8sVkbCSV/EsaKlsfli4kCsIMDZcLO', '1', 1, 2),
(3, 'kevin', '$2y$10$s0DAq60CXuzMd0BxPjkN8urmkEK2pWT1H5GIqq6kRJA0WNpfTlKZ.', '1', 2, 3),
(15, 'bulbulito', '$2y$10$0Hnx.D3TMXL/EF7BHb7s5uIMwwXO8IzVdzhZmfBlQFgCDeVQTwcGi', '1', 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `alumni_id` int(11) NOT NULL,
  `alumni_tracking_no` varchar(255) DEFAULT NULL,
  `firstname` varchar(65) NOT NULL,
  `middlename` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `datebirth` date DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `civil_status` varchar(50) NOT NULL,
  `address` varchar(65) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `citizenship` varchar(40) NOT NULL,
  `date_registered` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`alumni_id`, `alumni_tracking_no`, `firstname`, `middlename`, `lastname`, `datebirth`, `sex`, `civil_status`, `address`, `contact_number`, `email`, `citizenship`, `date_registered`) VALUES
(1, '7OS-4JY-WI0', 'Jayvee', 'Cabaddu', 'Siuagan', '2018-12-10', 'Male', 'Single', 'Tuguegarao City', 559066496, 'john.jayvee@yahoo.com', 'Filipino', '2018-12-20 17:24:11.506631'),
(2, NULL, 'Estong', '', 'Tutong', NULL, '', '', '', 0, '', '', '0000-00-00 00:00:00.000000'),
(3, NULL, 'Kevin', '', 'Maggay', NULL, '', '', '', 0, '', '', '0000-00-00 00:00:00.000000'),
(15, NULL, 'Bulbulito', '', 'Bayagbag', NULL, '', '', '', 0, '', '', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `attend_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(65) NOT NULL,
  `event_time` time DEFAULT NULL,
  `event_venue` varchar(70) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_posted` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `gallery_pic` blob,
  `gallery_alt` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `logs_id` int(11) NOT NULL,
  `acct_id` int(11) NOT NULL,
  `text` varchar(65) DEFAULT NULL,
  `datetime` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`logs_id`, `acct_id`, `text`, `datetime`) VALUES
(1, 2, 'registered a user', '0000-00-00'),
(3, 0, 'Admin admin has registered a user', '0000-00-00'),
(4, 1, 'Admin admin has registered a user', '0000-00-00'),
(5, 1, 'Admin admin has registered a user', '2018-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`acct_id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`alumni_id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`attend_id`),
  ADD KEY `alumni_id` (`alumni_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`logs_id`),
  ADD KEY `acct_id` (`acct_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `acct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `attend_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `logs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD CONSTRAINT `tbl_attendance_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `tbl_alumni` (`alumni_id`),
  ADD CONSTRAINT `tbl_attendance_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `tbl_events` (`event_id`),
  ADD CONSTRAINT `tbl_attendance_ibfk_3` FOREIGN KEY (`event_id`) REFERENCES `tbl_events` (`event_id`);

--
-- Constraints for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `tbl_comment_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `tbl_alumni` (`alumni_id`);

--
-- Constraints for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD CONSTRAINT `tbl_gallery_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `tbl_events` (`event_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
