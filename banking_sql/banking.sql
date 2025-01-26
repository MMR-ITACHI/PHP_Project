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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(20) NOT NULL,
  `updationdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `password`, `updationdate`) VALUES
(1, 'Md Mostafizur Rahman', 'admin@gmail.com', 'admin', '2024-09-13 02:19:27');

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

-- --------------------------------------------------------

--
-- Table structure for table `client_contact`
--

CREATE TABLE `client_contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `catagory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `loan_type` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `loan_length` varchar(50) NOT NULL,
  `interest_rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `loan_type`, `purpose`, `loan_length`, `interest_rate`) VALUES
(1, 'Personal Loan', 'Kind of personal expenses.', '12 to 84 months', 'up to 36% annual % rate'),
(4, 'Debt consolidation loan', 'Combining debts from one loan', 'Sometimes', 'up to 36% APR'),
(5, 'Mortgage', 'To purchase a home', 'Typically 10 to 30 years', 'Typically 10 to 30 years');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `interest` char(50) NOT NULL,
  `application_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `interest`, `application_time`) VALUES
(1, 'Online Money Transfer', '2%', 'Anytime'),
(2, 'Installment or Loan', '5%', 'Anytime'),
(3, 'Electricity Bill', '10 taka', 'Sunday'),
(4, 'Gas bill', '20 taka', 'Monday'),
(6, 'Education Fees', '20 Taka', 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_portfolio`
--

CREATE TABLE `upcoming_portfolio` (
  `id` int(11) NOT NULL,
  `loan_type` varchar(50) NOT NULL,
  `puspose` varchar(100) NOT NULL,
  `loan_length` varchar(50) NOT NULL,
  `interest_rates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_services`
--

CREATE TABLE `upcoming_services` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `charges` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upcoming_services`
--

INSERT INTO `upcoming_services` (`id`, `name`, `charges`, `session`) VALUES
(1, 'Insurance', '1%', 'Anytime'),
(2, 'Microfinance', '1%', 'Anytime'),
(3, 'Toll', '3 Taka', 'Anytime'),
(4, 'Remittance', '5%', 'Anytime'),
(5, 'Water Bill', '1%', 'Anytime'),
(6, 'Government Fees', '1%', 'Anytime'),
(7, 'Land Development Tax', '3%', 'Anytime'),
(9, 'E Porcha (Land)', '1%', 'Anytime');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(20) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `regdate`, `updationdate`) VALUES
(1, 'Md Mostafizur Rahman ABIR', 'abir@gmail.com', 'abir', '2024-09-11 16:21:10', '2024-09-11 16:21:10'),
(2, 'Md Abdullah', 'abdullah@gmail.com', 'abdullah', '2024-09-11 18:26:59', '2024-09-11 18:26:59'),
(3, 'Md Riyad Ahmed', 'riyad@gmail.com', 'riyad', '2024-09-12 12:04:09', '2024-09-12 12:04:09'),
(4, 'Md Rahim', 'rahim@gmail.com', 'rahim', '2024-09-12 15:14:59', '2024-09-12 15:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `mobile_no` varchar(17) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone_no` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `national_id` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `nominee_name` varchar(50) NOT NULL,
  `account_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_form_info`
--
ALTER TABLE `application_form_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_contact`
--
ALTER TABLE `client_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_portfolio`
--
ALTER TABLE `upcoming_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_services`
--
ALTER TABLE `upcoming_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application_form_info`
--
ALTER TABLE `application_form_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_contact`
--
ALTER TABLE `client_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upcoming_portfolio`
--
ALTER TABLE `upcoming_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upcoming_services`
--
ALTER TABLE `upcoming_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
