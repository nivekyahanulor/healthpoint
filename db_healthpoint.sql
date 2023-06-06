-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 09:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_healthpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `is_appointments`
--

CREATE TABLE `is_appointments` (
  `appointment_id` int(12) NOT NULL,
  `patient_id` int(12) NOT NULL,
  `doctors_id` int(12) NOT NULL,
  `appointment_time` varchar(100) NOT NULL,
  `appointment_date` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `consultation` text NOT NULL,
  `diagnosis` text NOT NULL,
  `treatment` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `is_appointments`
--

INSERT INTO `is_appointments` (`appointment_id`, `patient_id`, `doctors_id`, `appointment_time`, `appointment_date`, `status`, `consultation`, `diagnosis`, `treatment`, `date_added`) VALUES
(1, 1, 1, '09:40', '2023-06-07', 1, 'test', 'test', 'test', '2023-06-06 09:40:13'),
(2, 1, 1, '02:11', '2023-06-14', 1, 'test', 'test', 'test', '2023-06-06 14:11:10'),
(3, 1, 1, '14:13', '2023-07-01', 2, 'asdasd', 'asda', 'asdasd', '2023-06-06 14:11:32'),
(4, 1, 1, '02:13', '2023-06-08', 1, '', '', '', '2023-06-07 02:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `is_doctors`
--

CREATE TABLE `is_doctors` (
  `doctor_id` int(12) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(36) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `is_doctors`
--

INSERT INTO `is_doctors` (`doctor_id`, `firstname`, `lastname`, `address`, `contact`, `email`, `username`, `password`, `is_active`, `date_added`) VALUES
(1, 'jeff', 'Bordeos', '', '+35511111111', 'jeffrybordeos@gmail.com', 'test123', 'test123', 1, '2023-06-05 16:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `is_patients`
--

CREATE TABLE `is_patients` (
  `patient_id` int(12) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(36) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bp` text NOT NULL,
  `glucose` text NOT NULL,
  `heartrate` text NOT NULL,
  `cholesterol` text NOT NULL,
  `symptoms` text NOT NULL,
  `i_company` text NOT NULL,
  `i_number` text NOT NULL,
  `i_amount` text NOT NULL,
  `i_expiry` text NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `is_patients`
--

INSERT INTO `is_patients` (`patient_id`, `firstname`, `lastname`, `address`, `contact`, `email`, `username`, `password`, `bp`, `glucose`, `heartrate`, `cholesterol`, `symptoms`, `i_company`, `i_number`, `i_amount`, `i_expiry`, `is_active`, `date_added`) VALUES
(1, 'Jeffry12', 'Bordeos', '', '9357396286', 'jeffrybordeos123@gmail.com', 'kevinjayroluna', 'kevinjayroluna', '1', '1', '1', '1', '1', '1', '1', '1', '2023-06-06', 1, '2023-06-06 04:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `is_users`
--

CREATE TABLE `is_users` (
  `user_id` int(12) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `is_users`
--

INSERT INTO `is_users` (`user_id`, `firstname`, `lastname`, `username`, `password`, `date_added`) VALUES
(14, 'health', 'point', 'admin123', 'admin123', '2023-05-30 17:21:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `is_appointments`
--
ALTER TABLE `is_appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `is_doctors`
--
ALTER TABLE `is_doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `is_patients`
--
ALTER TABLE `is_patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `is_users`
--
ALTER TABLE `is_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `is_appointments`
--
ALTER TABLE `is_appointments`
  MODIFY `appointment_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `is_doctors`
--
ALTER TABLE `is_doctors`
  MODIFY `doctor_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `is_patients`
--
ALTER TABLE `is_patients`
  MODIFY `patient_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `is_users`
--
ALTER TABLE `is_users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
