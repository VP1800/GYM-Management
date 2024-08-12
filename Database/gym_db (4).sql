-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 06:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `color_theme`
--

CREATE TABLE `color_theme` (
  `c_id` int(11) NOT NULL,
  `color_code` varchar(20) NOT NULL,
  `color_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `color_theme`
--

INSERT INTO `color_theme` (`c_id`, `color_code`, `color_name`) VALUES
(1, '#000000', 'Black'),
(2, '#00FF00', 'Neon'),
(3, '#EFF0F1', 'Grey'),
(4, '#FF0000', 'Red'),
(5, '#FFFFFF', 'White');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_master`
--

CREATE TABLE `enquiry_master` (
  `e_id` bigint(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `work` bigint(20) DEFAULT NULL,
  `telephone` bigint(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `alternate_email` varchar(30) NOT NULL,
  `refno1` varchar(30) NOT NULL,
  `refno2` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry_master`
--

INSERT INTO `enquiry_master` (`e_id`, `name`, `gender`, `contact`, `work`, `telephone`, `email`, `alternate_email`, `refno1`, `refno2`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Aditya Deshpande', 'male', 9823491781, 9754798163, 0, 'adityad@gmail.com', '', 'Jayde Herman', '', 'Enquiry', '2023-08-26 12:15:52', '2023-08-26 12:15:52'),
(2, 'Prakash Dongerkerry', 'male', 9899639539, 0, 0, 'prakashd@gmail.com', '', 'Jasper Raichel', '', 'Staff', '2023-08-26 12:16:51', '2023-08-26 12:16:51'),
(3, 'Ramaeshwara Mahant', 'male', 9388107401, 0, 0, 'rama001@gmail.com', '', 'Emmit Beernier', '', 'Enquiry', '2023-08-26 12:17:48', '2023-08-26 12:17:48'),
(4, 'Ayush Mukhtar', 'male', 9790871656, 0, 0, 'ayush_iam@gmail.com', '', 'Lina Rohan', '', 'Enquiry', '2023-08-26 12:18:30', '2023-08-26 12:18:30'),
(5, 'new', 'male', 1234567890, 0, 0, 'asd@gmail.com', '', '1234567890', '', 'Enquiry', '2023-08-27 10:57:05', '2023-08-27 10:57:05'),
(6, 'gara', 'male', 3214567890, 0, 0, 'asd@gmail.com', '', '1234567890', '', 'Enquiry', '2023-08-27 12:34:14', '2023-08-27 12:34:14'),
(7, 'Vidyasagar Patil', 'male', 3214567899, 0, 0, 'asdfgh@gmail.com', '', '1234567890', '', 'Enquiry', '2023-08-28 12:16:27', '2023-08-28 12:16:27'),
(9, 'Vidyasagar Patil', 'male', 9999999999, 0, 0, 'SA@GMAIL.COM', '', '456', '', 'Enquiry', '2023-08-29 06:25:00', '2023-08-29 06:25:00'),
(12, 'Vidya Patil', 'female', 3333333333, 9271566217, 2331569785, 'vid@gmail.com', '', '65g', '', 'Enquiry', '2023-08-29 09:02:02', '2023-08-31 11:51:10'),
(13, 'Tejas bhosale', 'male', 9271566217, 0, 0, 'tejasbhosale032@gamil.com', '', 'fhjfds', '', 'Enquiry', '2022-06-15 10:06:46', '2022-06-15 10:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `expense_ledger`
--

CREATE TABLE `expense_ledger` (
  `date` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_method` varchar(10) NOT NULL,
  `receipt/reference` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

CREATE TABLE `login_master` (
  `id` bigint(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`id`, `username`, `name`, `user_type`, `password`, `created_at`, `updated_at`) VALUES
(1, '9999999999', 'Maria', 'admin', 'Asd@12345', '2023-08-14 05:42:31', '2023-08-14 05:42:31'),
(2, '8888888888', '', 'admin', 'Ad@12345', '2023-08-25 06:06:10', '2023-08-25 06:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `membership_form`
--

CREATE TABLE `membership_form` (
  `m_id` bigint(11) NOT NULL,
  `e_id` bigint(11) NOT NULL,
  `dob` date NOT NULL,
  `is_married` varchar(10) NOT NULL,
  `anniversary_date` date NOT NULL,
  `membership_type` varchar(10) NOT NULL,
  `start_date` date NOT NULL DEFAULT current_timestamp(),
  `expiry_date` date NOT NULL,
  `mode` varchar(10) NOT NULL,
  `reminder_date` date NOT NULL,
  `fees` varchar(10) NOT NULL,
  `amount_paid` double NOT NULL,
  `amount_payable` double NOT NULL,
  `des` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership_form`
--

INSERT INTO `membership_form` (`m_id`, `e_id`, `dob`, `is_married`, `anniversary_date`, `membership_type`, `start_date`, `expiry_date`, `mode`, `reminder_date`, `fees`, `amount_paid`, `amount_payable`, `des`, `created_at`, `updated_at`) VALUES
(1, 9, '2000-10-08', 'unmarried', '0000-00-00', 'Monthly', '2023-09-02', '2023-10-02', 'CASH', '0000-00-00', '5000.00', 5000, 0, 'test', '2023-09-02 06:41:14', '2023-09-04 05:55:05'),
(2, 5, '0000-00-00', 'unmarried', '0000-00-00', 'Quarterly', '2023-09-02', '0000-00-00', 'Card', '0000-00-00', '10000.00', 9000, 1000, 'ww', '2023-09-02 07:03:53', '2023-09-04 07:00:34'),
(3, 4, '0000-00-00', 'married', '0000-00-00', 'Yearly', '2023-09-02', '0000-00-00', 'CASH', '0000-00-00', '25000.00', 7000, 18000, 'ds', '2023-09-02 07:11:19', '2023-09-05 07:18:08'),
(4, 1, '0000-00-00', 'married', '0000-00-00', 'Quarterly', '2023-09-02', '0000-00-00', 'CASH', '0000-00-00', '10000.00', 5000, 5000, 'were', '2023-09-02 07:13:18', '2023-09-02 07:13:18'),
(5, 12, '2000-10-08', 'unmarried', '0000-00-00', 'Quarterly', '2023-09-03', '2023-12-02', 'CASH', '0000-00-00', '10000.00', 5000, 5000, 'hhh', '2023-09-03 05:23:37', '2023-09-03 05:23:37'),
(6, 13, '2000-10-08', 'unmarried', '0000-00-00', 'Monthly', '2023-09-04', '2023-10-04', 'CASH', '0000-00-00', '5000.00', 5000, 0, 'ee', '2023-09-04 05:56:22', '2023-09-04 06:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `m_days`
--

CREATE TABLE `m_days` (
  `d_id` int(11) NOT NULL,
  `membership_type` varchar(10) NOT NULL,
  `days` int(11) NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_days`
--

INSERT INTO `m_days` (`d_id`, `membership_type`, `days`, `fees`) VALUES
(1, 'Monthly', 30, 5000),
(2, 'Quarterly', 90, 10000),
(3, 'Yearly', 365, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `r_id` bigint(20) NOT NULL,
  `e_id` bigint(20) NOT NULL,
  `m_id` bigint(20) NOT NULL,
  `fees` double NOT NULL,
  `amount_paid` double NOT NULL,
  `amount_payable` double NOT NULL,
  `pay_mode` varchar(15) NOT NULL,
  `reminder` date NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`r_id`, `e_id`, `m_id`, `fees`, `amount_paid`, `amount_payable`, `pay_mode`, `reminder`, `description`, `created_at`) VALUES
(1, 7, 1, 25000, 6000, 19000, 'CARD', '0000-00-00', '', '2023-08-29 13:09:07'),
(2, 6, 2, 10000, 7000, 3000, 'CASH', '0000-00-00', 'aer', '2023-08-29 13:10:47'),
(3, 6, 2, 5000, -2000, 0, '', '0000-00-00', '', '2023-08-30 14:29:27'),
(6, 7, 1, 10000, 10000, 19000, 'CASH', '0000-00-00', 'efr', '2023-08-31 05:57:23'),
(7, 7, 1, 10000, 10, 18990, 'CASH', '0000-00-00', 'asd', '2023-08-31 07:21:24'),
(10, 12, 3, 25000, 23000, 2000, 'CARD', '0000-00-00', 'cd', '2023-08-31 07:46:59'),
(11, 12, 3, 10000, -13000, 0, '', '0000-00-00', 'cd', '2023-08-31 07:48:09'),
(12, 12, 3, 5000, -5000, 0, '', '0000-00-00', 'cd', '2023-08-31 09:17:10'),
(13, 3, 4, 5000, 5000, 0, 'CASH', '0000-00-00', 'sd', '2023-07-31 09:18:03'),
(14, 9, 1, 25000, 5000, 20000, 'CASH', '0000-00-00', 'test', '2023-09-02 06:41:14'),
(15, 5, 2, 10000, 5000, 5000, 'CASH', '0000-00-00', 'test', '2023-09-02 07:03:53'),
(16, 4, 3, 25000, 5000, 20000, 'CASH', '0000-00-00', 'dfed', '2023-09-02 07:11:19'),
(17, 1, 4, 10000, 5000, 5000, 'CASH', '0000-00-00', 'were', '2023-09-02 07:13:18'),
(18, 12, 5, 10000, 5000, 5000, 'CASH', '0000-00-00', 'hhh', '2023-09-03 05:23:37'),
(19, 13, 6, 10000, 9999, 1, 'CASH', '0000-00-00', 'ee', '2023-09-04 05:56:22'),
(20, 13, 6, 5000, -4999, 0, '', '0000-00-00', 'ee', '2023-09-04 06:31:25'),
(21, 5, 2, 10000, 2000, 3000, 'UPI', '0000-00-00', 'dfsf', '2023-09-04 06:44:51'),
(22, 5, 2, 10000, 2000, 1000, 'Card', '0000-00-00', 'ww', '2023-09-04 07:00:34'),
(23, 4, 3, 25000, 2000, 18000, 'CASH', '0000-00-00', 'ds', '2023-09-05 07:18:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color_theme`
--
ALTER TABLE `color_theme`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `enquiry_master`
--
ALTER TABLE `enquiry_master`
  ADD PRIMARY KEY (`e_id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `login_master`
--
ALTER TABLE `login_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_form`
--
ALTER TABLE `membership_form`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `m_days`
--
ALTER TABLE `m_days`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `e_id` (`e_id`),
  ADD KEY `m_id` (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color_theme`
--
ALTER TABLE `color_theme`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiry_master`
--
ALTER TABLE `enquiry_master`
  MODIFY `e_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login_master`
--
ALTER TABLE `login_master`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership_form`
--
ALTER TABLE `membership_form`
  MODIFY `m_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_days`
--
ALTER TABLE `m_days`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `r_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `membership_form`
--
ALTER TABLE `membership_form`
  ADD CONSTRAINT `membership_form_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `enquiry_master` (`e_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `membership_form` (`e_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `receipt_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `membership_form` (`m_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
