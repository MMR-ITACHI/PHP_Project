-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 06:49 PM
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
-- Database: `banking1`
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
  `gender` varchar(20) NOT NULL,
  `mobile_no` varchar(17) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone_no` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `client_id` varchar(30) NOT NULL,
  `citizen_number` varchar(30) NOT NULL,
  `address` varchar(300) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `post_code` varchar(50) NOT NULL,
  `area` varchar(100) NOT NULL,
  `nominee` varchar(50) NOT NULL,
  `nominee_number` varchar(17) NOT NULL,
  `account_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application_form_info`
--

INSERT INTO `application_form_info` (`id`, `name`, `gender`, `mobile_no`, `email`, `telephone_no`, `dob`, `client_id`, `citizen_number`, `address`, `country`, `state`, `city`, `post_code`, `area`, `nominee`, `nominee_number`, `account_type`) VALUES
(1, 'M.M.R Aabir', 'Male', '01971324922', 'abir@gmail.com', '01971324923', '1997-11-11', 'M-1001', '1110167675', 'South Rajashon', 'BD', 'Dhaka', 'Savar', '1340', 'South Rajashon', 'Md Sanbir', '1282917', 'Saving'),
(3, 'Md Riyad Ahmed', 'Male', '01736815328', 'riyad@gmail.com', '01736815328', '2024-09-01', 'M-1003', '1110167675', 'South Rajashon', 'BD', 'Dhaka', 'Savar', '1340', 'South Rajashon', 'Md Ashfak', '1282909', 'Fixed'),
(4, 'Md Rahim Ahmed', 'Male', '01638149965', 'rahim@gmail.com', '01971324922', '2014-05-06', 'M-1004', '1110167685', 'South Rajashon', 'BD', 'Dhaka', 'Savar', '1340', 'South Rajashon', 'Md Babu', '123456', 'Fixed'),
(7, 'Md Sanbir Hoosain', 'Male', '01736815328', 'sanbir@gmail.com', '01971324923', '2024-09-02', 'M-1006', '1110167685', 'South Rajashon', 'BD', 'Dhaka', 'Savar', '1340', 'South Rajashon', 'Md Babu', '1282909', 'Saving'),
(8, 'Md Mahmud Hasan', 'Male', '01638149988', 'ms@gmail.com', '01736815328', '2024-09-01', 'M-1008', '1110167685', 'South Rajashon', 'BD', 'Barishal', 'Savar', '1340', 'South Rajashon', 'Md S', '125468', 'Saving'),
(10, 'Md Mahmud Hasan', 'Male', '01638149988', 'riya@gmail.com', '01736815328', '2024-09-02', 'Client_ID', '1110167685', 'South Rajashon', 'BD', 'Barishal', 'Savar', '1340', 'South Rajashon', 'Md S', '125468', 'Saving'),
(11, 'Md Habib Rahman', 'Male', '01638149988', 'habib@gmail.com', '01736815328', '2024-09-01', 'M-1010', '1110167685', 'South Rajashon', 'BD', 'Barishal', 'Savar', '1340', 'South Rajashon', 'Md Shahin', '125468', 'Saving'),
(12, 'Md Tanim', 'Male', '01638149988', 'tanim@gmail.com', '01736815328', '2024-09-03', 'M-1015', '1110167685', 'South Rajashon', 'BD', 'Barishal', 'Savar', '1340', 'South Rajashon', 'Md Shahin', '125468', 'Saving'),
(13, 'Md Nasir', 'Male', '01638149988', 'nasir@gmail.com', '01736815328', '2024-09-03', 'M-1018', '1110167685', 'South Rajashon', 'BD', 'Barishal', 'Savar', '1340', 'South Rajashon', 'Md Shahin', '125468', 'Saving'),
(14, 'Md Afif Ahmed', 'Male', '01638149988', 'afif@gmail.com', '01736815328', '2024-09-03', 'M-1095', '1110167685', 'South Rajashon', 'BD', 'Barishal', 'Savar', '1340', 'South Rajashon', 'Md Shahin', '125468', 'Saving'),
(15, 'Md Abdullah', 'Male', '01971324922', 'abdullah@gmail.com', '01736815328', '1998-05-04', 'M-1111', '1110167685', 'JahangirGate,Shyamoli', 'BD', 'Dhaka', 'Savar', '1340', 'South Rajashon', 'Md Ashfak', '1282909', 'Saving'),
(16, 'Md Ahnaf Ar Rahman', 'Male', '01971324922', 'ahnaf@gmail.com', '01736815328', '2003-10-06', 'M-1245', '1110167685', 'JahangirGate,Shyamoli', 'BD', 'Dhaka', 'Savar', '1340', 'South Rajashon', 'Md Ashfak', '1282909', 'Saving'),
(17, 'Md Abid Hassan', 'Male', '01754895213', 'abid@gmail.com', '0966012454', '2007-06-05', 'M-1234', '1110167685', '60 feet,Mirpur', 'BD', 'Dhaka', 'Dhaka', '1340', 'South Rajashon', 'Muniya', '1282909', 'Current'),
(18, 'Mrs Hayata Rahman', 'Female', '01736815328', 'hayata@gmail.com', '01736815328', '2005-11-23', 'F-01', '1110167685', 'Jaflong,sylhet', 'BD', 'Sylhet', 'jaflong', '1340', 'jaflong', 'abir', '1282909', 'Saving');

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

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `catagory`) VALUES
(1, 'Square', 'Khilkhet,Dhaka', 'Multinational Company'),
(2, 'Airbnb', 'Nilkhet,Dhaka', 'Job Portal'),
(3, 'Evernote', 'Shyamoli,Dhaka', 'Pharmacy'),
(4, 'Pinterest', 'Korea,South Korea', 'Multinational Company');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_apply`
--

CREATE TABLE `loan_apply` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` varchar(19) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `interest_tk` varchar(100) NOT NULL,
  `installment` varchar(100) NOT NULL,
  `total_loan` varchar(100) NOT NULL,
  `client_id` varchar(10) NOT NULL,
  `citizenship` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL,
  `area` varchar(200) NOT NULL,
  `account_type` varchar(30) NOT NULL,
  `loan_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_apply`
--

INSERT INTO `loan_apply` (`id`, `name`, `mobile_no`, `email`, `amount`, `interest_tk`, `installment`, `total_loan`, `client_id`, `citizenship`, `status`, `area`, `account_type`, `loan_type`) VALUES
(7, 'Sanbir', '01736815328', 'sanbir@gmail.com', '500000', '50000', '55000', '550000', 'M-1006', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Personal Loan'),
(9, 'Mostafizur Rahman', '01736815328', 'abir@gmail.com', '700000', '70000', '75000', '770000', 'M-1001', '1110167675', 'Approve', 'South Rajashon', 'Fixed', 'Credit Builder Loan'),
(11, 'Md Mahmud Hasan', '01736815328', 'ms@gmail.com', '500000', '50000', '55000', '550000', 'M-1008', '1110167685', 'Approve', 'South Rajashon', 'Saving', 'Small Business Loan'),
(13, 'Md Habibur Rahman', '01736815328', 'habib@gmail.com', '500000', '50000', '55000', '550000', 'M-1008', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Personal Loan'),
(15, 'Md Tanim', '01736815328', 'tanim@gmail.com', '500000', '50000', '55000', '550000', 'M-1008', '1110167685', 'Approve', 'South Rajashon', 'Saving', 'Personal Loan'),
(17, 'Md Nasir', '01736815328', 'nasir@gmail.com', '500000', '50000', '55000', '550000', 'M-1018', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Auto Loan'),
(20, 'Md Afif Ahmed', '01736815328', 'afif@gmail.com', '500000', '50000', '55000', '550000', 'M-1095', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Credit Builder Loan'),
(22, 'Md Rahim Ahmed', '01638149965', 'rahim@gmail.com', '500000', '50000', '55000', '550000', 'M-1004', '1110167685', 'Approve', 'South Rajashon', 'Fixed', 'Personal Loan'),
(24, 'Md Abdullah', '01971324922', 'abdullah@gmail.com', '500000', '50000', '55000', '550000', 'M-1111', '1110167685', 'Approve', 'JahangirGate,Shyamoli', 'Saving', 'Personal Loan'),
(26, 'Md Ahnaf Ar Rahman', '01971324922', 'ahnaf@gmail.com', '700000', '70000', '75000', '770000', 'M-1245', '1110167685', 'Approve', 'JahangirGate,Shyamoli', 'Saving', 'Credit Builder Loan'),
(32, 'Md Abid Hassan', '01754895213', 'abid@gmail.com', '1000000', '100000', '110000', '1100000', 'M-1234', '1110167685', 'Approve', '60 feet,Mirpur', 'Current', 'Auto Loan'),
(34, 'Mrs Hayata Rahman', '01736815328', 'hayata@gmail.com', '500000', '50000', '55000', '550000', 'F-01', '1110167685', 'Approve', 'Jaflong,sylhet', 'Saving', 'Student Loan');

--
-- Triggers `loan_apply`
--
DELIMITER $$
CREATE TRIGGER `loan_confirmation` AFTER INSERT ON `loan_apply` FOR EACH ROW INSERT INTO loan_form_info VALUES(
NULL, new.name,new.mobile_no,new.email,new.amount,new.client_id,
    new.citizenship,new.status,new.area,new.account_type,new.loan_type
)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `loan_confirmations` AFTER INSERT ON `loan_apply` FOR EACH ROW INSERT INTO loan_form_info VALUES(
NULL, new.name,new.mobile_no,new.email,new.amount,new.client_id,
    new.citizenship,new.status,new.area,new.account_type,
    new.loan_type)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `loan_form_info`
--

CREATE TABLE `loan_form_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` varchar(19) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `client_id` varchar(10) NOT NULL,
  `citizenship` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL,
  `area` varchar(200) NOT NULL,
  `account_type` varchar(30) NOT NULL,
  `loan_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_form_info`
--

INSERT INTO `loan_form_info` (`id`, `name`, `mobile_no`, `email`, `amount`, `client_id`, `citizenship`, `status`, `area`, `account_type`, `loan_type`) VALUES
(16, 'Sanbir', '01736815328', 'sanbir@gmail.com', '500000', 'M-1006', '1110167685', '', 'South Rajashon', 'Current', 'Personal Loan'),
(17, 'Sanbir', '01736815328', 'sanbir@gmail.com', '500000', 'M-1006', '1110167685', '', 'South Rajashon', 'Current', 'Personal Loan'),
(18, 'Sanbir', '01736815328', 'sanbir@gmail.com', '500000', 'M-1006', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Personal Loan'),
(19, 'Sanbir', '01736815328', 'sanbir@gmail.com', '500000', 'M-1006', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Personal Loan'),
(20, 'Mostafizur Rahman', '01736815328', 'abirm6133@gmail.com', '700000', 'M-1001', '1110167675', '', 'South Rajashon', 'Fixed', 'Credit Builder Loan'),
(21, 'Mostafizur Rahman', '01736815328', 'abirm6133@gmail.com', '700000', 'M-1001', '1110167675', '', 'South Rajashon', 'Fixed', 'Credit Builder Loan'),
(22, 'Mostafizur Rahman', '01736815328', 'abirm6133@gmail.com', '700000', 'M-1001', '1110167675', 'Approve', 'South Rajashon', 'Fixed', 'Credit Builder Loan'),
(23, 'Mostafizur Rahman', '01736815328', 'abirm6133@gmail.com', '700000', 'M-1001', '1110167675', 'Approve', 'South Rajashon', 'Fixed', 'Credit Builder Loan'),
(24, 'Md Mahmud Hasan', '01736815328', 'ms@gmail.com', '500000', 'M-1008', '1110167685', '', 'South Rajashon', 'Saving', 'Small Business Loan'),
(25, 'Md Mahmud Hasan', '01736815328', 'ms@gmail.com', '500000', 'M-1008', '1110167685', '', 'South Rajashon', 'Saving', 'Small Business Loan'),
(26, 'Md Mahmud Hasan', '01736815328', 'ms@gmail.com', '500000', 'M-1008', '1110167685', 'Approve', 'South Rajashon', 'Saving', 'Small Business Loan'),
(27, 'Md Mahmud Hasan', '01736815328', 'ms@gmail.com', '500000', 'M-1008', '1110167685', 'Approve', 'South Rajashon', 'Saving', 'Small Business Loan'),
(28, 'Md Habibur Rahman', '01736815328', 'habib@gmail.com', '500000', 'M-1008', '1110167685', '', 'South Rajashon', 'Current', 'Personal Loan'),
(29, 'Md Habibur Rahman', '01736815328', 'habib@gmail.com', '500000', 'M-1008', '1110167685', '', 'South Rajashon', 'Current', 'Personal Loan'),
(30, 'Md Habibur Rahman', '01736815328', 'habib@gmail.com', '500000', 'M-1008', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Personal Loan'),
(31, 'Md Habibur Rahman', '01736815328', 'habib@gmail.com', '500000', 'M-1008', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Personal Loan'),
(32, 'Md Tanim', '01736815328', 'tanim@gmail.com', '500000', 'M-1008', '1110167685', '', 'South Rajashon', 'Saving', 'Personal Loan'),
(33, 'Md Tanim', '01736815328', 'tanim@gmail.com', '500000', 'M-1008', '1110167685', '', 'South Rajashon', 'Saving', 'Personal Loan'),
(34, 'Md Tanim', '01736815328', 'tanim@gmail.com', '500000', 'M-1008', '1110167685', 'Approve', 'South Rajashon', 'Saving', 'Personal Loan'),
(35, 'Md Tanim', '01736815328', 'tanim@gmail.com', '500000', 'M-1008', '1110167685', 'Approve', 'South Rajashon', 'Saving', 'Personal Loan'),
(36, 'Md Nasir', '01736815328', 'nasir@gmail.com', '500000', 'M-1018', '1110167685', '', 'South Rajashon', 'Current', 'Auto Loan'),
(37, 'Md Nasir', '01736815328', 'nasir@gmail.com', '500000', 'M-1018', '1110167685', '', 'South Rajashon', 'Current', 'Auto Loan'),
(38, 'Md Nasir', '01736815328', 'nasir@gmail.com', '500000', 'M-1018', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Auto Loan'),
(39, 'Md Nasir', '01736815328', 'nasir@gmail.com', '500000', 'M-1018', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Auto Loan'),
(40, 'Md Afif Ahmed', '01736815328', 'afif@gmail.com', '500000', 'M-1095', '1110167685', '', 'South Rajashon', 'Current', 'Credit Builder Loan'),
(41, 'Md Afif Ahmed', '01736815328', 'afif@gmail.com', '500000', 'M-1095', '1110167685', '', 'South Rajashon', 'Current', 'Credit Builder Loan'),
(42, 'Md Afif Ahmed', '01736815328', 'afif@gmail.com', '500000', 'M-1095', '1110167685', '', 'South Rajashon', 'Current', 'Credit Builder Loan'),
(43, 'Md Afif Ahmed', '01736815328', 'afif@gmail.com', '500000', 'M-1095', '1110167685', '', 'South Rajashon', 'Current', 'Credit Builder Loan'),
(44, 'Md Afif Ahmed', '01736815328', 'afif@gmail.com', '500000', 'M-1095', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Credit Builder Loan'),
(45, 'Md Afif Ahmed', '01736815328', 'afif@gmail.com', '500000', 'M-1095', '1110167685', 'Approve', 'South Rajashon', 'Current', 'Credit Builder Loan'),
(46, 'Md Rahim Ahmed', '01638149965', 'rahim@gmail.com', '500000', 'M-1004', '1110167685', 'pending status', 'South Rajashon', 'Fixed', 'Personal Loan'),
(47, 'Md Rahim Ahmed', '01638149965', 'rahim@gmail.com', '500000', 'M-1004', '1110167685', 'pending status', 'South Rajashon', 'Fixed', 'Personal Loan'),
(48, 'Md Rahim Ahmed', '01638149965', 'rahim@gmail.com', '500000', 'M-1004', '1110167685', 'Approve', 'South Rajashon', 'Fixed', 'Personal Loan'),
(49, 'Md Rahim Ahmed', '01638149965', 'rahim@gmail.com', '500000', 'M-1004', '1110167685', 'Approve', 'South Rajashon', 'Fixed', 'Personal Loan'),
(50, 'Md Abdullah', '01971324922', 'abdullah@gmail.com', '500000', 'M-1111', '1110167685', 'pending status', 'JahangirGate,Shyamoli', 'Saving', 'Personal Loan'),
(51, 'Md Abdullah', '01971324922', 'abdullah@gmail.com', '500000', 'M-1111', '1110167685', 'pending status', 'JahangirGate,Shyamoli', 'Saving', 'Personal Loan'),
(52, 'Md Abdullah', '01971324922', 'abdullah@gmail.com', '500000', 'M-1111', '1110167685', 'Approve', 'JahangirGate,Shyamoli', 'Saving', 'Personal Loan'),
(53, 'Md Abdullah', '01971324922', 'abdullah@gmail.com', '500000', 'M-1111', '1110167685', 'Approve', 'JahangirGate,Shyamoli', 'Saving', 'Personal Loan'),
(54, 'Md Ahnaf Ar Rahman', '01971324922', 'ahnaf@gmail.com', '700000', 'M-1245', '1110167685', 'pending status', 'JahangirGate,Shyamoli', 'Saving', 'Credit Builder Loan'),
(55, 'Md Ahnaf Ar Rahman', '01971324922', 'ahnaf@gmail.com', '700000', 'M-1245', '1110167685', 'pending status', 'JahangirGate,Shyamoli', 'Saving', 'Credit Builder Loan'),
(56, 'Md Ahnaf Ar Rahman', '01971324922', 'ahnaf@gmail.com', '700000', 'M-1245', '1110167685', 'Approve', 'JahangirGate,Shyamoli', 'Saving', 'Credit Builder Loan'),
(57, 'Md Ahnaf Ar Rahman', '01971324922', 'ahnaf@gmail.com', '700000', 'M-1245', '1110167685', 'Approve', 'JahangirGate,Shyamoli', 'Saving', 'Credit Builder Loan'),
(58, 'M.M.R Aabir', '01971324922', 'abir@gmail.com', '600000', 'M-1001', '1110167675', 'pending status', 'South Rajashon', 'Saving', 'Mortgage'),
(59, 'M.M.R Aabir', '01971324922', 'abir@gmail.com', '600000', 'M-1001', '1110167675', 'pending status', 'South Rajashon', 'Saving', 'Mortgage'),
(60, 'M.M.R Aabir', '01971324922', 'abir@gmail.com', '600000', 'M-1001', '1110167675', 'pending status', 'South Rajashon', 'Saving', 'Personal Loan'),
(61, 'M.M.R Aabir', '01971324922', 'abir@gmail.com', '600000', 'M-1001', '1110167675', 'pending status', 'South Rajashon', 'Saving', 'Personal Loan'),
(62, 'M.M.R Aabir', '01971324922', 'abir@gmail.com', '600000', 'M-1001', '1110167675', 'Approve', 'South Rajashon', 'Saving', 'Personal Loan'),
(63, 'M.M.R Aabir', '01971324922', 'abir@gmail.com', '600000', 'M-1001', '1110167675', 'Approve', 'South Rajashon', 'Saving', 'Personal Loan'),
(64, 'Md Abid Hassan', '01754895213', 'abid@gmail.com', '1000000', 'M-1234', '1110167685', 'pending status', '60 feet,Mirpur', 'Current', 'Auto Loan'),
(65, 'Md Abid Hassan', '01754895213', 'abid@gmail.com', '1000000', 'M-1234', '1110167685', 'pending status', '60 feet,Mirpur', 'Current', 'Auto Loan'),
(66, 'Md Abid Hassan', '01754895213', 'abid@gmail.com', '1000000', 'M-1234', '1110167685', '', '60 feet,Mirpur', 'Current', 'Auto Loan'),
(67, 'Md Abid Hassan', '01754895213', 'abid@gmail.com', '1000000', 'M-1234', '1110167685', '', '60 feet,Mirpur', 'Current', 'Auto Loan'),
(68, 'Md Abid Hassan', '01754895213', 'abid@gmail.com', '1000000', 'M-1234', '1110167685', 'Approve', '60 feet,Mirpur', 'Current', 'Auto Loan'),
(69, 'Md Abid Hassan', '01754895213', 'abid@gmail.com', '1000000', 'M-1234', '1110167685', 'Approve', '60 feet,Mirpur', 'Current', 'Auto Loan'),
(70, 'Mrs Hayata Rahman', '01736815328', 'hayata@gmail.com', '500000', 'F-01', '1110167685', 'pending status', 'Jaflong,sylhet', 'Saving', 'Student Loan'),
(71, 'Mrs Hayata Rahman', '01736815328', 'hayata@gmail.com', '500000', 'F-01', '1110167685', 'pending status', 'Jaflong,sylhet', 'Saving', 'Student Loan'),
(72, 'Mrs Hayata Rahman', '01736815328', 'hayata@gmail.com', '500000', 'F-01', '1110167685', 'Approve', 'Jaflong,sylhet', 'Saving', 'Student Loan'),
(73, 'Mrs Hayata Rahman', '01736815328', 'hayata@gmail.com', '500000', 'F-01', '1110167685', 'Approve', 'Jaflong,sylhet', 'Saving', 'Student Loan');

-- --------------------------------------------------------

--
-- Table structure for table `loan_name`
--

CREATE TABLE `loan_name` (
  `id` int(11) NOT NULL,
  `loan_name` varchar(50) NOT NULL,
  `loan_length` varchar(50) NOT NULL,
  `interest` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_name`
--

INSERT INTO `loan_name` (`id`, `loan_name`, `loan_length`, `interest`) VALUES
(1, 'Personal Loan', '12 to 84 months', 'up to 36% annual % rate'),
(2, 'Debt consolidation loan', '12 to 84 months', 'up to 36% APR'),
(3, 'Mortgage', 'Typically 10 to 30 years', '7.99% APR'),
(4, 'Home equity loan', '5 to 30 years', '7.99% APR'),
(5, 'Student Loan', '10 Years', 'Starting at 4.24%'),
(6, 'Auto Loan', '12 to 84 month', 'Starting at 4.50% APR'),
(7, 'Small Business Loan', 'Up to 300 Months', 'Starting at 3%'),
(8, 'Credit Builder Loan', '24 Months', 'Starting about 5% APR');

-- --------------------------------------------------------

--
-- Table structure for table `online_payment`
--

CREATE TABLE `online_payment` (
  `id` int(11) NOT NULL,
  `client_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `installment_number` varchar(15) NOT NULL,
  `loan` varchar(100) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `total_loan` varchar(100) NOT NULL,
  `installment` varchar(100) NOT NULL,
  `medium` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_payment`
--

INSERT INTO `online_payment` (`id`, `client_id`, `name`, `gmail`, `date`, `installment_number`, `loan`, `interest`, `total_loan`, `installment`, `medium`, `transaction_id`) VALUES
(4, ' M-1001 ', ' M.M.R Aabir ', 'abir@gmail.com ', '2024-09-17', '3', '', '', '', ' 45000', 'Bkash', 'ab01'),
(5, ' M-1001 ', ' M.M.R Aabir ', ' abir@gmail.com ', '2024-09-30', '4', '', '', '', ' 45000', 'Rocket', 'ab02'),
(6, ' M-1004 ', ' Md Rahim Ahmed ', 'rahim@gmail.com ', '2024-10-01', '1', '', '', '', '55000', 'Nagad', 'ab088'),
(7, ' M-1004 ', ' Md Rahim Ahmed ', 'rahim@gmail.com ', '2024-10-01', '2', '', '', '', '55000', 'Rocket', 'ab089'),
(12, ' M-1004 ', ' Md Rahim Ahmed ', 'rahim@gmail.com ', '2024-09-30', '3', '', '', '', ' 55000', 'Bkash', 'ab090'),
(14, ' M-1004 ', ' Md Rahim Ahmed ', 'rahim@gmail.com', '2024-10-01', '4', '', '', '', ' 55000', 'Rocket', 'gf55'),
(15, ' M-1111 ', ' Md Abdullah ', 'abdullah@gmail.com', '2024-10-02', '1', '', '', '', '55000', 'Nagad', 'ab088'),
(16, ' M-1111 ', ' Md Abdullah ', 'abdullah@gmail.com', '2024-10-02', '2', '', '', '', ' 55000', 'Bkash', 'ab100'),
(17, ' M-1245 ', ' Md Ahnaf Ar Rahman ', 'ahnaf@gmail.com', '2024-10-02', '1', '', '', '', '75000', 'Bkash', 'ab089'),
(18, ' M-1245 ', ' Md Ahnaf Ar Rahman ', 'ahnaf@gmail.com', '2024-10-04', '2', '', '', '', ' 75000', 'Nagad', 'ab089'),
(38, ' M-1234 ', ' Md Abid Hassan ', 'abid@gmail.com', '2024-10-03', '1', '1000000', '100000', '1100000', '110000', 'Bkash', 'ab08800'),
(39, ' M-1234 ', ' Md Abid Hassan ', 'abid@gmail.com', '2024-10-11', '2', '1000000', '100000', '1100000', '110000', 'Rocket', 'ab08877'),
(40, ' F-01 ', ' Mrs Hayata Rahman ', 'hayata@gmail.com', '2024-10-04', '1', '500000', '50000', '550000', '55000', 'Bkash', 'f001'),
(41, ' F-01 ', ' Mrs Hayata Rahman ', 'hayata@gmail.com', '2024-10-05', '2', '500000', '50000', '550000', '55000', 'Nagad', 'f002');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `loan_type` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `loan_length` varchar(50) NOT NULL,
  `interest_rate` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `loan_type`, `purpose`, `loan_length`, `interest_rate`, `photo`) VALUES
(1, 'Personal Loan', 'Kind of personal expenses.', '12 to 84 months', 'up to 36% annual % rate', 'Admin/image/person.jpg'),
(4, 'Debt consolidation loan', 'Combining debts from one loan', '12 to 84 months', 'up to 36% APR', 'Admin/image/loan.png'),
(5, 'Mortgage', 'To purchase a home', 'Typically 10 to 30 years', '7.99% APR', 'Admin/image/ee.png');

-- --------------------------------------------------------

--
-- Table structure for table `service1`
--

CREATE TABLE `service1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service1`
--

INSERT INTO `service1` (`id`, `name`, `photo`) VALUES
(1, 'E-Mutation', 'Admin/image/p88.jpg'),
(2, 'DNCC  Holding Tax', 'Admin/image/p44.png'),
(3, 'Pourashova Tax', 'Admin/image/p77.jpg'),
(4, 'Palli Bidyut(Prepaid)', 'Admin/image/p99.jpg'),
(5, 'Palli Bidyut(Postpaid)', 'Admin/image/p100.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `interest` char(50) NOT NULL,
  `application_time` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `interest`, `application_time`, `photo`) VALUES
(1, 'Online Money Transfer', '2%', 'Anytime', 'Admin/image/p1.png'),
(3, 'Electricity Bill', '10 taka', 'Sunday', 'Admin/image/p23.jpg'),
(4, 'Gas bill', '20 taka', 'Monday', 'Admin/image/p4.png'),
(6, 'Education Fees', '20 Taka', 'Wednesday', 'Admin/image/p61.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_table`
--

CREATE TABLE `transaction_table` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `installment_no` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `loan` varchar(20) NOT NULL,
  `interest` varchar(20) NOT NULL,
  `total_loan` varchar(20) NOT NULL,
  `per_installment` varchar(20) NOT NULL,
  `rest_of_money` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_table`
--

INSERT INTO `transaction_table` (`id`, `name`, `email`, `installment_no`, `date`, `loan`, `interest`, `total_loan`, `per_installment`, `rest_of_money`) VALUES
(4, 'Md Sanbir', 'sanbir@gmail.com', '1', '2024-09-04', '500000', '50000', '550000', '15000', '535000'),
(5, 'Md Abir', 'abir@gmail.com', '1', '2024-09-01', '700000', '70000', '770000', '45000', '725000'),
(6, 'Md Abir', 'abir@gmail.com', '2', '2024-08-07', '700000', '70000', '770000', '45000', '680000'),
(7, 'Md Mahmud Hasan', 'ms@gmail.com', '1', '2024-09-23', '500000', '50000', '550000', '55000', '495000'),
(8, 'Md Habib ', 'habib@gmail.com', '1', '2024-09-02', '500000', '50000', '550000', '55000', '495000'),
(9, 'Md Tanim', 'tanim@gmail.com', '1', '2024-09-23', '500000', '50000', '550000', '55000', '495000'),
(10, 'Md Tanim', 'tanim@gmail.com', '2', '2024-09-19', '500000', '50000', '550000', '55000', '440000'),
(11, 'Md Nasir', 'nasir@gmail.com', '1', '2024-09-04', '500000', '50000', '550000', '55000', '445000'),
(12, 'Md Afif Ahmed', 'afif@gmail.com', '1', '2024-09-02', '500000', '50000', '550000', '55000', '445000'),
(13, 'Md Abir', 'abir@gmail.com ', '3', '2024-09-17', '700000', '70000', '770000', ' 45000', '635000'),
(14, ' M.M.R Aabir ', 'abir@gmail.com ', '4', '2024-09-30', '700000', '70000', '770000', ' 45000', '590000'),
(15, ' Md Rahim Ahmed ', 'rahim@gmail.com ', '1', '2024-10-01', '500000', '50000', '550000', '55000', '495000'),
(16, ' Md Rahim Ahmed ', 'rahim@gmail.com ', '2', '2024-10-01', '500000', '50000', '550000', '55000', '440000'),
(17, ' Md Rahim Ahmed ', 'rahim@gmail.com ', '3', '2024-09-30', '500000', '50000', '550000', ' 55000', '395000'),
(18, ' Md Abdullah ', 'abdullah@gmail.com', '1', '2024-10-02', '500000', '50000', '550000', '55000', '495000'),
(19, ' Md Abdullah ', 'abdullah@gmail.com', '2', '2024-10-02', '500000', '50000', '550000', ' 55000', '440000'),
(20, ' Md Ahnaf Ar Rahman ', 'ahnaf@gmail.com', '1', '2024-10-02', '500000', '50000', '550000', '75000', '475000'),
(21, ' Md Abid Hassan ', 'abid@gmail.com', '1', '2024-10-03', '1000000', '100000', '1100000', '110000', '990000'),
(22, ' Md Abid Hassan ', 'abid@gmail.com', '2', '2024-10-11', '1000000', '100000', '1100000', '110000', '880000'),
(23, ' Mrs Hayata Rahman ', 'hayata@gmail.com', '1', '2024-10-04', '500000', '50000', '550000', '55000', '495000'),
(24, ' Mrs Hayata Rahman ', 'hayata@gmail.com', '2', '2024-10-05', '500000', '50000', '550000', '55000', '440000');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_portfolio`
--

CREATE TABLE `upcoming_portfolio` (
  `id` int(11) NOT NULL,
  `loan_type` varchar(50) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `loan_length` varchar(50) NOT NULL,
  `interest_rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upcoming_portfolio`
--

INSERT INTO `upcoming_portfolio` (`id`, `loan_type`, `purpose`, `loan_length`, `interest_rate`) VALUES
(1, 'Student Loan', 'To pay for Education', '10 Years', 'Starting at 4.24%'),
(2, 'Auto Loan', 'To finance a Vehicle', '12 to 84 month', 'Starting at 4.50% APR'),
(3, 'Small Business Loan', 'To fund your Business Expenses', 'Up to 300 Months', 'Starting at 3%'),
(4, 'Credit Builder Loan', 'To improve Your Credit Score', '24 Months', 'Starting about 5% APR');

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
(4, 'Md Rahim', 'rahim@gmail.com', 'rahim', '2024-09-12 15:14:59', '2024-09-12 15:14:59'),
(5, 'Md Sanbir Hasan', 'sanbir@gmail.com', 'sanbir', '2024-09-18 17:31:03', '2024-09-18 17:31:03'),
(6, 'MD Mahmud Hassan', 'ms@gmail.com', 'ms', '2024-09-23 03:20:11', '2024-09-23 03:20:11'),
(12, 'Md Ahnaf Ar Rahman', 'ahnaf@gmail.com', 'ahnaf', '2024-10-01 19:00:53', '2024-10-01 19:00:53'),
(13, 'Md Abid Hassan', 'abid@gmail.com', 'abid', '2024-10-03 18:48:13', '2024-10-03 18:48:13'),
(14, 'Mrs Hayata Rahman', 'hayata@gmail.com', 'hayata', '2024-10-04 08:34:22', '2024-10-04 08:34:22');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_apply`
--
ALTER TABLE `loan_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_form_info`
--
ALTER TABLE `loan_form_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_name`
--
ALTER TABLE `loan_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_payment`
--
ALTER TABLE `online_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service1`
--
ALTER TABLE `service1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_table`
--
ALTER TABLE `transaction_table`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `client_contact`
--
ALTER TABLE `client_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_apply`
--
ALTER TABLE `loan_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `loan_form_info`
--
ALTER TABLE `loan_form_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `loan_name`
--
ALTER TABLE `loan_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `online_payment`
--
ALTER TABLE `online_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service1`
--
ALTER TABLE `service1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction_table`
--
ALTER TABLE `transaction_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `upcoming_portfolio`
--
ALTER TABLE `upcoming_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upcoming_services`
--
ALTER TABLE `upcoming_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
