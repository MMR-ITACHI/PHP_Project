-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2024 at 08:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_form_info`
--

CREATE TABLE `application_form_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `mobile_no` varchar(17) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone_no` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `tin_no` varchar(30) NOT NULL,
  `citizen_number` varchar(30) NOT NULL,
  `address` varchar(300) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `post_code` varchar(50) NOT NULL,
  `area` varchar(100) NOT NULL,
  `nominee` varchar(50) NOT NULL,
  `nominee_number` varchar(17) NOT NULL,
  `account_type` enum('Saving','Current','Fixed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application_form_info`
--

INSERT INTO `application_form_info` (`id`, `name`, `gender`, `mobile_no`, `email`, `telephone_no`, `dob`, `tin_no`, `citizen_number`, `address`, `country`, `state`, `city`, `post_code`, `area`, `nominee`, `nominee_number`, `account_type`) VALUES
(1, 'Mostafizur', 'Male', '01736815328', 'abirm6133@gmail.com', '01971324923', '1997-11-11', '1282919', '1110167675', 'South Rajashon', 'BD', 'Dhaka', 'Savar', '1340', 'South Rajashon', 'Md Sanbir', '1282917', 'Saving');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_form_info`
--
ALTER TABLE `application_form_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_form_info`
--
ALTER TABLE `application_form_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
